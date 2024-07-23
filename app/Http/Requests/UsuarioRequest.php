<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'cpf' => 'required|unique:usuarios,cpf',
            'email' => 'required|email|unique:usuarios,email',
        ];
    }

    public function messages(): array {
        return [
            'cpf.required' => 'Informe o cpf',
            'email.required' => 'Informe o email',
            'email.unique'  => 'E-mail já existe',
            'cpf.unique'    => 'cpf já existe',
        ];
    }

}
