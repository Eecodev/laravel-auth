<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'image' => ['nullable', 'image'],
            'title' => ['required', 'min:3', 'max:200', 'unique:projects'],
            'description' => ['nullable'],
            'url' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'image.url' => 'L\'immagine deve essere di tipo url',
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'title.unique' => 'Questo titolo esiste già',
            'url' => 'L\'url è obbligatorio'
        ];

    }
}
