<?php

namespace App\Http\Requests;

use App\Models\Service;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreServiceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('service_create');
    }

    public function rules()
    {
        return [
            'service_type' => [
                'string',
                'nullable',
            ],
            'description' => [
                'required',
            ],
            'service_name' => [
                'string',
                'required',
            ],
            'spend_time' => [
                'string',
                'required',
            ],
        ];
    }
}
