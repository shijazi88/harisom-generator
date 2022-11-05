@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.packagePeriod.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.package-periods.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="package_id">{{ trans('cruds.packagePeriod.fields.package') }}</label>
                <select class="form-control select2 {{ $errors->has('package') ? 'is-invalid' : '' }}" name="package_id" id="package_id" required>
                    @foreach($packages as $id => $entry)
                        <option value="{{ $id }}" {{ old('package_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('package'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.packagePeriod.fields.package_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="discount">{{ trans('cruds.packagePeriod.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', '0') }}" step="0.01" required>
                @if($errors->has('discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.packagePeriod.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="period_value">{{ trans('cruds.packagePeriod.fields.period_value') }}</label>
                <input class="form-control {{ $errors->has('period_value') ? 'is-invalid' : '' }}" type="number" name="period_value" id="period_value" value="{{ old('period_value', '1') }}" step="1" required>
                @if($errors->has('period_value'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_value') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.packagePeriod.fields.period_value_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="period_label_en">{{ trans('cruds.packagePeriod.fields.period_label_en') }}</label>
                <input class="form-control {{ $errors->has('period_label_en') ? 'is-invalid' : '' }}" type="text" name="period_label_en" id="period_label_en" value="{{ old('period_label_en', '') }}" required>
                @if($errors->has('period_label_en'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_label_en') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.packagePeriod.fields.period_label_en_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="period_label_ar">{{ trans('cruds.packagePeriod.fields.period_label_ar') }}</label>
                <input class="form-control {{ $errors->has('period_label_ar') ? 'is-invalid' : '' }}" type="text" name="period_label_ar" id="period_label_ar" value="{{ old('period_label_ar', '') }}" required>
                @if($errors->has('period_label_ar'))
                    <div class="invalid-feedback">
                        {{ $errors->first('period_label_ar') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.packagePeriod.fields.period_label_ar_helper') }}</span>
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