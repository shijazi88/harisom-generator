@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.question.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.questions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.id') }}
                        </th>
                        <td>
                            {{ $question->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.package') }}
                        </th>
                        <td>
                            {{ $question->package->package_name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.question_en') }}
                        </th>
                        <td>
                            {{ $question->question_en }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.question_ar') }}
                        </th>
                        <td>
                            {{ $question->question_ar }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.price') }}
                        </th>
                        <td>
                            {{ $question->price }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.question.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Question::STATUS_SELECT[$question->status] ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.questions.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection