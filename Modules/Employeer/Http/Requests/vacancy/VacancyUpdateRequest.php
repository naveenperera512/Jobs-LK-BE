<?php

namespace Modules\Employeer\Http\Requests\vacancy;

use Illuminate\Foundation\Http\FormRequest;

class vacancyUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            // "category_id"=> 'required',
            // "job_type_id"=> 'required',
            // "district_id"=> 'required',
            // "district_city_id"=> 'required',
            // "user_id"=> 'required',
            // "slug"=> 'required',
            // "title"=> 'required',
            "employee_name"=> 'required',
            "employee_email"=> 'required',
            "telephone"=> 'required',
            // "deadline_date" => 'required',
            "description"=> 'required',
            // "cv_image"=> 'required',
            // "is_approved"=> 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
