@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.worker.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.id') }}
                        </th>
                        <td>
                            {{ $worker->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.name') }}
                        </th>
                        <td>
                            {{ $worker->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.mobile') }}
                        </th>
                        <td>
                            {{ $worker->mobile }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Worker::STATUS_SELECT[$worker->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.worker.fields.gender') }}
                        </th>
                        <td>
                            {{ App\Models\Worker::GENDER_SELECT[$worker->gender] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.workers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection