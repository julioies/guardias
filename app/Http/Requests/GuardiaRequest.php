<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardiaRequest extends FormRequest
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
			'profesor_id' => 'required',
			'horario_id' => 'required',
			'zona_id' => 'required',
			'mes' => 'required|string',
        ];
    }
}
