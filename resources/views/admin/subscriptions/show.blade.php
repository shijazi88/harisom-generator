@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.subscription.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subscriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.id') }}
                        </th>
                        <td>
                            {{ $subscription->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.customer') }}
                        </th>
                        <td>
                            {{ $subscription->customer->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.package') }}
                        </th>
                        <td>
                            {{ $subscription->package->package_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.address') }}
                        </th>
                        <td>
                            {{ $subscription->address->location_info ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.vehicle') }}
                        </th>
                        <td>
                            {{ $subscription->vehicle->plate_number ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.price') }}
                        </th>
                        <td>
                            {{ $subscription->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.instructions') }}
                        </th>
                        <td>
                            {{ $subscription->instructions }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.payment_method') }}
                        </th>
                        <td>
                            {{ $subscription->payment_method }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.status') }}
                        </th>
                        <td>
                            {{ $subscription->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.coupon') }}
                        </th>
                        <td>
                            {{ $subscription->coupon }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.discount') }}
                        </th>
                        <td>
                            {{ $subscription->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.details') }}
                        </th>
                        <td>
                            {{ $subscription->details }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.start_date') }}
                        </th>
                        <td>
                            {{ $subscription->start_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.endt_date') }}
                        </th>
                        <td>
                            {{ $subscription->endt_date }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_hour') }}
                        </th>
                        <td>
                            {{ $subscription->selected_hour }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.service_time') }}
                        </th>
                        <td>
                            {{ $subscription->service_time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_period') }}
                        </th>
                        <td>
                            {{ $subscription->selected_period->period_label_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_days') }}
                        </th>
                        <td>
                            {{ $subscription->selected_days }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.subscriptions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection