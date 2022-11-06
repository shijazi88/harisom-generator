<?php

namespace App\Http\Requests;

use App\Models\CustomerWallet;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCustomerWalletRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('customer_wallet_create');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'balance' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
