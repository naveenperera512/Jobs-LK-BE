<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $categories = [
            [
                "name" => "Accountancy & Finance",
                "description" =>"All New & Old Accountancy & Finance jobs"
            ],
            [
                "name" => "Media / Advertising / Communication/ Design",
                "description" =>"All New & Old Media / Advertising / Communication/ Design jobs"
            ],
            [
                "name" => "Banking & Financial Services",
                "description" =>"All New & Old Banking & Financial Services jobs"
            ],
            [
                "name" => "Human Resources / Recruitment",
                "description" =>"All New & Old Human Resources / Recruitment jobs"
            ],
            [
                "name" => "Travel / Ticketing/ Airline / Shipping",
                "description" =>"All New & Old Travel / Ticketing/ Airline / Shipping jobs"
            ],
        ];

        foreach($categories as $category){
            Category::create([
                "slug" => $category["name"],
                "name" => $category["name"],
                "description" => $category["description"],

            ]);
        }
    }
}
