<?php

namespace Modules\Admin\Http\Requests\JobType;

use Illuminate\Foundation\Http\FormRequest;

class JobTypeUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required | max:255',
            'slug' => 'required | max:255',
        ];
    }

    public function message(){
        return[
            'name.required' => 'Name is required!',
            'name.max' => 'Name is too long!',
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
