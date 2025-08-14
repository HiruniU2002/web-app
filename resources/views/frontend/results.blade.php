<!-- resources/views/search/results.blade.php -->


@section('content')
    <h2>Search Results for "{{ $query }}"</h2>
    
    @if($results->count() > 0)
        <ul>
            @foreach($results as $result)
                <li>{{ $result->name }}</li> 
            @endforeach
        </ul>
    @else
        <p>No results found.</p>
    @endif
@endsection