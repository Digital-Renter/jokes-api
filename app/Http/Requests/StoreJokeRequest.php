<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJokeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'punchline' => ['required', 'string'],
            'setup' => ['required', 'string'],
            'author_name' => ['required'],
            'category_id' => ['required', 'exists:categories,id'],
            'author_email' => ['required', 'email'],
        ];
    }
}
