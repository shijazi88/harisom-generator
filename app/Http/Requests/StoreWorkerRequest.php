<?php

namespace App\Http\Requests;

use App\Models\Worker;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkerRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('worker_create');
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
            ],
            'status' => [
                'required',
            ],
        ];
    }
}
