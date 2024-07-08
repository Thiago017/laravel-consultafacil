<?php

namespace App\Http\Requests;

class UpdateClinic extends DefaultRequest
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
            'code' => 'string',
            'name' => 'string',
            'ein_documentation' => 'string',
            'address' => 'string',
            'neighborhood' => 'string',
            'city' => 'string',
            'state' => 'string',
            'zipcode' => 'string',
            'phone' => 'string',
            'specialty' => 'string',
        ];
    }

    public function messages(): array
    {
        return [
            'code.string' => 'Code must be a string',
            'name.string' => 'Name must be a string',
            'ein_documentation.string' => 'Documentation must be a string',
            'address.string' => 'Address must be a string',
            'neighborhood.string' => 'Neighborhood must be a string',
            'city.string' => 'City must be a string',
            'state.string' => 'State must be a string',
            'zipcode.string' => 'Zipcode must be a string',
            'phone.string' => 'Phone must be a string',
            'specialty.string' => 'Specialty must be a string',
        ];
    }
}
