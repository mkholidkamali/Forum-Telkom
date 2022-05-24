
@extends('layouts.main')

@section('container')

<div class="card mt-5 col-md-6 mx-auto text-center">
    <div class="card-body">
        <form action="/comment/{{ $comment->id }}" method="post" class="d-inline">
            @csrf
            @method('put')
            <label for="comment" class="form-label fs-2">Update Comment</label>
            <input type="text" class="form-control" name="comment" value="{{ $comment->comment }}">
            <button type="submit" class="btn btn-warning p-1 mt-2" onclick="confirm('Edit?')"><i class="bi bi-pencil-square"></i> Update</button>
        </form>
    </div>
</div>

@endsection