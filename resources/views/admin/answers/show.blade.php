@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.answer.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.answers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.answer.fields.id') }}
                        </th>
                        <td>
                            {{ $answer->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answer.fields.question') }}
                        </th>
                        <td>
                            {{ $answer->question->question_en ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answer.fields.answer_en') }}
                        </th>
                        <td>
                            {{ $answer->answer_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answer.fields.answer_ar') }}
                        </th>
                        <td>
                            {{ $answer->answer_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.answer.fields.value') }}
                        </th>
                        <td>
                            {{ $answer->value }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.answers.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection