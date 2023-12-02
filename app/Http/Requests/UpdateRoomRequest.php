<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRoomRequest extends FormRequest
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
            'home_id' => 'required',
            'room_number' => 'required',
            'image' => 'required',
            'room_count' => 'required',
            'width' => 'required',
            'floor' => 'required',
            'date' => 'required',
            'price' => 'required',
        ];
    }
}
