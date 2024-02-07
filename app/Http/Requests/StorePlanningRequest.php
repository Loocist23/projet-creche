<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlanningRequest extends FormRequest
{
    /**
     * Determine if the users is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->isAdmin();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            '8H-10h'   => 'required|string|max:255',
            '10H-12h'  => 'required|string|max:255',
            '12H-14h'  => 'required|string|max:255',
            '14H-16h'  => 'required|string|max:255',
            '16H-18h'  => 'required|string|max:255',
            'date'     => 'required|date',
        ];
    }
}
