<?php

namespace App\Http\Requests;

class CreateClinic extends DefaultRequest
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
            'code' => 'string|required',
            'name' => 'string|required',
            'ein_documentation' => 'string|required',
            'address' => 'string|required',
            'neighborhood' => 'string|required',
            'city' => 'string|required',
            'state' => 'string|required',
            'zipcode' => 'string|required',
            'phone' => 'string|required',
            'specialty' => 'string|required',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'code.string' => 'Code must be a string',
            'code.required' => 'Code is required',
            'name.required' => 'Name is required',
            'ein_documentation.required' => 'Documentation is required',
            'address.required' => 'Address is required',
            'neighborhood.required' => 'Neighborhood is required',
            'city.required' => 'City is required',
            'state.required' => 'State is required',
            'zipcode.required' => 'Zipcode is required',
            'phone.required' => 'Phone is required',
            'specialty.required' => 'Specialty is required',
        ];
    }
}
