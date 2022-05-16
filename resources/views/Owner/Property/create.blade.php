@extends('layouts.mainhouse')

@section('page-content')

<div class="container">
    <div class="row justify-content-center" style="margin-top: 193px;">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="text-align: center;">{{ __('Add Property') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('owner.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="PropertyName" class="col-md-4 col-form-label text-md-end">{{ __('Property Name') }}</label>

                            <div class="col-md-6">
                                <input id="PropertyName" type="text" class="form-control @error('PropertyName') is-invalid @enderror" name="PropertyName" value="{{ old('PropertyName') }}" required autocomplete="PropertyName" autofocus>

                                @error('PropertyName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="location" class="col-md-4 col-form-label text-md-end">{{ __('Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}" required autocomplete="location" autofocus>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="PropertyType" class="col-md-4 col-form-label text-md-end">{{ __('Property Type') }}</label>

                            <div class="col-md-6">
                                <input id="PropertyType" type="text" class="form-control @error('PropertyType') is-invalid @enderror" name="PropertyType" value="{{ old('PropertyType') }}" required autocomplete="PropertyType" autofocus>

                                @error('PropertyType')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="status" class="col-md-4 col-form-label text-md-end">{{ __('Status') }}</label>

                            <div class="col-md-6">
                                <input id="status" type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status" autofocus>

                                @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="area" class="col-md-4 col-form-label text-md-end">{{ __('Area') }}</label>

                            <div class="col-md-6">
                                <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" value="{{ old('area') }}" required autocomplete="area" autofocus>

                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="row mb-3">
                            <label for="Beds" class="col-md-4 col-form-label text-md-end">{{ __('Beds') }}</label>

                            <div class="col-md-6">
                                <input id="Beds" type="text" class="form-control @error('Beds') is-invalid @enderror" name="Beds" value="{{ old('Beds') }}" required autocomplete="Beds" autofocus>

                                @error('Beds')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="Baths" class="col-md-4 col-form-label text-md-end">{{ __('Baths') }}</label>

                            <div class="col-md-6">
                                <input id="Baths" type="text" class="form-control @error('Baths') is-invalid @enderror" name="Baths" value="{{ old('Baths') }}" required autocomplete="Baths" autofocus>

                                @error('Baths')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="garage" class="col-md-4 col-form-label text-md-end">{{ __('Garage') }}</label>

                            <div class="col-md-6">
                                <input id="garage" type="text" class="form-control @error('garage') is-invalid @enderror" name="garage" value="{{ old('garage') }}" required autocomplete="garage" autofocus>

                                @error('garage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="PropertyDesc" class="col-md-4 col-form-label text-md-end">{{ __('Property Description') }}</label>

                            <div class="col-md-6">
                                <input id="PropertyDesc" type="textarea" class="form-control @error('PropertyDesc') is-invalid @enderror" name="PropertyDesc" value="{{ old('PropertyDesc') }}" required autocomplete="PropertyDesc" autofocus>

                                @error('PropertyDesc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="price" class="col-md-4 col-form-label text-md-end">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="amenities" class="col-md-4 col-form-label text-md-end">{{ __('Amenities') }}</label>

                            <div class="col-md-6">
                                <input id="amenities" type="text" class="form-control @error('amenities') is-invalid @enderror" name="amenities" value="{{ old('amenities') }}" required autocomplete="amenities" autofocus>

                                @error('amenities')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="propertyImage" class="col-md-4 col-form-label text-md-end">{{ __('Property image') }}</label>

                            <div class="col-md-6">
                                <input id="propertyImage" type="file" class="form-control @error('price') is-invalid @enderror" name="propertyImage" value="{{ old('propertyImage') }}" required autocomplete="propertyImage" autofocus>

                                @error('propertyImage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>






                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
