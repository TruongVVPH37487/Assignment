@extends('../master');


@section('posts')

<div class="col-md-8">
    
@foreach ($listcate as $c)
<h1>Category : {{ $c->category }}</h1>

@endforeach

        @foreach ($listcate as $c)
        <div class="card mb-4">
            <img src="{{ $c->image_url }}" class="card-img-top" alt="Main News Image">
            <div class="card-body">
                <h5 class="card-title">{{ $c->title }}</h5>
                <p class="card-text">{{ $c->summarise }}</p>
                <a href="/details/{{ $c->id }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
        @endforeach
    </div>
    
@endsection