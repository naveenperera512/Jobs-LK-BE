<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Core\Entities\File;

class FileTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $files = [
            [
                "s3_key" => "key",
                "path" => "AWS/new path",
                "file_type" => "png",
                "file_size" =>"20",
            ],
            [
                "s3_key" => "key",
                "path" => "AWS/new path2",
                "file_type" => "png",
                "file_size" =>"30",
            ],
            [
                "s3_key" => "key",
                "path" => "AWS/new path3",
                "file_type" => "png",
                "file_size" =>"15",
            ],
        ];

        foreach ($files as $file){
            File::create([
                "s3_key" => $file["s3_key"],
                "path" => $file["path"],
                "file_type" => $file["file_type"],
                "file_size" => $file["file_size"],
            ]);
        }
    }
}

