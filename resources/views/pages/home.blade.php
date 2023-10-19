@extends('layouts.app')

@section('title')
    TRAVEL
@endsection

@section('content')

    <!-- Header -->
    <header class="text-center">
        <h1>
            Explore The Beutiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            you will see beutiful
            <br>
            moment you never see
        </p>
        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get Started
        </a>
    </header>


    <!-- main -->
    <main>
        <div class="container">
            <section id="stats" class="section-stats row justify-content-center">
                <div class="col-3 col-md-2 stats-detail">
                    <h2>20k</h2>
                    <p>Members</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>120k</h2>
                    <p>Countries</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>3k</h2>
                    <p>Hotel</p>
                </div>
                <div class="col-3 col-md-2 stats-detail">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <section class="section-popular" id="popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>
                            Something that you never try
                            <br>
                            before inthis world
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="popular-content" class="section-popular-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">

                    @foreach ($items as $item )
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                        style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}')
                        ;">
                            <div class="travel-country">{{$item->location}}</div>
                            <div class="travel-location">{{$item->title}}</div>
                            <div class="travel-button mt-auto">
                                <a href="{{route('detail',$item->slug)}}" class="btn btn-travel-details px-4">
                                View Details
                            </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </section>

        <section class="section-networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>
                            Companies are trusted us
                            <br>
                            more than just a trip
                        </p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/images/partner.png" alt="logo partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <section id="testimonialHeading" class="section-testimonial-heading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>
                            Moments Were giving them
                            <br>
                            the best experience
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-testimonial-content" id="TestimonialContent">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                src="frontend/images/testimonial1.jpg"
                                alt="user"
                                class="mb-4 rounded-circle" >
                                <h3 class="mb-4">Muhammad Imam Arif Darmawan</h3>
                                <p class="testimonial">
                                    "Yah keren banget bisa jalan - jalan ke destinasi wisata impian
                                    tanpa harus ribet mikirin hotel dan lain - lain tinggal
                                    cusss aja"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to Bali
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                src="frontend/images/testimonial2.jpg"
                                alt="user"
                                class="mb-4 rounded-circle" >
                                <h3 class="mb-4">Muhammad Imam Arif Darmawan</h3>
                                <p class="testimonial">
                                    "it was glorius and i could not stop to
                                    say akhirnya mimpi ku terwujud geys ya geys ya
                                    every single moment"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to tokyo
                            </p>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img
                                src="frontend/images/testimonial3.jpg"
                                alt="user"
                                class="mb-4 rounded-circle" >
                                <h3 class="mb-4">Muhammad Imam Arif Darmawan</h3>
                                <p class="testimonial">
                                    "pengalaman yang luar bisa ke tempat favorite menggunakan
                                    IMMtravel ngga ribet dan pelayananya memuaskan"
                                </p>
                            </div>
                            <hr>
                            <p class="trip-to mt-2">
                                Trip to nagoya
                            </p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
                            I need Help
                        </a>
                        <a href="{{route('register')}}" class="btn btn-get-started px-4 mt-4 mx-1">
                            Get Started
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection

