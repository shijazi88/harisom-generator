<?php

namespace App\Http\Requests;

use App\Models\Coupon;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCouponRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('coupon_create');
    }

    public function rules()
    {
        return [
            'code' => [
                'string',
                'required',
                'unique:coupons',
            ],
            'coupon_type' => [
                'required',
            ],
            'coupon_value' => [
                'string',
                'required',
            ],
            'min_amount' => [
                'string',
                'required',
            ],
            'from_date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'to_date' => [
                'date_format:' . config('panel.date_format'),
                'nullable',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}