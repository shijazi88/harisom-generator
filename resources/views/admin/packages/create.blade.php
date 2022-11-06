@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.package.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.packages.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="description">{{ trans('cruds.package.fields.description') }}</label>
                <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.description_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="price">{{ trans('cruds.package.fields.price') }}</label>
                <input class="form-control {{ $errors->has('price') ? 'is-invalid' : '' }}" type="number" name="price" id="price" value="{{ old('price', '') }}" step="0.01" required>
                @if($errors->has('price'))
                    <div class="invalid-feedback">
                        {{ $errors->first('price') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.price_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="discount">{{ trans('cruds.package.fields.discount') }}</label>
                <input class="form-control {{ $errors->has('discount') ? 'is-invalid' : '' }}" type="number" name="discount" id="discount" value="{{ old('discount', '0') }}" step="0.01" required>
                @if($errors->has('discount'))
                    <div class="invalid-feedback">
                        {{ $errors->first('discount') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.discount_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="package_name">{{ trans('cruds.package.fields.package_name') }}</label>
                <input class="form-control {{ $errors->has('package_name') ? 'is-invalid' : '' }}" type="text" name="package_name" id="package_name" value="{{ old('package_name', '') }}" required>
                @if($errors->has('package_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.package_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.package.fields.package_type') }}</label>
                <select class="form-control {{ $errors->has('package_type') ? 'is-invalid' : '' }}" name="package_type" id="package_type" required>
                    <option value disabled {{ old('package_type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Package::PACKAGE_TYPE_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('package_type', 'Basic') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('package_type'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package_type') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.package_type_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="package_period">{{ trans('cruds.package.fields.package_period') }}</label>
                <input class="form-control {{ $errors->has('package_period') ? 'is-invalid' : '' }}" type="number" name="package_period" id="package_period" value="{{ old('package_period', '1') }}" step="1" required>
                @if($errors->has('package_period'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package_period') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.package_period_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="package_period_unit">{{ trans('cruds.package.fields.package_period_unit') }}</label>
                <input class="form-control {{ $errors->has('package_period_unit') ? 'is-invalid' : '' }}" type="text" name="package_period_unit" id="package_period_unit" value="{{ old('package_period_unit', '') }}" required>
                @if($errors->has('package_period_unit'))
                    <div class="invalid-feedback">
                        {{ $errors->first('package_period_unit') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.package_period_unit_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required">{{ trans('cruds.package.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status" required>
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Package::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.package.fields.status_helper') }}</span>
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