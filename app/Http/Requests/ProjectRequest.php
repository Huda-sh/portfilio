<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectRequest extends FormRequest
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
            'name'=>['required', 'string'],
            'description'=>['required', 'string'],
            'web_link'=>['nullable', 'string'],
            'app_link'=>['nullable', 'string'],
            'source_code'=>['nullable', 'string'],
            'demo_link'=>['nullable', 'string'],
            'files'=>['array'],
            'files.*'=>['required', 'file'],
            'technologies'=>['required','array'],
            'technologies.*'=>['required', 'integer'],
            'preview'=>['file']
        ];
    }
}
