@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('cruds.sms.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-Sms">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.sms.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.sms.fields.mobile') }}
                        </th>
                        <th>
                            {{ trans('cruds.sms.fields.otp') }}
                        </th>
                        <th>
                            {{ trans('cruds.sms.fields.user_type') }}
                        </th>
                        <th>
                            {{ trans('cruds.sms.fields.status') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($smss as $key => $sms)
                        <tr data-entry-id="{{ $sms->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $sms->id ?? '' }}
                            </td>
                            <td>
                                {{ $sms->mobile ?? '' }}
                            </td>
                            <td>
                                {{ $sms->otp ?? '' }}
                            </td>
                            <td>
                                {{ $sms->user_type ?? '' }}
                            </td>
                            <td>
                                {{ $sms->status ?? '' }}
                            </td>
                            <td>
                                @can('sms_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.smss.show', $sms->id) }}">
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
  let table = $('.datatable-Sms:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection