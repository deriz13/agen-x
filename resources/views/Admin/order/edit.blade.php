@extends('admin.layouts.app')

@section('content')
@if (Session::has('error'))
	<div class="alert alert-danger alert-dismissible" role="alert">
		{{ Session::get('error') }}
	</div>
@endif
<form action="{{ route('order.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }} col-md-6 col-lg-12">
            <label for="name">Nama</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Nama" value="{{ old('name', $order->name) }}">
            @if ($errors->has('name'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('name') }}</small>
            @endif
        </div>
        <div class="form-group {{ $errors->has('address') ? 'has-error' : '' }} col-md-6 col-lg-12">
            <label for="address">Alamat</label>
            <input type="text" name="address" class="form-control" id="address" placeholder="Alamat" value="{{ old('address', $order->address) }}">
            @if ($errors->has('address'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('address') }}</small>
            @endif
        </div>
        <div class="form-group {{ $errors->has('no_tlp') ? 'has-error' : '' }} col-md-6 col-lg-12">
            <label for="no_tlp">No Hp</label>
            <input type="number" name="no_tlp" class="form-control" id="no_tlp" placeholder="No Tlp" value="{{ old('no_tlp', $order->no_tlp) }}">
            @if ($errors->has('no_tlp'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('no_tlp') }}</small>
            @endif
        </div>
        <div class="form-group {{ $errors->has('birthdate') ? 'has-error' : '' }} col-md-6 col-lg-12">
            <label for="birthdate">Tanggal Lahir</label>
            <input type="date" name="birthdate" class="form-control" id="birthdate" value="{{ old('birthdate', $order->birthdate) }}">
            @if ($errors->has('birthdate'))
                <small class="form-text help-block" style="color:red">{{ $errors->first('birthdate') }}</small>
            @endif
        </div>
    </div>
    <button type="submit" class="btn btn-success" style="margin-top: 20px;">Submit</button>
    <a href="{{ route('order.index') }}" class="btn btn-danger" style="margin-top: 20px;">Cancel</a>
</form>
@endsection