<?php

declare(strict_types=1);

namespace App\Request\Login;

use Hyperf\Validation\Request\FormRequest;

class LoginRequest extends FormRequest
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
     */
    public function rules(): array
    {
        return [
            'mobile'    => 'required|digits:11',
            'password'  => 'required|between:6,18'
        ];
    }
}
