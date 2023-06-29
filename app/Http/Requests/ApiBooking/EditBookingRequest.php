<?php

namespace App\Http\Requests\ApiBooking;

use Illuminate\Foundation\Http\FormRequest;

class EditBookingRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Rooms' => 'required',
            'Name' => 'required',
            'Email' => 'required',
            'Phone' => 'required',
        ];
    }
}
