@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('products.nav')
                <div class="card-body">
                    <form method="POST" action="{{ route('quantity.store') }}">
                        @csrf

                        @if (!$products->isEmpty())
                            <div class="form-group row">
                                <label for="product" class="col-md-4 col-form-label text-md-right">{{ __('Product') }}</label>
                                <div class="col-md-6">
                                    <select id="product" class="custom-select custom-select-lg mb-3" name="product">
                                        @foreach ($products as $product)
                                        <option value="{{ $product->id }}" {{ old('role_id') == $product->id ? 'selected' : '' }}>{{ $product->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        @endif
                        @if (!$users->isEmpty())
                            <div class="form-group row">
                                <label for="user" class="col-md-4 col-form-label text-md-right">{{ __('Supplier') }}</label>
                                <div class="col-md-6">
                                    <select id="user" class="custom-select custom-select-lg mb-3" name="user">
                                        @foreach ($users as $user)
                                        <option value="{{ $user->id }}" {{ old('role_id') == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control @error('quantity') is-invalid @enderror" name="quantity" value="{{ old('quantity') }}">

                                @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
