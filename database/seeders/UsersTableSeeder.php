<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@dglass.com',
            'password' => bcrypt('semangat'),
            'address' => 'Jln. kembang kenangan no V  Surabaya, jawa timur',
            'phone' => '08123456789',
            'fullname' => 'admin',
            'status'=>'admin'
        ]);
        User::create([
            'name' => 'ahna',
            'email' => 'ahna@mail.com',
            'password' => bcrypt('semangat'),
            'address' => 'Jln. kupang jaya no XII Gresik, jawa timur',
            'phone' => '08123456789',
            'fullname' => 'ahna',
            'status' => 'member'
        ]);
    }
}
