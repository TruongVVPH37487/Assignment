{{-- @section('tab') --}}
<div class="col-md-4 mt-0">
    <div class="card mb-4">
        <div class="card-header">
            Latest News
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($cate as $c)
            <li class="list-group-item"><a href="/details/{{$c -> id}}">{{$c->title}}</a></li>
            @endforeach
        </ul>
    </div>

    <div class="card mb-4">
        <div class="card-header">
            Categories
        </div>
        <ul class="list-group list-group-flush">
            @foreach ($cate as $c)
                @if (isset($c->idCT) && isset($c->category))
                    <li class="list-group-item"><a href="/cat/{{$c->idCT}}">{{$c->category}}</a></li>
                
                @endif
            @endforeach
        </ul>
    </div>
    
    
    
    
</div>
{{-- @endsection --}}



