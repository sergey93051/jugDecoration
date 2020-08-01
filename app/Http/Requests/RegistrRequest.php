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
               'email' => ['required', 'string', 'email','unique:users'],
                'nameS'=> ['string'],
                'phone'=>  ['required','numeric'],
                'postcode'=> ['required','numeric'],
                'country'=>['required','string'],
                 "city"=>['required','string'],
                'password' => ['required', 'string', 'min:8','max:50']
                
        ];
    }
}
