@extends('master')
@section('content')


    <div class="row d-flex justify-content-center">
        @foreach($data as $item)
        <div class="card col-lg-5" style="width: 18rem; right: 5px">
            <div class="card-body">
                <h5 class="card-title">{{ $item->title }}</h5>
                <p class="card-text">{{ $item->description }}</p>
                <div class="row">
                    <div class="col-mg-6">
                <a href="{{ route('showonenote', $item->id) }}" class="btn btn-primary">Update</a>
                    </div>
                    <div class="col-mg-6">

                        <form action="{{ route('deletenote', $item->id) }}" method="POST">

                    @csrf
                    <button type="submit" class="btn btn-warning">Delete</button>
                        </form>
                    </div>
                </div>
                <h6>Created at:</h6>
                <p>{{ $item->created_at }}</p>
            </div>
        </div>
        @endforeach

    </div>
    @endsection


