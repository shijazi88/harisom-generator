<?php

namespace App\Http\Requests;

use App\Models\WorkerAddress;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWorkerAddressRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('worker_address_create');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'home_lat' => [
                'numeric',
                'required',
            ],
            'home_lng' => [
                'numeric',
                'required',
            ],
            'location_info' => [
                'required',
            ],
            'address_extra_details' => [
                'required',
            ],
        ];
    }
}
