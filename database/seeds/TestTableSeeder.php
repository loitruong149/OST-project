<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make(123123123),
            'address' => 'tokyo',
            'age' => '26',
            'phone' =>'123456789',
            'class' => '1'
        ]);

        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => null,
            'password' => Hash::make(123123123),
            'address' => 'saitama',
            'age' => '26',
            'phone' =>'123456789',
            'class' => '2'
        ]);
    }
}
