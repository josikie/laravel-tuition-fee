<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User;
        $admin->name = "Admin";
        $admin->email = "admin@spp.com";
        $admin->password = Hash::make('12345678');
        $admin->username = "admin";
        $admin->role = "admin";
        $admin->save();

        $operator = new User;
        $operator->name = "Operator";
        $operator->email = "operator@gmail.com";
        $operator->password = Hash::make('12345678');
        $operator->username = "operator";
        $operator->role = "operator";
        $operator->save();
    }
}
