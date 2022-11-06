@extends('layouts.admin')
@section('content')
@can('coupon_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.coupons.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.coupon.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.coupon.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Coupon">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.code') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.coupon_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.min_amount') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.from_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.to_date') }}
                        </th>
                        <th>
                            {{ trans('cruds.coupon.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($coupons as $key => $coupon)
                        <tr data-entry-id="{{ $coupon->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $coupon->id ?? '' }}
                            </td>
                            <td>
                                {{ $coupon->code ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Coupon::COUPON_TYPE_SELECT[$coupon->coupon_type] ?? '' }}
                            </td>
                            <td>
                                {{ $coupon->coupon_value ?? '' }}
                            </td>
                            <td>
                                {{ $coupon->min_amount ?? '' }}
                            </td>
                            <td>
                                {{ $coupon->from_date ?? '' }}
                            </td>
                            <td>
                                {{ $coupon->to_date ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\Coupon::STATUS_SELECT[$coupon->status] ?? '' }}
                            </td>
                            <td>
                                @can('coupon_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.coupons.show', $coupon->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('coupon_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.coupons.edit', $coupon->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('coupon_delete')
                                    <form action="{{ route('admin.coupons.destroy', $coupon->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                    </form>
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
@can('coupon_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.coupons.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-Coupon:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection