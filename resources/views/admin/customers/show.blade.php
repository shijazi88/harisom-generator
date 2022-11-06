@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.id') }}
                        </th>
                        <td>
                            {{ $customer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.name') }}
                        </th>
                        <td>
                            {{ $customer->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.mobile') }}
                        </th>
                        <td>
                            {{ $customer->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Customer::GENDER_SELECT[$customer->gender] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Customer::STATUS_SELECT[$customer->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.email') }}
                        </th>
                        <td>
                            {{ $customer->email }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.referral_code') }}
                        </th>
                        <td>
                            {{ $customer->referral_code }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customer.fields.device_type') }}
                        </th>
                        <td>
                            {{ $customer->device_type }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#customer_customer_wallets" role="tab" data-toggle="tab">
                {{ trans('cruds.customerWallet.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#customer_subscriptions" role="tab" data-toggle="tab">
                {{ trans('cruds.subscription.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="customer_customer_wallets">
            @includeIf('admin.customers.relationships.customerCustomerWallets', ['customerWallets' => $customer->customerCustomerWallets])
        </div>
        <div class="tab-pane" role="tabpanel" id="customer_subscriptions">
            @includeIf('admin.customers.relationships.customerSubscriptions', ['subscriptions' => $customer->customerSubscriptions])
        </div>
    </div>
</div>

@endsection