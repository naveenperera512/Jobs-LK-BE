<?php

namespace Modules\Core\Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $users = [
            [
                "name" => "Admin",
                "email" => "admin@joblk.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("10qbit<2021>"),
                "is_admin"=>1,
                'remember_token' => 'basic_token',
            ],
            [
                "name" => "Admin1",
                "email" => "admin1@joblk.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("10qbit<2021>"),
                "is_admin"=>1,
                'remember_token' => 'basic_token',
            ],
            [
                "name" => "Nirash",
                "email" => "nirash@joblk.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("10qbit<2021>"),
                "is_admin"=>0,
                'remember_token' => 'basic_token',
            ],
            [
                "name" => "Naveen",
                "email" => "naveen@joblk.com",
                'email_verified_at' => Carbon::now(),
                "password" => bcrypt("10qbit<2021>"),
                "is_admin"=>0,
                'remember_token' => 'basic_token',
            ],
        ];

        foreach($users as $user)
        {
            User::create([
                "name" => $user["name"],
                "email" => $user["email"],
                "email_verified_at" => Carbon::now(),
                "password" => $user["password"],
                "is_admin"=>$user["is_admin"],
                "remember_token" => $user["remember_token"]
            ]);
        }
    }
}

