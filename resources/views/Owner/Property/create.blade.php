@extends('layouts.mainhouse')

@section('page-content')
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 193px;">
            <div class="col-md-10">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="card">
                    <div class="card-header bg-success text-white fw-bold" style="text-align: center;">
                        {{ __('Add Property') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('owner.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <label for="PropertyName"
                                        class="col-form-label text-md-end">{{ __('Property Name') }}</label>
                                    <input id="PropertyName" type="text"
                                        class="form-control @error('PropertyName') is-invalid @enderror" name="PropertyName"
                                        value="{{ old('PropertyName') }}" required autocomplete="PropertyName" autofocus>

                                    @error('PropertyName')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label for="location" class=" col-form-label text-md-end">{{ __('Location') }}</label>
                                    <input id="location" type="text"
                                        class="form-control @error('location') is-invalid @enderror" name="location"
                                        value="{{ old('location') }}" required autocomplete="location">

                                    @error('location')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="PropertyType"
                                        class=" col-form-label text-md-end">{{ __('Property Type') }}</label>
                                    <input id="PropertyType" type="text"
                                        class="form-control @error('PropertyType') is-invalid @enderror" name="PropertyType"
                                        value="{{ old('PropertyType') }}" required autocomplete="PropertyType">

                                    @error('PropertyType')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-6">
                                    <label for="status" class=" col-form-label text-md-end">{{ __('Status') }}</label>
                                    <select class="form-select" name="status" id="status">
                                        <option selected disabled>select</option>
                                        <option value="rent">Rent</option>
                                        <option value="sell">Sell</option>
                                    </select>
                                    @error('status')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-3">
                                    <label for="area" class=" col-form-label text-md-end">{{ __('Area') }} (in
                                        m<sup>2</sup>)</label>
                                    <input id="area" type="number" class="form-control @error('area') is-invalid @enderror"
                                        name="area" value="{{ old('area') }}" required autocomplete="area">

                                    @error('area')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="Beds" class=" col-form-label text-md-end">{{ __('Beds') }}</label>
                                    <input id="Beds" type="number" class="form-control @error('Beds') is-invalid @enderror"
                                        name="Beds" value="{{ old('Beds') }}" required autocomplete="Beds">

                                    @error('Beds')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>

                                <div class="col-md-3">
                                    <label for="Baths" class=" col-form-label text-md-end">{{ __('Baths') }}</label>
                                    <input id="Baths" type="number"
                                        class="form-control @error('Baths') is-invalid @enderror" name="Baths"
                                        value="{{ old('Baths') }}" required autocomplete="Baths">

                                    @error('Baths')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-3">
                                    <label for="garage" class=" col-form-label text-md-end">{{ __('Garages') }}</label>
                                    <input id="garage" type="number"
                                        class="form-control @error('garage') is-invalid @enderror" name="garage"
                                        value="{{ old('garage') }}" required autocomplete="garage">

                                    @error('garage')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <label for="PropertyDesc"
                                        class=" col-form-label text-md-end">{{ __('Property Description') }}</label>

                                    <textarea name="PropertyDesc" class="form-control" id="PropertyDesc" rows="3">{{ old('PropertyDesc') }}</textarea>
                                    @error('PropertyDesc')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="price" class=" col-form-label text-md-end">{{ __('Price') }}</label>
                                    <input id="price" type="text" class="form-control @error('price') is-invalid @enderror"
                                        name="price" value="{{ old('price') }}" required autocomplete="price">

                                    @error('price')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="amenities"
                                        class=" col-form-label text-md-end">{{ __('Amenities') }}</label>
                                    <input id="amenities" type="text"
                                        class="form-control @error('amenities') is-invalid @enderror" name="amenities"
                                        value="{{ old('amenities') }}" required autocomplete="amenities">

                                    @error('amenities')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-4">
                                    <label for="pincode" class=" col-form-label text-md-end">{{ __('Pin Code') }}</label>
                                    <input id="pincode" type="number"
                                        class="form-control @error('pincode') is-invalid @enderror" name="pincode"
                                        value="{{ old('pincode') }}" required autocomplete="pincode">

                                    @error('pincode')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">

                                <div class="col-md-12">
                                    <label for="propertyImage"
                                        class=" col-form-label text-md-end">{{ __('Property image') }}</label>
                                    <input id="propertyImage" type="file"
                                        class="form-control @error('price') is-invalid @enderror" name="propertyImage"
                                        value="{{ old('propertyImage') }}" required autocomplete="propertyImage">

                                    @error('propertyImage')
                                        <span class="text-danger" role="alert">
                                            <small>{{ $message }}</small>
                                        </span>
                                    @enderror
                                </div>
                            </div>






                            <button type="submit" class="btn btn-b-n fw-bold">
                                {{ __('Submit') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
