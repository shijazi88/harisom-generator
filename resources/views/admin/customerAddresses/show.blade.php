@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.customerAddress.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.id') }}
                        </th>
                        <td>
                            {{ $customerAddress->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.customer') }}
                        </th>
                        <td>
                            {{ $customerAddress->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.lat') }}
                        </th>
                        <td>
                            {{ $customerAddress->lat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.lng') }}
                        </th>
                        <td>
                            {{ $customerAddress->lng }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.location_info') }}
                        </th>
                        <td>
                            {{ $customerAddress->location_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.customerAddress.fields.address_extra_details') }}
                        </th>
                        <td>
                            {{ $customerAddress->address_extra_details }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.customer-addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection