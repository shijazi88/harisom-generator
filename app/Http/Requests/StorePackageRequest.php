<?php

namespace App\Http\Requests;

use App\Models\Package;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StorePackageRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_create');
    }

    public function rules()
    {
        return [
            'price' => [
                'numeric',
                'required',
                'min:0',
            ],
            'discount' => [
                'numeric',
                'required',
                'min:0',
            ],
            'package_name' => [
                'string',
                'required',
            ],
            'package_type' => [
                'required',
            ],
            'package_period' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'package_period_unit' => [
                'string',
                'required',
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
