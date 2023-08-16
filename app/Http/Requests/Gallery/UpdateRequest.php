<?php

namespace App\Http\Requests\Gallery;

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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'main_image' => 'nullable|file|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_id' => 'nullable|integer|exists:tags,id',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Це поле обов\'язкове до заповнення',
            'content.required' => 'Це поле обов\'язкове до заповнення',
            'preview_image.required' => 'Це поле обов\'язкове до заповнення',
            'preview_image.file' => 'Потрібно вибрати фото',
            'main_image.required' => 'Це поле обов\'язкове до заповнення',
            'main_image.file' => 'Потрібно вибрати фото',
            'category_id.required' => 'Це поле обов\'язкове до заповнення',
            'preview_image.max' => 'Фото занадто велике',
            'main_image.max' => 'Фото занадто велике',

        ];
    }
}
