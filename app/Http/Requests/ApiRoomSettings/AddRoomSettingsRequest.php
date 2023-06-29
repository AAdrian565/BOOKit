<?php

namespace App\Http\Requests\ApiRoomSettings;

use Illuminate\Foundation\Http\FormRequest;

class AddRoomSettingsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'Rooms' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'date' => 'required',
            'timeStart' => 'required',
            'timeEnd' => 'required',
        ];
    }
}
