<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDownloadRequest extends FormRequest
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
            'file_name' => 'required|string|min:10|max:100',
            'description' => 'required|string|min:10|max:255',
            'category_id' => 'required|integer'
        ];
    }

    public function messages()
    {
        return [
            'file_name.required' => 'Le nom du fichier est manquant.',
            'file_name.string' => 'Le nom du fichier doit être une chaîne de caractères.',
            'file_name.min' => 'Le nom du fichier doit faire au moins 10 caractères.',
            'file_name.max' => 'Le nom du fichier ne doit pas dépasser 100 caractères.',
            'description.required' => 'La description est manquante.',
            'description.string' => 'La description doit être une chaîne de caractères.',
            'description.min' => 'La description doit faire au moins 10 caractères.',
            'description.max' => 'La description ne doit pas dépasser 255 caractères.',
            'category_id.required' => 'Le champ category_id est manquant'
        ];
    }
}
