@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.workerAddress.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.worker-addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.id') }}
                        </th>
                        <td>
                            {{ $workerAddress->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.customer') }}
                        </th>
                        <td>
                            {{ $workerAddress->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.home_lat') }}
                        </th>
                        <td>
                            {{ $workerAddress->home_lat }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.home_lng') }}
                        </th>
                        <td>
                            {{ $workerAddress->home_lng }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.location_info') }}
                        </th>
                        <td>
                            {{ $workerAddress->location_info }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.workerAddress.fields.address_extra_details') }}
                        </th>
                        <td>
                            {{ $workerAddress->address_extra_details }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.worker-addresses.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection