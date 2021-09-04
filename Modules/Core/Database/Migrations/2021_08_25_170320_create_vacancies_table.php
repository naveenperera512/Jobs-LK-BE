<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVacanciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->references('id')->on('categories');
            $table->foreignId('job_type_id')->references('id')->on('job_types');
            $table->foreignId('district_id')->references('id')->on('districts');
            $table->foreignId('district_city_id')->references('id')->on('district_cities');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->string('slug');
            $table->string('title');
            $table->string('employee_name');
            $table->string('employee_email');
            $table->string('telephone');
            $table->date('deadline_date')->nullable();
            $table->text('description');
            $table->foreignId('cv_image')->nullable()->references('id')->on('files');
            $table->json('data')->nullable();
            $table->boolean('is_approved')->default(false);
            $table->string('approved_by_id')->nullable();
            $table->timestamp('approved_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('vacancies');
    }
}
