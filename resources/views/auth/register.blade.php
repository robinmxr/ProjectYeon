
@extends('frontend.layout.master')

@section('content')
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Register
        </h2>

        <div class="formcont">

            <!-- Two parter Body one side hase image and other has the form -->
            <div class="tcol">
                <div class="fcol">
                    <h2 class="hd-log"> Register  </h2>
                    <p class="pd-log "> With </p>

                    <p class="pd-log selfflex">

                        <a href="#"><i class="fa fa-google " aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook " aria-hidden="true"></i></a>

                    </p>
                </div>
                <form class="formtype scol" method="POST" action="{{ route('register') }}">
                    <!-- <form class="formtype"> -->
                    <div >
                        <input id="name" type="text" class="inputy form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Enter Your Full Name">


                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div >
                        <input id="email" type="email" class="inputy form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Enter Your Email" autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <!--<input type="email" class="inputy" placeholder="Enter Your Email" required>-->



                    <input id="password" type="password" class="inputy form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Your Password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                    <input id="password-confirm" type="password" class="inputy form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-Type your Password" >




                <!--<input type="password" class="inputy" placeholder="Enter Tour Password" required> -->
                    <button type="submit"  class="btn btn-primary" style="margin-top: 10px;"> {{ __('Register') }}</button>






                    <label class="inputy docum"> Already Have an Account? <a href="{{route('login') }}" > Sign in</a> .</label>
                    <!--</form>-->
                </form>


            </div>
        </div>




    </section>



@endsection

<!--


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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

-->
