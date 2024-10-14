<?php

namespace App\Http\Requests;


use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username'=>'required',
            'userpass'=>'required|alpha_num|min:6',
            'useremail'=>'required|email',
          //   'userage'=>'required|numeric|min:18',
            'userage'=>'required|numeric|between:18,21',
            'usercity'=>'required',
        ];
    }
    // public function  messages()
    // {
    //     return [
    //      "username.required"=>':attribute  req is required',
    //      "useremail.required"=>'user email req is required',
    //      "useremail.email"=>'user email for email is required',
    //     ];
    // }
    public function attributes()
    {
        return[
             'username'=>'UUser name',
            'userpass'=>'Uuser pass',
            'useremail'=>'Uuser email',
          //   'userage'=>'required|numeric|min:18',
            'userage'=>'Uuser age',
            'usercity'=>'Uuser city',
        ];
    }
    protected function prepareForValidation(): void
    {
       $this->merge([
    //    'username'=> strtoupper($this->username),
      'username'=> Str::slug($this->username),
       ]);

    }
    // protected $stopOnFirstFailure = true;
}
