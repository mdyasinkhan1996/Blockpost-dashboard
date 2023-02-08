@extends('layouts.auth')
@section('title', 'posts create | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">Post Create</h4>
                <div class="">
                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#createCategory">Category</a>
                    <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#createTag">Tag</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input name="title" type="text" class="form-control" value="{{old('title')}}" placeholder="Post title" id="title">
                    @if($errors->has('title'))
                        <div class="error text-danger">{{ $errors->first('title') }}</div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="30" placeholder="description" rows="10">{{old('description')}}</textarea>
                    @if($errors->has('description'))
                        <div class="error text-danger">{{ $errors->first('description') }}</div>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="isPublish">Is Publish</label>
                            <select name="status" class="form-control" id="isPublish">
                                <option value="1" selected>Publish</option>
                                <option value="0">Draft</option>
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
                                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
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
            {{-- Category modal --}}
            <div class="modal fade" id="createCategory" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('categories.store')}}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteLabel">Create category</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <input type="text" name="category" class="form-control" id="category" placeholder="category">
                                    @if($errors->has('category'))
                                        <div class="error text-danger">{{ $errors->first('category') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondery" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- Tag modal --}}
            <div class="modal fade" id="createTag" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <form action="{{route('tags.store')}}" method="post">
                            @csrf
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteLabel">Create tag</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body tagSelect">
                                    <select name="tags[]" class="form-control js-tags-tokenizer" multiple="multiple">
                                        
                                    </select>
                                    @if($errors->has('tags'))
                                        <div class="error text-danger">{{ $errors->first('tags') }}</div>
                                    @endif
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondery" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection