<?php

namespace App\Http\Requests;

use App\Models\PackagePeriod;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePackagePeriodRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('package_period_edit');
    }

    public function rules()
    {
        return [
            'package_id' => [
                'required',
                'integer',
            ],
            'discount' => [
                'numeric',
                'required',
            ],
            'period_value' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'period_label_en' => [
                'string',
                'required',
            ],
            'period_label_ar' => [
                'string',
                'required',
            ],
        ];
    }
}
