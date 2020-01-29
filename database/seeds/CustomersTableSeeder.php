<?php

use App\Customer;
use App\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Customer::truncate();
//        DB::table('customer_role')->truncate();
//
//        $adminRole = Role::where('name', 'admin')->first();
//        $userRole = Role::where('name', 'user')->first();
//        $customerRole = Role::where('name', 'customer')->first();
//
//        $admin = Customer::create([
//            'name' => 'Admin',
//            'email' => 'admin@gmail.com',
//            'password' => Hash::make('adminpass')
//        ]);
//
//        $user = Customer::create([
//            'name' => 'User',
//            'email' => 'user@gmail.com',
//            'password' => Hash::make('userpass')
//        ]);
//
//        $customer = Customer::create([
//            'name' => 'Customer',
//            'email' => 'customer@gmail.com',
//            'password' => Hash::make('customerpass')
//        ]);
//
//        $admin->roles()->attach($adminRole);
//        $user->roles()->attach($userRole);
//        $customer->roles()->attach($customerRole);

        factory(Customer::class, 5)->create();
    }
}
