@extends('layouts.admin')
@section('content')
@can('worker_address_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.worker-addresses.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.workerAddress.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.workerAddress.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-WorkerAddress">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.customer') }}
                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.home_lat') }}
                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.home_lng') }}
                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.location_info') }}
                        </th>
                        <th>
                            {{ trans('cruds.workerAddress.fields.address_extra_details') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($workerAddresses as $key => $workerAddress)
                        <tr data-entry-id="{{ $workerAddress->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $workerAddress->id ?? '' }}
                            </td>
                            <td>
                                {{ $workerAddress->customer->name ?? '' }}
                            </td>
                            <td>
                                {{ $workerAddress->home_lat ?? '' }}
                            </td>
                            <td>
                                {{ $workerAddress->home_lng ?? '' }}
                            </td>
                            <td>
                                {{ $workerAddress->location_info ?? '' }}
                            </td>
                            <td>
                                {{ $workerAddress->address_extra_details ?? '' }}
                            </td>
                            <td>
                                @can('worker_address_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.worker-addresses.show', $workerAddress->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('worker_address_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.worker-addresses.edit', $workerAddress->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('worker_address_delete')
                                    <form action="{{ route('admin.worker-addresses.destroy', $workerAddress->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
@can('worker_address_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.worker-addresses.massDestroy') }}",
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
  let table = $('.datatable-WorkerAddress:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection