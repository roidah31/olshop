<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Currency;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\User;
use DB;
use Carbon;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    function index(){
        return view('home');
    }
    function member(){
        $id = Auth::user()->id;
        $usr = User::find($id);
        $order = Order::where('customer_id',$id)->orderby('id','Desc')->get();
        $currency=Currency::first();
        return view('front.account',compact('usr','order','currency'));
    }

   //function for section front site user shopping
   //depan , about, contact,account, login, product
    public function depan(){
            $product = Product::where('status',1)->where('qty','>=',1)->get();
        $category= Category::all();
        $currency = Currency::first();
        return view('front.home', compact('product','category','currency'));
    }
    
    public function about()
    {
        return view('front.about');
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function product($id )
    {
        $product = Product::find($id);
        $currency = Currency::first();
        $category = DB::table('products')->join('categories','products.category_id','=','categories.id')->select('categories.name')->where('products.id','=',$id)->first();
        return view('front.product',compact('product','category','currency'));
    }
    public function account()
    {
        return view('front.account');
    }
    public function login()
    {
        return view('front.login');
    }
    // --- function section for cart member must login first ---
    public function addcart($id){
        $cart = session('cart');
        $product = Product::find($id);
        $cart[$id]=[
            
            'name'=>$product->name,
            'price'=>$product->price,
            'image'=>$product->image,
            'qty'=>1
        ];
        session(['cart' => $cart]);
        return redirect('/site_cart');
    }
    public function cart(){
        $cart = session("cart");
        return view("front.cart")->with("cart",$cart);
    }
    function deletecart($id){
        $cart = session('cart');
        unset($cart[$id]);
        session(["cart"=>$cart]);
        return redirect("/site_cart");
    }
    public function addorder(Request $request){
        $cart = session('cart');
        // data customer form
        $dateorder= date('Y-m-d');
        $cust_id =$request->customer_id;
        $cust_firstname = $request->customer_firstname;
        $cust_lastname = $request->customer_lastname;
        $cust_address = $request->customer_address;
        $cust_phone = $request->customer_phone;
        $note = $request->note;
        $grandtotal = $request->grandtotal;
        // end data customer form
        $order = Order::create([
            'date_order' =>$dateorder,
            'customer_id'=>$cust_id,
            'customer_firstname'=>$cust_firstname,
            'customer_lastname'=>$cust_lastname,
            'customer_address'=>$cust_address,
            'customer_phone'=>$cust_phone,
            'note'=>$note,
            'subtotal'=>$grandtotal,
            'status'=>'unpaid'
        ]);        
        $id_trans = $order->id;
       
        foreach($cart as $row => $value){
           $id_prod = $row;
           $id_order= $id_trans;
           $product_name = $value['name'];
           $qty = $value['qty']; 
           $price=$value['price'];
            $total = $qty*$price;
           OrderDetail::create([
            'order_id'=>$id_trans, 
            'product_id'=>$row,
            'product_name'=>$product_name,
            'qty'=> $qty, 
            'price'=>$price,
            'total_price'=>$total]);
        }


        //------- MIDTRANS ------------
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;


        $params = array(
            'transaction_details' => array(
                'order_id' => $id_order,
                'gross_amount' => $grandtotal,
            ),
            'customer_details' => array(
                'first_name' =>  $cust_firstname,
                'last_name' => $cust_lastname,
                'email' => 'budi.pra@example.com',
                'phone' => $cust_phone,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // ----------- END MIDTRANS  ----------------
       
        
       
        return view('front.payment',compact('snapToken','order'));
      
    }

    function checkout(){
        $cart = session("cart");
        return view('front.checkout')->with("cart", $cart);
        //destroy session
        session()->forget('cart');
    }

    function payment()
    {
        return view('front.payment');
    }

    function after_payment(Request $request){
        
        $serverkey = config('midtrans.serverkey');
        $hashed = hash("sha512",$request->order_id.$request->status_code.$request->gross_amount.$serverkey);
        if($hashed == $request->signature_key){
            $order = Order::find($request->order_id);

           $data = DB::statement("UPDATE orders SET status = 'paid' WHERE orders.id =$order->id");
        }
       
    }
         function invoice($id){
        $currency = Currency::first();
        $order = Order::find($id);
        $data = DB::statement("UPDATE products join order_details on products.id=order_details.product_id 
SET products.qty =products.qty-order_details.qty WHERE order_details.order_id=$order->id;");
  $paid = DB::statement("UPDATE orders SET status = 'paid' WHERE `orders`.`id` =$order->id");
      
        return view('front.invoice',compact('order','currency'));
         session()->forget('cart');
    }
    
}
