@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center loginForm">
        <div class="col-md-8">
            <div class="loginSection">
                <div class="loginTitle"><span>{{ __('Login') }}</span></div>
                <div id="forgetContent" class="forgetContent mt-4">
                    <p class="forgetText">Welcome back! login to access our web application. Did you 
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </p>
                </div>
                <div class="loginFSection d-flex justify-content-center">
                    <div class="formTable">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="loginFrm row mb-3">
                                <div class="col-md-12 position-relative">
                                    <div id="emailLabel">
                                        <label for="emailInput" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                    </div>
                                    <input id="emailInput" onkeyup="myFunction() type="email" placeholder="Email Address" class="form-control formInputEmail @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div id="formLabelPass">
                                        <label for="formInputPass" class="col-form-label pass text-md-end">{{ __('Password') }}</label>
                                    </div>
                                    <input id="formInputPass" type="password" placeholder="Password" class="form-control formInputPass @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn loginBTN px-5 text-white">
                                        {{ __('Login') }}
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
    // onkeyup="myFunction()
    const emailInput = document.getElementById("emailInput");
    const formInputPass = document.getElementById("formInputPass");
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

    document.getElementById("formLabelPass").onclick = function() {
        formInputPass.removeAttribute("placeholder");
        formInputPass.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    if(formInputPass.value){
        formInputPass.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    formInputPass.addEventListener('keyup', function(){
        this.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    });
</script>
@endsection
