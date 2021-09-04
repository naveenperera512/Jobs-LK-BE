<?php

namespace Modules\Core\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerStoreRequest extends FormRequest
{

    public function rules()
    {
        return [
            'first_name'=>['required'],
            'last_name'=>['required'],
            'company_name'=>['required'],
            'email'=>['required','email','unique:customers','email'],
            'phone_number'=>['required'],
            'locale'=>['required'],
            'preferred_currency'=>['required'],
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
