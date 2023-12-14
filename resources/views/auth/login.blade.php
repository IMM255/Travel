@extends('layouts.login')
@section('content')
<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align-items-center">
            <div class="section-left col-12 col-md-6">
                <h1 class="mb-4">We explore the new <br />life much better</h1>
                <img src="frontend/images/login-img.png" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{url('frontend/images/logo.png')}}" alt="">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Email address</label>
                              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                              <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputPassword1" class="form-label">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                              <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div class="mb-3 form-check d-flex justify-content-between">
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="remember">
                                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                                </div>
                                <div>
                                    <a class=" " href="{{ route('register') }}">
                                        {{ __('register') }}
                                    </a>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-login btn-block">Sign in</button>
                            <p class="text-center mt-4">
                                <a href="#">saya lupa password</a>
                            </p>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
