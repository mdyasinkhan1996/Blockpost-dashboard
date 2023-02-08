@extends('layouts.auth')
@section('title', 'posts create | Dashboard admin')
@section('additionalCSS')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">All post</h4>
                <div class="">
                    <a class="btn btn-sm btn-info" href="{{route('posts.create')}}">Create post</a>
                </div>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Category</th>
                    <th scope="col">Tags</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th style="padding-top:16px;" scope="row">{{$loop->iteration}}</th>
                            <td style="padding-top:16px;">{{$post->title}}</td>
                            <td style="padding-top:16px;">{{Str::limit($post->description, 50)}}</td>
                            <td style="padding-top:16px;">{{$post->category->name}}</td>
                            <td style="padding-top:16px;">@forelse ($post->tags as $tag)
                                {{$tag->name}}
                            @empty
                                Empty
                            @endforelse</td>
                            <td style="padding-top:16px;">{{$post->user->name}}</td>
                            <td style="padding-top:16px;">{{$post->status == 1? 'Active':'Inactive'}}</td>
                            <td>
                                <button  style="padding:3px 7px;" class="btn btn-info"><i class="fa-solid fa-eye text-white"></i></button>
                                <a style="padding:3px 7px;" class="btn btn-primary" href="{{route('posts.edit', $post->id)}}"><i class="fa-solid fa-pen-to-square text-white"></i></a>
                                <button  style="padding:3px 7px;" data-toggle="modal" data-target="#delete{{$post->id}}" class="btn btn-danger"><i class="fa-regular fa-trash-can text-white"></i></button>
                            </td>
                        </tr>
                        {{-- Delete modal --}}
                        <div class="modal fade" id="delete{{$post->id}}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{route('posts.destroy', $post->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">{{$post->title}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{Str::limit($post->description, 100)}}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-secondary">Delete</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @empty
                        <tr>
                            <th class="text-center">Post not found</th>
                        </tr>
                    @endforelse
                </tbody>
              </table>
        </div>
    </div>
@endsection