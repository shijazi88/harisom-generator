@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.subscription.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Subscription">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.package') }}
                        </th>
                        <th>
                            {{ trans('cruds.package.fields.package_name') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.address') }}
                        </th>
                        <th>
                            {{ trans('cruds.customerAddress.fields.location_info') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.vehicle') }}
                        </th>
                        <th>
                            {{ trans('cruds.vehicle.fields.plate_number') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.price') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.instructions') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.payment_method') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.coupon') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.discount') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.details') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.start_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.endt_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_hour') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.service_time') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_period') }}
                        </th>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.period_label_ar') }}
                        </th>
                        <th>
                            {{ trans('cruds.subscription.fields.selected_days') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($subscriptions as $key => $subscription)
                        <tr data-entry-id="{{ $subscription->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $subscription->id ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->customer->name ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->package->package_name ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->package->package_name ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->address->location_info ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->address->location_info ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->vehicle->plate_number ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->vehicle->plate_number ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->price ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->instructions ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->payment_method ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->status ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->coupon ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->discount ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->details ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->start_date ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->endt_date ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->selected_hour ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->service_time ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->selected_period->period_label_en ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->selected_period->period_label_ar ?? '' }}
                            </td>
                            <td>
                                {{ $subscription->selected_days ?? '' }}
                            </td>
                            <td>
                                @can('subscription_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.subscriptions.show', $subscription->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan



                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
  
  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Subscription:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection