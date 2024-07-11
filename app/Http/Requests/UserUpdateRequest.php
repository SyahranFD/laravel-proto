<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'full_name' => 'min:1|max:255',
            'age' => 'integer|min:1|max:100',
            'job' => 'min:1|max:255',
//          'profile_picture' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'profile_picture' => 'min:1|max:2048',
            'profile_background' => 'min:1|max:2048',
        ];
    }
}
