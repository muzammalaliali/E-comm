<?php

namespace App\Http\Requests;


use Illuminate\Support\Str;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
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
            // 'userpass'=>'required|alpha_num|min:6',
            'useremail'=>'required|email',
          //   'userage'=>'required|numeric|min:18',
            'userage'=>'required|numeric|between:18,21',
            // 'usercity'=>'required',
        ];
    }
    public function messages()
    {
        return [
"username.required"=>':attribute yor name is necessry ',
"useremail.required"=>'yor email is necessry ',
        ];


    }
    public function attributes()
    {
        return [
        'username'=>'UUser name',
        'useremail'=>'UUser email',
        'userage'=>'UUser age',
        'userpass'=>'UUser password',
        ];

    }
    protected function prepareForValidation(): void
    {


        $this->merge([
//  'username'=> strtoupper($this->username)
'username'=> str::slug($this->username)
        ]

        );
    }
    protected $stopOnFirstFailure = true;
     // protected $stopOnFirstFailure = true;

}
