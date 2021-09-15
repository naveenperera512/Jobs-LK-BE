<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\Vacancy;

class VacancyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $vacancies = [
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>1,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>2,
                "job_type_id"=>2,
                "district_id"=>2,
                "district_city_id"=>2,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"KFC",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>1,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>3,
                "job_type_id"=>3,
                "district_id"=>3,
                "district_city_id"=>3,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>1,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>2,
                "district_id"=>3,
                "district_city_id"=>2,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>0,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>1,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>1,
                "approved_by_id"=>0,

            ],
            [
                "category_id"=>1,
                "job_type_id"=>4,
                "district_id"=>1,
                "district_city_id"=>1,
                "user_id"=>3,
                "title"=>"Intern Accountancy 2",
                "employee_name"=>"AIA",
                "employee_email"=>"aiacv2@aia.com",
                "telephone"=>"070 339 0067",
                "description"=>"Intern Accountancy",
                "cv_image"=>1,
                "is_approved"=>1,
                "approved_by_id"=>0,
            ],

        ];

        foreach($vacancies as $vacancy)
        {
            Vacancy::create([
                "category_id"=>$vacancy["category_id"],
                "job_type_id"=>$vacancy["job_type_id"],
                "district_id"=>$vacancy["district_id"],
                "district_city_id"=>$vacancy["district_city_id"],
                "user_id"=>$vacancy["user_id"],
                "slug"=>$vacancy["title"],
                "title"=>$vacancy["title"],
                "employee_name"=>$vacancy["employee_name"],
                "employee_email"=>$vacancy["employee_email"],
                "telephone"=>$vacancy["telephone"],
                "description"=>$vacancy["description"],
                "cv_image"=>$vacancy["cv_image"],
                "is_approved"=>$vacancy["is_approved"],
                "approved_by_id"=>$vacancy["approved_by_id"],
            ]);
        }
    }
}
