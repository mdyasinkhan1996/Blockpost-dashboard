@extends('layouts.auth')
@section('title', 'category index | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">All Category</h4>
                <a class="btn btn-sm btn-info" data-toggle="modal" data-target="#createCategory">Create category</a>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Category</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <th style="padding-top:16px;" scope="row">{{$loop->iteration}}</th>
                            <td style="padding-top:16px;">{{$category->name}}</td>
                            <td style="padding-top:16px;">{{$category->status == 1? 'Used':'Unused'}}</td>
                            <td  class="text-center">
                                @if($category->status == 1)
                                    <a style="padding:3px 7px;" data-toggle="modal" data-target="#edit{{$category->id}}" class="btn btn-primary" href="{{route('categories.edit', $category->id)}}"><i class="fa-solid fa-pen-to-square text-white"></i></a>
                                @else
                                    <button style="padding:3px 7px;" data-toggle="modal" data-target="#delete{{$category->id}}" class="btn btn-danger"><i class="fa-regular fa-trash-can text-white"></i></button>
                                @endif
                            </td>
                        </tr>
                        {{-- Edit modal --}}
                        <div class="modal fade" id="edit{{$category->id}}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('PATCH')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">Category create</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group ">
                                                <label for="category">Category</label>
                                                <input type="text" name="category" class="form-control" id="category" value="{{$category->name}}">
                                                @if($errors->has('category'))
                                                    <div class="error text-danger">{{ $errors->first('category') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-secondary">Update</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        {{-- Delete modal --}}
                        <div class="modal fade" id="delete{{$category->id}}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">{{$category->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{$category->name}}</p>
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
        </div>
    </div>
@endsection