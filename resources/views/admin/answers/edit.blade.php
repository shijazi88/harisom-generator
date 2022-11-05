@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.answer.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.answers.update", [$answer->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="question_id">{{ trans('cruds.answer.fields.question') }}</label>
                <select class="form-control select2 {{ $errors->has('question') ? 'is-invalid' : '' }}" name="question_id" id="question_id" required>
                    @foreach($questions as $id => $entry)
                        <option value="{{ $id }}" {{ (old('question_id') ? old('question_id') : $answer->question->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('question'))
                    <div class="invalid-feedback">
                        {{ $errors->first('question') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.answer.fields.question_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="answer_en">{{ trans('cruds.answer.fields.answer_en') }}</label>
                <textarea class="form-control {{ $errors->has('answer_en') ? 'is-invalid' : '' }}" name="answer_en" id="answer_en" required>{{ old('answer_en', $answer->answer_en) }}</textarea>
                @if($errors->has('answer_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('answer_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.answer.fields.answer_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="answer_ar">{{ trans('cruds.answer.fields.answer_ar') }}</label>
                <textarea class="form-control {{ $errors->has('answer_ar') ? 'is-invalid' : '' }}" name="answer_ar" id="answer_ar" required>{{ old('answer_ar', $answer->answer_ar) }}</textarea>
                @if($errors->has('answer_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('answer_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.answer.fields.answer_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="value">{{ trans('cruds.answer.fields.value') }}</label>
                <input class="form-control {{ $errors->has('value') ? 'is-invalid' : '' }}" type="number" name="value" id="value" value="{{ old('value', $answer->value) }}" step="1" required>
                @if($errors->has('value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.answer.fields.value_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection