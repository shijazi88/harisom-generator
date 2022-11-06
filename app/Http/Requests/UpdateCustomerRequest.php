<?php

namespace App\Http\Requests;

use App\Models\Customer;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCustomerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'mobile' => [
                'string',
                'required',
                'unique:customers,mobile,' . request()->route('customer')->id,
            ],
            'gender' => [
                'required',
            ],
            'status' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'referral_code' => [
                'string',
                'required',
                'unique:customers,referral_code,' . request()->route('customer')->id,
            ],
        ];
    }
}
