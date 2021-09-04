<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Faker\Factory as Faker;
use Modules\Core\Entities\Customer;

class CustomerSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach(range(1,20) as $index){
            $customer = Customer::create([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'company_name' => $faker->company,
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber,
                'locale' => $faker->country,
                'preferred_currency' => $faker->currencyCode,
            ]);
        }
    }
}
