@extends('layout')

@section('content')
<di class="container">
<h1 align="center">My Gallery</h1>
    <div class="row main-div">
        @foreach($imagesInView as $image)
            <div class="col-md-3 gallery-item">
                <div><img src="/{{$image->image}}" alt="" class="img-thumbnail"></div>
                <button class="btn btn-info my-button" onclick="document.location='/show/{{$image->id}}'">Show</button>
                <button class="btn btn-warning my-button" onclick="document.location='/edit/{{$image->id}}'">Edit</button>
                <button class="btn btn-danger my-button" onclick="document.location='/delete/{{$image->id}}'">Delete</button>           
            </div>
        @endforeach
    </div>
</div>
@endsection
