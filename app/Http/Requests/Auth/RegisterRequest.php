<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules;

class RegisterRequest extends FormRequest
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
            //
            'f_name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'min:4', 'max:10'],
            'm_name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'min:4', 'max:10'],
            'l_name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'min:5', 'max:20'],
            'email' => ['required', 'email', 'unique:users,email'],
            'contact' => ['required', 'unique:users,contact', 'regex:/^\S*$/u', 'digits:10', 'numeric',],
            'dob' => ['required', 'date'],
            'gender' => ['required', 'in:male,female,others'],
            'password' => ['required', 'confirmed', Rules\Password::defaults(), 'min:8', 'regex:/[@$!%*#?&]/'],
            'address' => ['required', 'min:10', 'max:50'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
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
            'f_name.regex' => 'please enter a valid first name',
            'f_name.min' => 'please enter a first name min 4 character name',
            'f_name.max' => 'please enter a first name max 10 character name',
            'm_name.required' => 'Please enter your middle name',
            'm_name.regex' => 'please enter a valid middle name',
            'm_name.min' => 'please enter a middle name min 4 character name',
            'm_name.max' => 'please enter a middle name max 10 character name',
            'l_name.required' => 'Please enter your last name',
            'l_name.regex' => 'please enter a valid last name',
            'l_name.min' => 'please enter a last name min 4 character name',
            'l_name.max' => 'please enter a last name max 10 character name',
            'email.required' => 'Please enter your email address',
            'email.unique' => 'This email address is already register',
            'contact.required' => 'Please enter your contact number',
            'contact.unique' => 'This contact number is already register',
            'contact.numeric' => 'please enter a valid contact number',
            'contact.digits' => 'please enter your 10 digits contact number enter',
            'contact.regex' => 'this is enter contact number white space not allow',
            'gender.required' => 'Please select your gender',
            'gender.in' => 'please select valid your gender select',
            'dob.required' => 'Please enter your birth date',
            'password.required' => 'please enter your password',
            'password.regex' => 'password please use special characters enter ',
            'password.min' => 'please enter your password min 8 enter',
            'password.confirmed' => 'please enter your  same password',
            'address.required' => 'Please enter your address',
            'address.min' => 'please enter a address min 10 characters',
            'address.max' => 'please enter a address max 50 characters',
            'image.required' => 'please select your profile picture',
            'image.image' => 'please enter valid your profile picture',
            'image.mimes' => 'please enter your profile picture jpeg,png,jpg formate',
            'image.max' => 'please enter your profile picture Max 2 MB',





        ];
    }
}
