@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.packagePeriod.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.id') }}
                        </th>
                        <td>
                            {{ $packagePeriod->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.package') }}
                        </th>
                        <td>
                            {{ $packagePeriod->package->package_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.discount') }}
                        </th>
                        <td>
                            {{ $packagePeriod->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.period_value') }}
                        </th>
                        <td>
                            {{ $packagePeriod->period_value }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.period_label_en') }}
                        </th>
                        <td>
                            {{ $packagePeriod->period_label_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.packagePeriod.fields.period_label_ar') }}
                        </th>
                        <td>
                            {{ $packagePeriod->period_label_ar }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.package-periods.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection