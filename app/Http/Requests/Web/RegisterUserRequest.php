<?php

namespace App\Http\Requests\Web;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
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
            // 'name' => 'required|string|max:80',
            // 'email' => 'required|string|email|max:100|unique:users',
            // 'password' => 'required|string|min:8'
        ];
    }

    /**
     * Get valiation messages
     *
     * @return array
     */
    public function messages()
    {
        return [

        ];
    }
}
