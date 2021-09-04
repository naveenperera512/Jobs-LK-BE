<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\JobType;

class JobTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $jobtypes = [
            [
                "name"=> "Permanent",
            ],
            [
                "name"=> "Temporary",
            ],
            [
                "name"=> "Full Time",
            ],
            [
                "name"=> "Part Time",
            ],
            [
                "name"=> "Full Time or Part Time",
            ],
            [
                "name"=> "Contract Basis",
            ],
            [
                "name"=> "Freelance",
            ],
            [
                "name"=> "Other",
            ],
        ];

        foreach($jobtypes as $jobtype){
            JobType::create([
                "name"=> $jobtype["name"],
                "slug"=> $jobtype["name"],
            ]);
        }
    }
}
