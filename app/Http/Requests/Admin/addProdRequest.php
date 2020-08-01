<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class addProdRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'img'=>"required|image:jpeg,png,jpg,gif|max:2048"
          
            // 'seria'=> "required|max:255",
            // 'price'=> "required|max:255",
         
        ];
    }
}
