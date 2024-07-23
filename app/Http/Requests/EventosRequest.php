<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventosRequest extends FormRequest
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
            'IDProjeto' => 'required',
            'imgCapa'   => 'mimes:jpeg,png,jpg,gif|size:2048',
        ];
    }

    public function messages(): array {
        return [
            'IDProjeto.required' => 'Informe o projeto',
        ];
    }


}
