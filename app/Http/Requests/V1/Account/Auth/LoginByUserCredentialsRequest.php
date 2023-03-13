<?php

namespace App\Http\Requests\V1\Account\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginByUserCredentialsRequest extends FormRequest
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
            'clientId' => ['required'],
            'user' => ['required'],
            'password' => ['required'],
        ];
    }
}
