
@extends('layouts.main')


@section('container')


<div class="container mt-5 col-md-8">
    <form action="/comment" method="post">
        @csrf
        <h1 class="text-center">Whats in your mind today?</h1>
        <div class="input-group">
            <input type="text" class="form-control @error('comment') is-invalid @enderror" name="comment">
            <input type="hidden" name="id_user" value="{{ Auth::id() }}">
            <button class="btn btn-dark">Submit</button>
            @error('comment')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
    </form>
    
    <h1 class="text-center mt-5">Your mind from the back day</h1>
    @if ($comments->count())
        @foreach ($comments as $comment)
        <div class="card mb-3">
            <div class="card-body p-4 pt-2">
                <p class="text-end">{{ date('d-M-Y', strtotime($comment->created_at)) }}</p>
                {{ $comment->comment }}
            </div>
            <div class="card-footer">
                <a class="btn btn-warning p-1" href="/comment/{{ $comment->id }}/edit"><i class="bi bi-pencil-square"></i></a>
                <form action="/comment/{{ $comment->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger p-1" onclick="confirm('Hapus?')"><i class="bi bi-trash"></i></button>
                </form>
            </div>
        </div>
        @endforeach
    @else
    <h3 class="text-center mt-2">No Comment</h3>
    @endif
</div>

@endsection