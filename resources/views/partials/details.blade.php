@extends('../master');



@section('posts')
    <!-- Main Content -->
    <div class="col-md-8">
        <div class="card mb-4">
            <img src="{{ $news->image_url }}" class="card-img-top" alt="Article Image">
            <div class="card-body">
                <h1 class="card-title">{{ $news->title }}</h1>
                <p class="text-muted">By {{ $news->author }} / Date {{ $news->date }}</p>
                <p class="card-text">{{ $news->content }}</p>
            </div>
        </div>
    </div>
@endsection
