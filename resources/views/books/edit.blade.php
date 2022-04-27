

@if ($errors->any())
@foreach ($errors->all() as $error)
       <li> {{ $error }}</li>
@endforeach
@endif

<h1> Create books </h1>

<form action="{{ route('books.update', $book->id )}}" method="POST">
    @method('PATCH')
    @csrf

    <div>
    <label for="name">Name:</label>
         <input type="text" name="name" value="{{ $book->name }}">
    </div>

    <div>
    <label for="author">Author:</label>
    <input type="text" name="author" value="{{ $book->author }}">

</div>
<div>
    <label for="genre">Genre:</label>
    <input type="text" name="genre" value="{{ $book->genre }}">
    </div> 
    <x-button>Update</x-button>
</form>