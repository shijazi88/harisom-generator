@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.edit') }} {{ trans('cruds.customerWallet.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.customer-wallets.update", [$customerWallet->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label class="required" for="customer_id">{{ trans('cruds.customerWallet.fields.customer') }}</label>
                <select class="form-control select2 {{ $errors->has('customer') ? 'is-invalid' : '' }}" name="customer_id" id="customer_id" required>
                    @foreach($customers as $id => $entry)
                        <option value="{{ $id }}" {{ (old('customer_id') ? old('customer_id') : $customerWallet->customer->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('customer'))
                    <div class="invalid-feedback">
                        {{ $errors->first('customer') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerWallet.fields.customer_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="balance">{{ trans('cruds.customerWallet.fields.balance') }}</label>
                <input class="form-control {{ $errors->has('balance') ? 'is-invalid' : '' }}" type="number" name="balance" id="balance" value="{{ old('balance', $customerWallet->balance) }}" step="1" required>
                @if($errors->has('balance'))
                    <div class="invalid-feedback">
                        {{ $errors->first('balance') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.customerWallet.fields.balance_helper') }}</span>
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