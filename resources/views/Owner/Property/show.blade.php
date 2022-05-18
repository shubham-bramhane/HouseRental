@extends('layouts.mainhouse')

@section('page-content')
    <!--/ Intro Single star /-->
    <section class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h1 class="title-single">{{ $property->PropertyName }}</h1>
                        <span class="color-text-a">{{ $property->location }},{{ $property->pincode }}</span>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4">
                    <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="{{ route('welcome') }}">Home</a>
                            </li>
                            <li class="breadcrumb-item">
                                <a href="{{ route('property') }}">Properties</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $property->PropertyName }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!--/ Intro Single End /-->

    <!--/ Property Single Star /-->
    <section class="property-single nav-arrow-b">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="property-single-carousel" class="owl-carousel owl-arrow gallery-property">
                        <div class="carousel-item-b">
                            <img src="{{ $property->Image() }}" alt="{{ $property->PropertyName }}">
                        </div>
                        {{-- <div class="carousel-item-b">
                            <img src="img/slide-3.jpg" alt="">
                        </div>
                        <div class="carousel-item-b">
                            <img src="img/slide-1.jpg" alt="">
                        </div> --}}
                    </div>
                    <div class="row justify-content-between">
                        <div class="col-md-5 col-lg-4">
                            <div class="property-price d-flex justify-content-center foo">
                                <div class="card-header-c d-flex">
                                    <div class="card-box-ico">
                                        <span class="ion-money">₹</span>
                                    </div>
                                    <div class="card-title-c align-self-center">
                                        <h5 class="title-c">{{ number_format($property->price) }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="property-summary">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="title-box-d section-t4">
                                            <h3 class="title-d">Quick Summary</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="summary-list">
                                    <ul class="list">
                                        <li class="d-flex justify-content-between">
                                            <strong>Property ID:</strong>
                                            <span>{{ $property->id }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Location:</strong>
                                            <span>{{ $property->location }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Property Type:</strong>
                                            <span>{{ $property->PropertyType }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Status:</strong>
                                            <span>{{ $property->status }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Area:</strong>
                                            <span>{{ $property->area }}m
                                                <sup>2</sup>
                                            </span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Beds:</strong>
                                            <span>{{ $property->Beds }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Baths:</strong>
                                            <span>{{ $property->Baths }}</span>
                                        </li>
                                        <li class="d-flex justify-content-between">
                                            <strong>Garage:</strong>
                                            <span>{{ $property->garage }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 section-md-t3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Property Description</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="property-description">
                                <p class="description color-text-a">
                                    {{ $property->PropertyDesc }}
                                </p>
                            </div>
                            <div class="row section-t3">
                                <div class="col-sm-12">
                                    <div class="title-box-d">
                                        <h3 class="title-d">Amenities</h3>
                                    </div>
                                </div>
                            </div>
                            @php
                                $items = explode(',', $property->amenities);
                            @endphp
                            <div class="amenities-list color-text-a">
                                <ul class="list-a no-margin">
                                    @foreach ($items as $item)
                                        <li>{{ $item }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-10 my-2">
                    @if ($property->isPropertyBooked() || $property->HasBooked())
                        Property Already Booked <br>
                    @endif

                    @auth
                        @if (auth()->user()->type == 'owner')
                            You are not authorized to book property
                        @endif
                    @endauth
                </div>
                <div class="col-md-10 d-flex gap-1">

                    @if ($property->isPropertyBooked())
                        <form action="{{ route('tenant.cancel', $property->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-b-n fw-bold btn-lg">Cancel</button>
                        </form>
                    @else
                        <a href="{{ route('owner.book', $property->id) }}" class="btn btn-b-n fw-bold btn-lg">Book
                            Now</a>
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!--/ Property Single End /-->
@endsection()
