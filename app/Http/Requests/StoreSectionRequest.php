<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSectionRequest extends FormRequest
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
            'name' => 'required|string|min:5|max:50',
            'leader' => 'required|string|min:5|max:50',
            'leader_phone_number' => 'nullable|string|min:10|max:10',
            'leader_email' => 'nullable|string|min:15|max:1000',
            'assistant' => 'nullable|string|min:5|max:50',
            'assistant_phone_number' => 'nullable|string|min:10|max:10',
            'day' => 'required',
            'start_hour' => 'required|date_format:H:i',
            'end_hour' => 'required|date_format:H:i|after:time_start',
            'place' => 'required|string|min:15|max:255',
            'city' => 'required|min:3|max:50',
            'description' => 'required|min:25|max:3000'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Le nom de la section est manquant.',
            'text.string' => 'Le texte doit être une chaîne de caractères.',
            'text.min' => 'Le texte doit faire au moins 15 caractères.',
            'text.max' => 'Le texte ne doit pas dépasser 1000 caractères.',
            'article_id.required' => 'Le champ article_id est manquant',
            'user_id.required' => 'Le champ user_id est manquant',

        ];
    }
}
