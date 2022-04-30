
@foreach($authors as $author) 

<form action="{{ route('authors.destroy', $author->id) }}" method="POST">
@method('DELETE')
    @csrf 
<a href="{{ route('authors.show', $author->id) }}"> {{ $author->id}}</a>
{{ $author->name }} 
{{ $author->author }}
<x-button>Delete</x-button>
</form>
@endforeach


