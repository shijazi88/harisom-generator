@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.workerAddress.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.worker-addresses.update", [$workerAddress->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.workerAddress.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $workerAddress->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workerAddress.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="home_lat">{{ trans('cruds.workerAddress.fields.home_lat') }}</label>
                <input class="form-control {{ $errors->has('home_lat') ? 'is-invalid' : '' }}" type="number" name="home_lat" id="home_lat" value="{{ old('home_lat', $workerAddress->home_lat) }}" step="0.01" required>
                @if($errors->has('home_lat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('home_lat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workerAddress.fields.home_lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="home_lng">{{ trans('cruds.workerAddress.fields.home_lng') }}</label>
                <input class="form-control {{ $errors->has('home_lng') ? 'is-invalid' : '' }}" type="number" name="home_lng" id="home_lng" value="{{ old('home_lng', $workerAddress->home_lng) }}" step="0.01" required>
                @if($errors->has('home_lng'))
                    <div class="invalid-feedback">
                        {{ $errors->first('home_lng') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workerAddress.fields.home_lng_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_info">{{ trans('cruds.workerAddress.fields.location_info') }}</label>
                <textarea class="form-control {{ $errors->has('location_info') ? 'is-invalid' : '' }}" name="location_info" id="location_info" required>{{ old('location_info', $workerAddress->location_info) }}</textarea>
                @if($errors->has('location_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workerAddress.fields.location_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address_extra_details">{{ trans('cruds.workerAddress.fields.address_extra_details') }}</label>
                <textarea class="form-control {{ $errors->has('address_extra_details') ? 'is-invalid' : '' }}" name="address_extra_details" id="address_extra_details" required>{{ old('address_extra_details', $workerAddress->address_extra_details) }}</textarea>
                @if($errors->has('address_extra_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_extra_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.workerAddress.fields.address_extra_details_helper') }}</span>
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