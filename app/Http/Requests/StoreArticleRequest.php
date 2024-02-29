<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticleRequest extends FormRequest
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
            'title' => 'required|string|min:15|max:255',
            'content' => 'required|string|min:25|max:3000',
            'category_id' => 'required|integer',
            'user_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Le titre est manquant.',
            'title.string' => 'Le contenu doit être une chaîne de caractères.',
            'title.min' => 'Le titre doit faire au moins 15 caractères.',
            'title.max' => 'Le titre ne doit pas dépasser 255 caractères.',
            'content.required' => 'Le contenu est manquant.',
            'content.string' => 'Le contenu doit être une chaîne de caractères.',
            'content.min' => 'Le contenu doit faire au moins 25 caractères.',
            'content.max' => 'Le contenu ne doit pas dépasser 3000 caractères.',
            'category_id.required' => 'Le champ category_id est manquant',
            'user_id.required' => 'Le champ user_id est manquant',
        ];
    }
}
