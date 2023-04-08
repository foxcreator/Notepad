@extends('master')
@section('content')
    <form class="form-floating" action="{{ route('createNote') }}" method="POST">
            <input type="text" name="title" class="form-control" id="floatingInputValue" placeholder="Header">
            <label for="floatingInputValue">Input a header</label>
        @error('title')
        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
        @enderror

        <div class="form-floating">
            <textarea class="form-control" name="description" placeholder="Leave a text here" id="floatingTextarea"></textarea>
            <label for="floatingTextarea">Note text</label>
        </div>

        @csrf
        <button type="submit" class="btn btn-success">Create Note</button>
    </form>

@endsection
