<?php

namespace Modules\Admin\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class CategoryUpdateRequest extends FormRequest
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
            'slug' => 'required ',
            'description' => 'required ',
        ];
    }


    public function messages(): array
    {
        return [
            'name.required' => 'Name is required!',
            'name.max' => 'Name is too long!',
            'description.required' => 'Description is required!',
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
