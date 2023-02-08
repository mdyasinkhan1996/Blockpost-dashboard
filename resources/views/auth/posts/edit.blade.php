@extends('layouts.auth')
@section('title', 'post edit | Dashboard admin')
@section('additionalCSS')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">Post Edit</h4>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input name="title" type="text" class="form-control" value="{{old('title', $post->title)}}" placeholder="Post title" id="title">
                    @if($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Discription</label>
                    <textarea name="description" class="form-control" id="description" cols="30" placeholder="discription" rows="10">{{old('description', $post->description)}}</textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="isPublish">Is Publish</label>
                            <select name="status" class="form-control" id="isPublish">
                                <option value="1" @selected($post->status == 1)>Publish</option>
                                <option value="0" @selected($post->status == 0)>Draft</option>
                            </select>
                            @if($errors->has('status'))
                                <div class="error text-danger">{{ $errors->first('status') }}</div>
                            @endif
                        </div>
                    </div>
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
                            <label for="category">Category</label>
                            <select name="category" class="form-control" id="category">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}" @selected($category->id == $post->category_id)>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('category'))
                                <div class="error text-danger">{{ $errors->first('category') }}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="tag">Tag</label>
                            <select name="tags[]" class="form-control posttags" id="tag" multiple="multiple">
                                @foreach ($tags as $tag)
                                    <option value="{{$tag->id}}">{{$tag->name}}</option>
                                @endforeach
                            </select>
                            @if($errors->has('tags'))
                                <div class="error text-danger">{{ $errors->first('tags') }}</div>
                            @endif
                        </div>
                    </div>
                </div>
                
                    
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
@section('bottomJS')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@endsection