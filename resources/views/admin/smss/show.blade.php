@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.sms.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.smss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.sms.fields.id') }}
                        </th>
                        <td>
                            {{ $sms->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sms.fields.mobile') }}
                        </th>
                        <td>
                            {{ $sms->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sms.fields.otp') }}
                        </th>
                        <td>
                            {{ $sms->otp }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sms.fields.user_type') }}
                        </th>
                        <td>
                            {{ $sms->user_type }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.sms.fields.status') }}
                        </th>
                        <td>
                            {{ $sms->status }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.smss.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection