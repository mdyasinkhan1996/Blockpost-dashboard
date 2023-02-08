@extends('layouts.auth')
@section('title', 'tags index | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">User Profile</h4>
                <a class="btn btn-info" href="{{route('user.profile.settings')}}">Profile update</a>
            </div>
        </div>
        <div class="card-body userProfile pt-5 my-5">
            <div class="profileRight pl-5">
                <img class="mb-4" src="{{asset('assets/auth/images/dummyUser.png')}}" alt="">
            </div>
            <div class="row pl-5 mt-1">
                <div class="col-lg-4 ">
                    <div class="">
                        <div class="profileName mb-4">
                            <h3>{{userSettingData('userName')}}</h3>
                            <p>{{userSettingData('designation')}}</p>
                        </div>
                        <div class="mt-2">
                            <h5 class="contectDetails">Contact</h5>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td class="aboutTable">Cantact</td>
                                        <td>{{userSettingData('phone')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="aboutTable">Address</td>
                                        <td>{{userSettingData('address')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="aboutTable">Email</td>
                                        <td>{{userSettingData('mail')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="aboutTable">Facebook</td>
                                        <td>{{userSettingData('facebook')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="aboutTable">Twitter</td>
                                        <td>{{userSettingData('twitter')}}</td>
                                    </tr>
                                    <tr>
                                        <td class="aboutTable">linkedin</td>
                                        <td>{{userSettingData('linkedin')}}</td>
                                    </tr>
                                </tbody>
                                </table>
                        </div>
                    </div>
                </div>
                <div class="offset-1"></div>
                <div class="col-lg-7">
                    <div class="profileRight">
                        <h5 class="contectDetails mb-5">About</h5>
                        <div class="">
                            <h3 class="p-1">About myself</h3>
                            <p class="my-3">{{userSettingData('aboutMyself')}}</p>
                        </div>
                        <div class="mt-5 pt-5">
                            <h3 class="p-1">About site</h3>
                            <p class="my-3">{{userSettingData('aboutSite')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection