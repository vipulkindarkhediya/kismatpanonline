<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest {
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
            //
            'f_name' => ['required','min:4','max:10'],
            'm_name' => ['required','min:4','max:10'],
            'l_name' => ['required', 'min:5', 'max:20'],
            'email' => ['required','email','unique:users,email'],
            'contact' => ['required','unique:users,contact'],
            'dob' => ['required'],
            'gender' => ['required'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'address' => ['required'],
            'image' => ['required'],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'f_name.required' => 'Please enter your first name',
            'm_name.required' => 'Please enter your middle name',
            'l_name.required' => 'Please enter your last name',
            'email.required' => 'Please enter your email address',
            'contact.required' => 'Please enter your contact number',
            'gender.required' => 'Please select your gender',
            'dob.required' => 'Please enter your birth date',
            'password.required' => 'Please enter your password',
            'address.required' => 'Please enter your address',
            'image.required' => 'Please select your profile picture',
            
            


        ];
    }
}
