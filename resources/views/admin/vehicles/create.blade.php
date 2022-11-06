@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.vehicle.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.vehicles.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.vehicle.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ old('customer_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vehicle_color">{{ trans('cruds.vehicle.fields.vehicle_color') }}</label>
                <input class="form-control {{ $errors->has('vehicle_color') ? 'is-invalid' : '' }}" type="text" name="vehicle_color" id="vehicle_color" value="{{ old('vehicle_color', '') }}" required>
                @if($errors->has('vehicle_color'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vehicle_color') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.vehicle_color_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="plate_number">{{ trans('cruds.vehicle.fields.plate_number') }}</label>
                <input class="form-control {{ $errors->has('plate_number') ? 'is-invalid' : '' }}" type="text" name="plate_number" id="plate_number" value="{{ old('plate_number', '') }}" required>
                @if($errors->has('plate_number'))
                    <div class="invalid-feedback">
                        {{ $errors->first('plate_number') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.plate_number_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="plate_chars">{{ trans('cruds.vehicle.fields.plate_chars') }}</label>
                <input class="form-control {{ $errors->has('plate_chars') ? 'is-invalid' : '' }}" type="text" name="plate_chars" id="plate_chars" value="{{ old('plate_chars', '') }}" required>
                @if($errors->has('plate_chars'))
                    <div class="invalid-feedback">
                        {{ $errors->first('plate_chars') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.plate_chars_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="vehicle_brand">{{ trans('cruds.vehicle.fields.vehicle_brand') }}</label>
                <input class="form-control {{ $errors->has('vehicle_brand') ? 'is-invalid' : '' }}" type="text" name="vehicle_brand" id="vehicle_brand" value="{{ old('vehicle_brand', '') }}" required>
                @if($errors->has('vehicle_brand'))
                    <div class="invalid-feedback">
                        {{ $errors->first('vehicle_brand') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.vehicle.fields.vehicle_brand_helper') }}</span>
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