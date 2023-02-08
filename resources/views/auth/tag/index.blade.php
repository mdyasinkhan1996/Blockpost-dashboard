@extends('layouts.auth')
@section('title', 'tags index | Dashboard admin')
@section('content')
    <div class="card">
        <div class="card-head adCardHead" style="padding:0 1.875rem; margin-top:1.875rem;">
            <div class="d-flex justify-content-between bg-primary px-5 py-3">
                <h4 class="text-white font-weight-bold pt-1">All Tags</h4>
            </div>
        </div>
        <div class="card-body pt-0">
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">SL.</th>
                    <th scope="col">Tags</th>
                    <th scope="col" class="text-center">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($tags as $tag)
                        <tr>
                            <th style="padding-top:16px;" scope="row">{{$loop->iteration}}</th>
                            <td style="padding-top:16px;">{{$tag->name}}</td>
                            <td  class="text-center">
                                <button style="padding:3px 7px;" data-toggle="modal" data-target="#delete{{$tag->id}}" class="btn btn-danger"><i class="fa-regular fa-trash-can text-white"></i></button>
                            </td>
                        </tr>
                        {{-- Delete modal --}}
                        <div class="modal fade" id="delete{{$tag->id}}" tabindex="-1" aria-labelledby="deleteLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form action="{{route('tags.destroy', $tag->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteLabel">{{$tag->name}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p>{{$tag->name}}</p>
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
        <div class="card-body multiTags pt-0">
            <div class="mt-4">
                <h4 class="pb-3">Create multiple tags</h4>
            </div>
            <form action="{{route('tags.store')}}" method="post">
                @csrf
                <div class="">
                        <select name="tags[]" class="form-control js-tags-tokenizer" multiple="multiple">
                            
                        </select>
                        @if($errors->has('tags'))
                            <div class="error text-danger">{{ $errors->first('tags') }}</div>
                        @endif
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection