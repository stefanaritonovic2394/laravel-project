<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CompanyRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->isMethod('POST')) {
            return [
                'name' => 'required|string',
                'address' => 'required|string',
                'email' => 'required|email',
            ];
        } elseif ($this->isMethod('PUT')) {
            return [
                'name' => 'required|string',
                'address' => 'required|string',
                'email' => 'required|email|' . Rule::unique('companies', 'email')->ignore($this->company),
            ];
        }

        return [];

    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'address.required' => 'Address is required!',
            'email.required' => 'Email is required!',
        ];
    }
}
