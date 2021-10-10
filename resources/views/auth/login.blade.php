@extends('frontend.layout.master')

@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            LOGIN
        </h2>

        <div class="formcont">

            <!-- Two parter Body one side hase image and other has the form -->
            <div class="tcol">
                <div class="fcol">
                    <h2 class="hd-log"> Login  </h2>
                    <p class="pd-log "> With </p>

                    <p class="pd-log selfflex">

                        <a href="{{ route('login.google') }}"><i class="fa fa-google " aria-hidden="true"></i></a>
                        <a href="{{ route('login.facebook') }}"><i class="fa fa-facebook " aria-hidden="true"></i></a>

                    </p>
                </div>
                <form class="formtype scol" method="POST" action="{{ route('login') }}">
                    <!--<form class="formtype">-->
                    @csrf
                    <div >
                        <input id="email" type="email" class="inputy form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email" autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <!--<input type="email" class="inputy" placeholder="Enter Your Email" required>-->



                        <input id="password" type="password" class="inputy form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror


                    <!--<input type="password" class="inputy" placeholder="Enter Tour Password" required> -->
                    <button type="submit"  class="btn btn-primary" style="margin-top: 10px;"> {{ __('Login') }}</button>
                    <!--<div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div> -->

                    <div class="inputy docum selfflex">
                        <input type="checkbox" class="subitem" name="remember" id="remember" {{old('remember')? 'checked' : ''}}>
                        <label for="remember">{{__('Remember Me')}} </label>

                    </div>


                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <label class="inputy docum"> Dont Have an Account? <a href="{{route('register')}}" > Sign up</a> .</label>
                    <!--</form>-->
                </form>


            </div>
        </div>




    </section>

    <!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>

                    <h3> login with <i class="fa fa-google" aria-hidden="true"></i> <i class="fa fa-facebook" aria-hidden="true"></i> </h3>
                </div>
            </div>
        </div>
    </div>
</div>

-->

@endsection
