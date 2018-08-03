@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    @include('partials.messages') 
                    <button class="btn btn-primary btn-lg"
                        data-toggle="modal"
                        data-target="#addModal"
                        type="button" name="button">Add Bookmark
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modelTitleId">Add Bookmark</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
            <div class="modal-body">
                   
                <form action="{{route('bookmarks.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Bookmark Name</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label for="url">Bookmark URL</label>
                        <input type="text" name="url" id="url" class="form-control" required>
                    </div>
                     <div class="form-group">
                        <label for="description">Bookmark Description</label>
                        <input type="text" name="description" id="description" class="form-control">
                    </div>
                    {{-- <input type="hidden" name="user_id" value="{{auth()->user()->id}}"> --}}
                    <input class="btn btn-primary" type="submit" name="submit" value="Add Bookmark">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
