@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.customerAddress.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customer-addresses.update", [$customerAddress->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.customerAddress.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $customerAddress->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerAddress.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lat">{{ trans('cruds.customerAddress.fields.lat') }}</label>
                <input class="form-control {{ $errors->has('lat') ? 'is-invalid' : '' }}" type="number" name="lat" id="lat" value="{{ old('lat', $customerAddress->lat) }}" step="0.01" required>
                @if($errors->has('lat'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lat') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerAddress.fields.lat_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="lng">{{ trans('cruds.customerAddress.fields.lng') }}</label>
                <input class="form-control {{ $errors->has('lng') ? 'is-invalid' : '' }}" type="number" name="lng" id="lng" value="{{ old('lng', $customerAddress->lng) }}" step="0.01" required>
                @if($errors->has('lng'))
                    <div class="invalid-feedback">
                        {{ $errors->first('lng') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerAddress.fields.lng_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="location_info">{{ trans('cruds.customerAddress.fields.location_info') }}</label>
                <textarea class="form-control {{ $errors->has('location_info') ? 'is-invalid' : '' }}" name="location_info" id="location_info" required>{{ old('location_info', $customerAddress->location_info) }}</textarea>
                @if($errors->has('location_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerAddress.fields.location_info_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="address_extra_details">{{ trans('cruds.customerAddress.fields.address_extra_details') }}</label>
                <textarea class="form-control {{ $errors->has('address_extra_details') ? 'is-invalid' : '' }}" name="address_extra_details" id="address_extra_details" required>{{ old('address_extra_details', $customerAddress->address_extra_details) }}</textarea>
                @if($errors->has('address_extra_details'))
                    <div class="invalid-feedback">
                        {{ $errors->first('address_extra_details') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerAddress.fields.address_extra_details_helper') }}</span>
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