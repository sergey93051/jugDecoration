<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'nameS' => 'required|string|min:2|max:20',
            'phone' =>   'required|min:8|max:20',
            'country' => 'nullable|string|max:20|min:2',
            "city" => 'nullable|string|max:20|min:2',
            'street' => 'nullable|string|min:3|max:50',

        ];
    }
}
