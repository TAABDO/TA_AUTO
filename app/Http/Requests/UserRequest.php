<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [

                'name' => 'sometimes|string|max:255',
                // 'email' => 'required|string|email|max:255|unique:users,email,' . $this->user->id,
                'password' => 'nullable|string|min:8|confirmed',
                'address' => 'nullable|string|max:255',
                'phone' => 'nullable|string|max:20',
                'status' => 'sometimes|string|in:active,inactive',
                'image'=> 'sometimes|mimes:jpg,jpeg,png,gif',

               ];
    }
}
