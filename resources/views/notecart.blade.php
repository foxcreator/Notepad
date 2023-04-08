@extends('master')
@section('content')
    <form class="form-floating" action="{{ route('updatenote', $noteId->id) }}" method="POST">
        <input type="text" name="title" class="form-control" id="floatingInputValue" placeholder="Header" value="{{ $noteId->title }}">
        <label for="floatingInputValue">Input a title</label>

        <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a text here" id="floatingTextarea">{{ $noteId->description }}</textarea>
            <label for="floatingTextarea">Note text</label>
        </div>
        <br>

        @csrf
        <button type="submit" class="btn btn-success">Update Note</button>
    </form>

@endsection
