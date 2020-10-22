<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email' => 'required|unique:users|email',
            'nameS' => 'required|string|min:2|max:20',
            'phone' =>   'required|min:8|max:20',
            'country' => 'required|string|max:20|min:2',
            "city" => 'required|string|max:20|min:2',
            'street' => 'string|min:3|max:20',
            'password' => 'required|min:8|max:30'

        ];
    }
}
