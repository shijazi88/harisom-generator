@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.package.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packages.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.id') }}
                        </th>
                        <td>
                            {{ $package->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.description') }}
                        </th>
                        <td>
                            {{ $package->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.price') }}
                        </th>
                        <td>
                            {{ $package->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.discount') }}
                        </th>
                        <td>
                            {{ $package->discount }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.package_name') }}
                        </th>
                        <td>
                            {{ $package->package_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.package_type') }}
                        </th>
                        <td>
                            {{ App\Models\Package::PACKAGE_TYPE_SELECT[$package->package_type] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.package_period') }}
                        </th>
                        <td>
                            {{ $package->package_period }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.package_period_unit') }}
                        </th>
                        <td>
                            {{ $package->package_period_unit }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.package.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Package::STATUS_SELECT[$package->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.packages.index') }}">
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
            <a class="nav-link" href="#package_package_periods" role="tab" data-toggle="tab">
                {{ trans('cruds.packagePeriod.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="package_package_periods">
            @includeIf('admin.packages.relationships.packagePackagePeriods', ['packagePeriods' => $package->packagePackagePeriods])
        </div>
    </div>
</div>

@endsection