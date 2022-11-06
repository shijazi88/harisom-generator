@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.question.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.questions.update", [$question->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="package_id">{{ trans('cruds.question.fields.package') }}</label>
                <select class="form-control select2 {{ $errors->has('package') ? 'is-invalid' : '' }}" name="package_id" id="package_id" required>
                    @foreach($packages as $id => $entry)
                        <option value="{{ $id }}" {{ (old('package_id') ? old('package_id') : $question->package->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('package'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.package_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="question_en">{{ trans('cruds.question.fields.question_en') }}</label>
                <textarea class="form-control {{ $errors->has('question_en') ? 'is-invalid' : '' }}" name="question_en" id="question_en">{{ old('question_en', $question->question_en) }}</textarea>
                @if($errors->has('question_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('question_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.question_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="question_ar">{{ trans('cruds.question.fields.question_ar') }}</label>
                <textarea class="form-control {{ $errors->has('question_ar') ? 'is-invalid' : '' }}" name="question_ar" id="question_ar" required>{{ old('question_ar', $question->question_ar) }}</textarea>
                @if($errors->has('question_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('question_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.question_ar_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.question.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', $question->price) }}" step="0.01" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.question.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Question::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', $question->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.question.fields.status_helper') }}</span>
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