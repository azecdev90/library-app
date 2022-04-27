
@foreach($books as $book) 

<form action="{{ route('books.destroy', $book->id) }}" method="POST">
@method('DELETE')
    @csrf 
<a href="{{ route('books.show', $book->id) }}"> {{ $book->id}}</a>
{{ $book->name }} 
{{ $book->author }}
<x-button>Delete</x-button>
</form>
@endforeach


