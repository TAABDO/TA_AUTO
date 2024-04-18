<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCarAnnouncementRequest extends FormRequest
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
            'title' => 'sometimes|string',
            'description' => 'sometimes|string',
            'price' => 'sometimes',
            'type' => 'sometimes',
            'color' => 'sometimes',
            'model' => 'sometimes',
            'seat' => 'sometimes',
            'condition' => 'sometimes',
            'km' => 'sometimes',
            'year' => 'sometimes',
            'transmission' => 'sometimes',
            'fuel_type' => 'sometimes',
            'engine_capacity' => 'sometimes',
            'brand_id' => 'sometimes',
            'images' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg',
        ];
    }
}
