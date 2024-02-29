<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommentRequest extends FormRequest
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
            'text' => 'required|string|min:15|max:1000',
            'article_id' => 'required|integer',
            'user_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'text.required' => 'Le texte est manquant.',
            'text.string' => 'Le texte doit être une chaîne de caractères.',
            'text.min' => 'Le texte doit faire au moins 15 caractères.',
            'text.max' => 'Le texte ne doit pas dépasser 1000 caractères.',
            'article_id.required' => 'Le champ article_id est manquant',
            'user_id.required' => 'Le champ user_id est manquant',
        ];
    }
}
