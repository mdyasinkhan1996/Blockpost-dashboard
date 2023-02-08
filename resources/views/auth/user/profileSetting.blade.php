@extends('layouts.auth')
@section('title', 'tags index | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">User Profile Setting</h4>
                <a class="text-white bnt btn-info mb-0 px-3 py-1" href="{{route('password.change')}}">Reset Password</a>
            </div>
        </div>
        <div class="card-body userProfile pt-5 my-5">
            <form action="{{route('profile.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">User Name</label>
                            <input name="name" type="text" class="form-control" value="{{userSettingData('userName')}}" placeholder="user name" id="name">
                            @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="designation">User Designation</label>
                            <input type="text" name="designation" value="{{userSettingData('designation')}}" class="form-control" id="designation">
                            @if($errors->has('designation'))
                                <div class="error text-danger">{{ $errors->first('designation') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Phone No.</label>
                            <input name="phone" type="number" class="form-control" value="{{userSettingData('phone')}}" placeholder="phone" id="phone">
                            @if($errors->has('phone'))
                                <div class="error text-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="phone">Email</label>
                            <input name="mail" type="mail" class="form-control" value="{{userSettingData('mail')}}" placeholder="mail" id="mail">
                            @if($errors->has('mail'))
                                <div class="error text-danger">{{ $errors->first('mail') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="twitter">Twitter Account</label>
                            <input name="twitter" type="text" class="form-control" value="{{userSettingData('twitter')}}" placeholder="twitter account" id="twitter">
                            @if($errors->has('twitter'))
                                <div class="error text-danger">{{ $errors->first('twitter') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="linkedin">Linkedin Account</label>
                            <input type="text" name="linkedin" value="{{userSettingData('linkedin')}}" placeholder="linkedin account" class="form-control" id="linkedin">
                            @if($errors->has('linkedin'))
                                <div class="error text-danger">{{ $errors->first('linkedin') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="facebook">Facebook Account</label>
                            <input type="text" name="facebook" value="{{userSettingData('facebook')}}" placeholder="facebook account" class="form-control" id="facebook">
                            @if($errors->has('facebook'))
                                <div class="error text-danger">{{ $errors->first('facebook') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="address">User Address</label>
                            <textarea name="address" class="form-control" value="" placeholder="address" id="address" rows="1">{{userSettingData('address')}}</textarea>
                            @if($errors->has('address'))
                                <div class="error text-danger">{{ $errors->first('address') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="file" name="image" class="form-control" id="image">
                            @if($errors->has('image'))
                                <div class="error text-danger">{{ $errors->first('image') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aboutMyself">About myself</label>
                            <textarea name="aboutMyself" class="form-control" placeholder="about myself" id="aboutMyself" rows="3">{{userSettingData('aboutMyself')}}</textarea>
                            @if($errors->has('aboutMyself'))
                                <div class="error text-danger">{{ $errors->first('aboutMyself') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="aboutSite">About Site</label>
                            <textarea name="aboutSite" id="aboutSite" class="form-control" value="{{old('aboutSite')}}" placeholder="about site" rows="3">{{userSettingData('aboutSite')}}</textarea>
                            @if($errors->has('aboutSite'))
                                <div class="error text-danger">{{ $errors->first('aboutSite') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection