<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;
class LoginRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:80'],
            'password' => ['required', 'string', 'min:8']
        ];
    }
   
    /**
 * Configure the validator instance.
 *
 * @param  \Illuminate\Validation\Validator  $validator
 * @return void
 */
public function withValidator($validator){
    
    $validator->after(function ($validator) {
        $credentials = $this->only('email','password');
       if (Auth::guard('newuser')->attempt($credentials)) {
             return  true;
        }else{
            return $validator->errors()->add('password', 'Your current password or email is incorrect.');
        }  
    });
 
}




}
