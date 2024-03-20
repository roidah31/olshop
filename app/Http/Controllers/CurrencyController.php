<?php
namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;
use DB;
class CurrencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $currency = Currency::all();
        return view('currency.index',compact('currency'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $currency = Currency::orderBy('created_at', 'DESC')->paginate(10);
        // $parent = Currency::getParent()->orderBy('name', 'ASC')->get();
        return view('currency.index', compact('currency'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'currency' => 'required',
            'status' => 'required'
        ]);

        $st= $request->status;
        if($st=="active"){
            $count =DB::table('currencies')
                ->select(DB::raw('count(*) as count'))
                ->where('status', '=',$st)
                ->count();

                if($count < 0){
                    Currency::create(['currency'=>$request->currency,            'status'=>$request->status]);       
                    return redirect(route('currency.index'))->with(['success' => 'Currency Baru Ditambahkan!']);
                }else {
                    return redirect(route('currency.index'))->with(['gagal' => 'another currency is active , please deactive first!']);
                }
        }else{
            Currency::create(['currency' => $request->currency,            'status' => $request->status]);
            return redirect(route('currency.index'))->with(['success' => 'Currency Baru Ditambahkan!']);
        }
            
        dd($count);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function show(Currency $currency)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        
        $currency = Currency::find($id); //QUERY MENGAMBIL DATA BERDASARKAN ID
      
        return view('currency.edit', compact('currency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $st = $request->status;
        if ($st == "active") {
            $count = DB::table('currencies')
            ->select(DB::raw('count(*) as count'))
            ->where('status', '=', $st)
                ->count();

            if ($count < 0) {       
                $currency = Currency::find($id); //QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
                $currency->update([
                    'currency' => $request->currency,
                    'status' => $request->status
                ]);
                return redirect(route('category.index'))->with(['success' => 'Successfully updated']);
            } else {
                return redirect(route('currency.index'))->with(['gagal' => 'another currency is active , please deactive first!']);
            }
        } else {
          

            $currency = Currency::find($id); //QUERY UNTUK MENGAMBIL DATA BERDASARKAN ID
            $currency->update([
                'currency' => $request->currency,
                'status' => $request->status
            ]);
            return redirect(route('currency.index'))->with(['success' => 'Successfully updated']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Currency  $currency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cur = Currency::find($id);
    
        $cur->delete();
        return redirect(route('currency.index'))->with(['success' => 'Currency Successfully deleted']);
    }
}
