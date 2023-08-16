<?php

namespace App\Http\Requests\User_request;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'country' => 'required|string',
            'how_many' => 'required|string',
            'arrivals' => 'required|date',
            'leaving' => 'required|date',
            'info' => 'required|string'

        ];
    }
}
