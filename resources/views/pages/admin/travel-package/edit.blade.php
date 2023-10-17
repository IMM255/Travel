@extends('layouts.admin')

@section('content')


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
        <a href="{{ route ('travel-package.create')}}" class="btn btn-sm btn-primary shadow-sm">
            <i class="fas fa-plus fa-sm text-white-50"></i> Edit Paket Travel {{$item->title}}
        </a>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card shadow">
        <div class="card-body">
            <form action="{{route ('travel-package.update',$item->id)}}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input value="{{$item->title}}" type="text" class="form-control" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="location">location</label>
                    <input value="{{$item->location}}" type="text" class="form-control" name="location" placeholder="location">
                </div>
                <div class="form-group">
                    <label for="about">About</label>
                    <textarea name="about" cols="30" rows="10" class="d-block w-100 form-control">{{$item->about}}</textarea>
                </div>
                <div class="form-group">
                    <label for="featured_event">featured event</label>
                    <input value="{{$item->featured_event}}" type="text" class="form-control" name="featured_event" placeholder="featured_event">
                </div>
                <div class="form-group">
                    <label for="language">Language</label>
                    <input value="{{$item->language}}" type="text" class="form-control" name="language" placeholder="language">
                </div>
                <div class="form-group">
                    <label for="foods">Foods</label>
                    <input value="{{$item->foods}}" type="text" class="form-control" name="foods" placeholder="foods">
                </div>
                <div class="form-group">
                    <label for="departure_date">Departure Date</label>
                    <input value="{{$item->departure_date}}" type="date" class="form-control" name="departure_date" placeholder="departure_date">
                </div>
                <div class="form-group">
                    <label for="duration">Duration</label>
                    <input value="{{$item->duration}}" type="text" class="form-control" name="duration" placeholder="duration">
                </div>
                <div class="form-group">
                    <label for="type">type</label>
                    <input value="{{$item->type}}" type="text" class="form-control" name="type" placeholder="type">
                </div>
                <div class="form-group">
                    <label for="price">price</label>
                    <input value="{{$item->price}}" type="number" class="form-control" name="price" placeholder="price">
                </div>
                <button class="btn btn-primary btn-block" type="submit">Simpan</button>
            </form>

        </div>
    </div>



</div>
<!-- /.container-fluid -->
@endsection
