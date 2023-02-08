@extends('layouts.auth')
@section('title', 'Google Map | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">Google Map</h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form action="{{route('local.store',Auth::user()->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea name="googlemap" class="form-control" id="googlemap" cols="30" placeholder="Google map 'src link'" rows="19">{{old('googlemap')}}</textarea>
                            @if($errors->has('googlemap'))
                                <div class="error text-danger">{{ $errors->first('googlemap') }}</div>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="">
                        <iframe src="{{userSettingData('googleMap')}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection