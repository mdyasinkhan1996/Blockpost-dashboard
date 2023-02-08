@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center loginForm">
        <div class="col-md-8">
            <div class="loginSection">
                <div class="resetTitle"><span>{{ __('Chang Password') }}</span></div>
                <div id="forgetContent" class="forgetContent mt-4">
                    <p class="forgetText">Welcome! change your current password. Did you 
                            <a href="{{ route('dashboard') }}">
                                {{ __('Go Dashboarb?') }}
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

                    <form method="POST" action="{{ route('password.change.store', Auth::user()->id) }}">
                        @csrf

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div id="currPassLabel">
                                    <label for="currentpassword" class="col-form-label text-md-end">{{ __('Current Password') }}</label>
                                </div>
                                <input name="currentpassword" id="currPassInput" type="password" placeholder="Current Password" class=" form-control currPassInput @error('currentpassword') is-invalid @enderror" value="{{ old('currentpassword') }}">

                                @error('currentpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div  id="formLabelPass">
                                    <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                </div>
                                <input name="password" id="formInputPass" type="password" placeholder="Password" class="form-control formInputPass @error('password') is-invalid @enderror" value="{{ old('password') }}">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <div  id="conPsslabel">
                                    <label for="conPssword" class="col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                </div>
                                <input name="confirmpassword" id="conPssInput" type="password" placeholder="Confirm Password" class="form-control conPssInput @error('confirmpassword') is-invalid @enderror" value="{{ old('confirmpassword') }}">

                                @error('confirmpassword')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="btn loginBTN px-4 text-white">
                                    {{ __('Change Password') }}
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
    
    const emailInput = document.getElementById("currPassInput");
    document.getElementById("currPassLabel").onclick = function() {
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
        this.removeAttribute("placeholder");
        this.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    });
    const formInputPass = document.getElementById("formInputPass");
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
        this.removeAttribute("placeholder");
        this.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    });
    const conPssInput = document.getElementById("conPssInput");
    document.getElementById("conPsslabel").onclick = function() {
        conPssInput.removeAttribute("placeholder");
        conPssInput.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    if(conPssInput.value){
        conPssInput.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    }
    conPssInput.addEventListener('keyup', function(){
        this.removeAttribute("placeholder");
        this.style.cssText = `
            margin-top: 0px;
            transition: all 1s;
            `;
    });
</script>
@endsection


