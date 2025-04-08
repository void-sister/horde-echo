<?php

namespace App\Http\Requests\Auth;

use App\Services\User\Dto\LoginDto;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

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
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email',
            'password' => 'required|string',
        ];
    }

    public function toDto(): LoginDto
    {
        return new LoginDto(
            email: $this->input('email'),
            password: $this->input('password'),
        );
    }
}
