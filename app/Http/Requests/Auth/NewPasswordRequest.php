<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

/**
 * @property string $password
 * @property string $emil
 * @property string $token
 */
class NewPasswordRequest extends FormRequest
{
    public function rules(): array
    {
        return [

            'token' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ];
    }

}
