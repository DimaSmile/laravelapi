<?php

namespace App\Http\Requests;

class FreelancerRequest extends ApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'price' => 'required|int',
            'email' => 'required|string',
            'phone' => 'string',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Name is required!',
            'price.required' => 'Price is required!',
            'email.required' => 'Email is required!',
            'phone.required' => 'Phone should be string',
        ];
    }
}
