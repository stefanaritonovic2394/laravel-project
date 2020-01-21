<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

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
                'email' => 'required|email|unique:customers',
                'active' => 'required|integer',
                'company_id' => 'required',
            ];
        }

        return [
            'name' => 'required|string',
            'email' => 'required|email',
            'active' => 'required|integer',
            'company_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'email.required' => 'Email is required!',
        ];
    }
}
