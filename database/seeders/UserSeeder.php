<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Carbon\Carbon;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // default admin
        DB::table('admins')->insert([
            'firstName' => 'Admin',
            'lastName' => 'AxePro',
            'password' => Hash::make('SecreT12345'), // test123
            'phone' => '+237679286569',
            'email' => 'admin@axeprogroup.com',
            'acnt_type_active' => 'active',
            'dashboard_style' => "dark",
            'status' => 'active',
            'type' => 'Super Admin',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        // default user
        DB::table('users')->insert([
            'name' => 'John',
            'email' => 'support@axeprogroup.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('SecreT12345'), // test123
            'account_type' => '1',
            'ref_by' => '1',
            'address' => "Makepe",
            'country_id' => 'Cameroon',
            'town_id' => 'Douala',
            'state_id' => 'Littoral',
            'zip_code' => '063',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

    }
}
