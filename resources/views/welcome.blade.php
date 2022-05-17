@extends('layouts.mainhouse')

@section('page-content')
    <!--/ Carousel Star /-->
    <div class="intro intro-carousel">
        <div id="carousel" class="owl-carousel owl-theme">
            @foreach ($properties as $property)
                <div class="carousel-item-a intro-item bg-image" style="background-image: url({{ $property->Image() }})">
                    <div class="overlay overlay-a"></div>
                    <div class="intro-content display-table">
                        <div class="table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="intro-body">
                                            <p class="intro-title-top">{{ $property->location }}
                                                <br> {{ $property->pincode }}
                                            </p>
                                            <h1 class="intro-title mb-4">
                                                {{ $property->PropertyName }}
                                            </h1>
                                            <p class="intro-subtitle intro-price">
                                                <a href="{{ route('property.show', $property->id) }}"><span
                                                        class="price-a">{{ $property->status }} | ₹
                                                        {{ number_format($property->price) }}</span></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--/ Carousel end /-->

    <!--/ Services Star /-->
    <section class="section-services section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Our Services</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-gamepad"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Lifestyle</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-usd"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Loans</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris
                                blandit
                                aliquet elit, eget tincidunt
                                nibh pulvinar a.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-c foo">
                        <div class="card-header-c d-flex">
                            <div class="card-box-ico">
                                <span class="fa fa-home"></span>
                            </div>
                            <div class="card-title-c align-self-center">
                                <h2 class="title-c">Sell</h2>
                            </div>
                        </div>
                        <div class="card-body-c">
                            <p class="content-c">
                                Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien
                                massa,
                                convallis a pellentesque
                                nec, egestas non nisi.
                            </p>
                        </div>
                        <div class="card-footer-c">
                            <a href="#" class="link-c link-icon">Read more
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Services End /-->

    <!--/ Property Star /-->
    <section class="section-property section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest Properties</h2>
                        </div>
                        <div class="title-link">
                            <a href="property-grid.html">All Property
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="property-carousel" class="owl-carousel owl-theme">
                @foreach ($latest_properties as $property)
                    <div class="carousel-item-b">
                        <div class="card-box-a card-shadow">
                            <div class="img-box-a">
                                <img src="{{ $property->Image() }}" style="height: 400px"
                                    alt="{{ $property->PropertyName }}" class="img-a img-fluid">
                            </div>
                            <div class="card-overlay">
                                <div class="card-overlay-a-content">
                                    <div class="card-header-a">
                                        <h2 class="card-title-a">
                                            <a href="{{ route('property.show', $property->id) }}">
                                                {{ $property->PropertyName }}
                                            </a>
                                        </h2>
                                    </div>
                                    <div class="card-body-a">
                                        <div class="price-box d-flex">
                                            <span class="price-a">{{ $property->status }} |
                                                {{ $property->price }}</span>
                                        </div>
                                        <a href="{{ route('property.show', $property->id) }}"
                                            class="link-a">Click here to view
                                            <span class="ion-ios-arrow-forward"></span>
                                        </a>
                                    </div>
                                    <div class="card-footer-a">
                                        <ul class="card-info d-flex justify-content-around">
                                            <li>
                                                <h4 class="card-info-title">Area</h4>
                                                <span>{{ $property->area }}m
                                                    <sup>2</sup>
                                                </span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Beds</h4>
                                                <span>{{ $property->Beds }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Baths</h4>
                                                <span>{{ $property->Baths }}</span>
                                            </li>
                                            <li>
                                                <h4 class="card-info-title">Garages</h4>
                                                <span>{{ $property->garage }}</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--/ Property End /-->

    <!--/ Agents Star /-->
    <section class="section-agents section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Best Agents</h2>
                        </div>
                        <div class="title-link">
                            <a href="agents-grid.html">All Agents
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="{{ asset('img/agent-4.jpg') }}" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.html" class="link-two">Margaret Sotillo
                                            <br> Escala</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="{{ asset('img/agent-1.jpg') }}" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.html" class="link-two">Stiven Spilver
                                            <br> Darw</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-box-d">
                        <div class="card-img-d">
                            <img src="{{ asset('img/agent-5.jpg') }}" alt="" class="img-d img-fluid">
                        </div>
                        <div class="card-overlay card-overlay-hover">
                            <div class="card-header-d">
                                <div class="card-title-d align-self-center">
                                    <h3 class="title-d">
                                        <a href="agent-single.html" class="link-two">Emma Toledo
                                            <br> Cascada</a>
                                    </h3>
                                </div>
                            </div>
                            <div class="card-body-d">
                                <p class="content-d color-text-a">
                                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                                </p>
                                <div class="info-agents color-a">
                                    <p>
                                        <strong>Phone: </strong> +54 356 945234
                                    </p>
                                    <p>
                                        <strong>Email: </strong> agents@example.com
                                    </p>
                                </div>
                            </div>
                            <div class="card-footer-d">
                                <div class="socials-footer d-flex justify-content-center">
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="link-one">
                                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Agents End /-->

    <!--/ News Star /-->
    <section class="section-news section-t8">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Latest News</h2>
                        </div>
                        <div class="title-link">
                            <a href="blog-grid.html">All News
                                <span class="ion-ios-arrow-forward"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="new-carousel" class="owl-carousel owl-theme">
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{ asset('img/post-2.jpg') }}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">House</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">House is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{ asset('img/post-5.jpg') }}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Travel</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Travel is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{ asset('img/post-7.jpg') }}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Park</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="blog-single.html">Park is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-c">
                    <div class="card-box-b card-shadow news-box">
                        <div class="img-box-b">
                            <img src="{{ asset('img/post-3.jpg') }}" alt="" class="img-b img-fluid">
                        </div>
                        <div class="card-overlay">
                            <div class="card-header-b">
                                <div class="card-category-b">
                                    <a href="#" class="category-b">Travel</a>
                                </div>
                                <div class="card-title-b">
                                    <h2 class="title-2">
                                        <a href="#">Travel is comming
                                            <br> new</a>
                                    </h2>
                                </div>
                                <div class="card-date">
                                    <span class="date-b">18 Sep. 2017</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ News End /-->

    <!--/ Testimonials Star /-->
    <section class="section-testimonials section-t8 nav-arrow-a">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-wrap d-flex justify-content-between">
                        <div class="title-box">
                            <h2 class="title-a">Testimonials</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div id="testimonial-carousel" class="owl-carousel owl-arrow">
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="{{ asset('img/testimonial-1.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam
                                        praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="{{ asset('img/mini-testimonial-1.jpg') }}" alt=""
                                        class="testimonial-avatar">
                                    <h5 class="testimonial-author">Albert & Erika</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item-a">
                    <div class="testimonials-box">
                        <div class="row">
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-img">
                                    <img src="{{ asset('img/testimonial-2.jpg') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div class="testimonial-ico">
                                    <span class="ion-ios-quote"></span>
                                </div>
                                <div class="testimonials-content">
                                    <p class="testimonial-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, cupiditate ea nam
                                        praesentium
                                        debitis hic ber quibusdam
                                        voluptatibus officia expedita corpori.
                                    </p>
                                </div>
                                <div class="testimonial-author-box">
                                    <img src="{{ asset('img/mini-testimonial-2.jpg') }}" alt=""
                                        class="testimonial-avatar">
                                    <h5 class="testimonial-author">Pablo & Emma</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Testimonials End /-->
@endsection
