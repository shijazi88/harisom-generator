<?php

namespace App\Http\Requests;

use App\Models\Vehicle;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVehicleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vehicle_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'vehicle_color' => [
                'string',
                'required',
            ],
            'plate_number' => [
                'string',
                'required',
            ],
            'plate_chars' => [
                'string',
                'required',
            ],
            'vehicle_brand' => [
                'string',
                'required',
            ],
        ];
    }
}
