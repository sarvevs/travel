<?php

namespace App\Http\Requests\Packages;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'en_country' => 'required|string',
            'en_description' => 'required|string',
            'ua_country' => 'string',
            'ua_description' => 'string',
            'image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'rate' => 'nullable|integer',
            'price' => 'nullable|integer',
        ];
    }

    public function messages()
    {
        return [
//            'country.required' => 'Це поле обов\'язкове до заповнення',
//            'description.required' => 'Це поле обов\'язкове до заповнення',
//            'image.required' => 'Це поле обов\'язкове до заповнення',
            'image.file' => 'Потрібно вибрати фото',
//            'rate' => 'Це поле обов\'язкове до заповнення',
//            'price' => 'Це поле обов\'язкове до заповнення',

        ];
    }
}
