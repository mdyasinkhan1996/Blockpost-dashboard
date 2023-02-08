@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center loginForm">
        <div class="col-md-8">
            <div class="loginSection">
                <div class="resetTitle"><span>{{ __('Reset Password') }}</span></div>
                <div id="forgetContent" class="forgetContent mt-4">
                    <p class="forgetText">Welcome back! login to access our web application. Did you 
                            <a href="{{ route('login') }}">
                                {{ __('Go Login Form?') }}
                            </a>
                    </p>
                </div>
                <div class="loginFSection d-flex justify-content-center">
                    <div class="formTable">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">

                            <div class="col-md-12">
                                <div  id="emailLabel">
                                    <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                </div>
                                <input id="emailInput" type="email" placeholder="Email Address" class="form-control formInputEmail @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn loginBTN px-5 text-white">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    
    const emailInput = document.getElementById("emailInput");
    document.getElementById("emailLabel").onclick = function() {
        emailInput.removeAttribute("placeholder");
        emailInput.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    if(emailInput.value){
        emailInput.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    emailInput.addEventListener('keyup', function(){
        this.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    });
</script>
@endsection


{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
