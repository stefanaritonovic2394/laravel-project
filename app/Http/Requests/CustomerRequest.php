<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CustomerRequest extends FormRequest
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
                'email' => 'required|email',
                'active' => 'required|integer',
                'company_id' => 'required|integer',
                'rolesId' => 'required|integer',
            ];
        } elseif ($this->isMethod('PUT')) {
            return [
                'name' => 'required|string',
                'email' => 'required|email|' . Rule::unique('customers', 'email')->ignore($this->customer),
                'active' => 'required|integer',
                'company_id' => 'required|integer|exists:customers,company_id',
            ];
        }

        return [];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
            'active.required' => 'Status is required!',
            'company_id.required' => 'Company is required!',
            'rolesId.required' => 'Role is required!',
        ];
    }
}
