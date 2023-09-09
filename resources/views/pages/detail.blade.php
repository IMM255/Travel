@extends('layouts.app')

@section('title','Detail Travel')

@section('content')
<main>
    <section class="section-details-header"></section>
        <section class="section-details-content">
            <div class="container">
                <div class="row">
                    <div class="col p-0">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    Paket Travel
                                </li>
                                <li class="breadcrumb-item active">
                                    Details
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 pl-lg-0">
                        <div class="card card-details">
                            <h1>
                                Nusa peninda
                            </h1>
                            <p>
                                republic of indonesia Raya
                            </p>
                            <div class="gallery">
                                <div class="xzoom-container">
                                    <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom" id="xzoom-default" xoriginal="frontend/images/popular2.jpg" >
                                </div>
                                <div class="xzoom-thumb">
                                    <a href="{{url('frontend/images/popular1.jpg')}}">
                                        <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom-gallery" width="128" xpreview="{{url('frontend/images/popular1.jpg')}}">
                                    </a>
                                    <a href="{{url('frontend/images/popular1.jpg')}}">
                                        <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom-gallery" width="128" xpreview="{{url('frontend/images/popular1.jpg')}}">
                                    </a>
                                    <a href="{{url('frontend/images/popular1.jpg')}}">
                                        <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom-gallery" width="128" xpreview="{{url('frontend/images/popular1.jpg')}}">
                                    </a>
                                    <a href="{{url('frontend/images/popular1.jpg')}}">
                                        <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom-gallery" width="128" xpreview="{{url('frontend/images/popular1.jpg')}}">
                                    </a>
                                    <a href="{{url('frontend/images/popular1.jpg')}}">
                                        <img src="{{url('frontend/images/popular1.jpg')}}" class="xzoom-gallery"    width="128" xpreview="{{url('frontend/images/popular1.jpg')}}">
                                    </a>
                                </div>
                            </div>
                            <h2>tentang Wisata</h2>
                            <p>
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                Magni beatae corporis dolorem laboriosam, cupiditate repellat
                                nulla maxime nemo consequatur, neque, officiis culpa doloremque.
                                Voluptates iure incidunt dolores quisquam sapiente culpa?
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Provident id molestiae eaque perspiciatis accusantium expedita
                                voluptate incidunt maxime ratione laudantium vel mollitia eum
                                asperiores officia quidem, sit alias hic natus?
                            </p>
                            <div class="features row">
                                <div class="col-md-4">
                                    <div class="description">
                                        <img
                                        src="frontend/images/"
                                        alt=""
                                        class="fetures-image">
                                        <div class="description">
                                            <h3>Fetured Event</h3>
                                            <p>Tari Kecak</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img
                                        src="frontend/images/"
                                        alt=""
                                        class="fetures-image">
                                        <div class="description">
                                            <h3>language</h3>
                                            <p>bahasa indonesia</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 border-left">
                                    <div class="description">
                                        <img
                                        src="frontend/images/"
                                        alt=""
                                        class="fetures-image">
                                        <div class="description">
                                            <h3>Foods</h3>
                                            <p>local foods</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="card card-details card-right">
                            <h2>Members Are going</h2>
                            <div class="members my-2">
                                <img src="/frontend/images/testimonial1.jpg" alt=""
                                class="member-image mr-1">
                                <img src="/frontend/images/testimonial1.jpg" alt=""
                                class="member-image mr-1">
                                <img src="/frontend/images/testimonial1.jpg" alt=""
                                class="member-image mr-1">
                                <img src="/frontend/images/testimonial1.jpg" alt=""
                                class="member-image mr-1">
                            </div>
                            <hr>
                            <h2>Trip Information</h2>
                            <table class="trip-information">
                                <tr>
                                    <th width="50%">Date of Departure</th>
                                    <td width="50%" class="text-right">
                                        22 Aug,2019
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Duration</th>
                                    <td width="50%" class="text-right">
                                        4D 3N
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Type</th>
                                    <td width="50%" class="text-right">
                                        Open Trip
                                    </td>
                                </tr>
                                <tr>
                                    <th width="50%">Price</th>
                                    <td width="50%" class="text-right">
                                        $80,0 / Person
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="join-container">
                            <a href="{{route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">
                                Join Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- </section> -->
</main>
@endsection

@push('addon-style')
    <link rel="stylesheet" href="{{url('frontend/libraries/xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function(){
        $('.xzoom, .xzoom-gallery').xzoom({
            zoomWidth: 500,
            title: false,
            tint:'#333',
            Xoffset:15,
        });
    });
</script>
@endpush

