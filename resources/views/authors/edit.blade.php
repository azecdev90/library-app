@if($errors->any())
@foreach($errors->all() as $error) 
    {{ $error }}
@endforeach
@endif



<h1> Create Author </h1>

<form action="{{ route('authors.update', $author->id )}}" method="POST">
    @method('PATCH')
    @csrf

    <div>
    <label for="name">Name:</label>
         <input type="text" name="name" value="{{ $author->name }}">
    </div>

    <div>
    <label for="country">Author:</label>
    <input type="text" name="country" value="{{ $author->country }}">

</div>
<div>
    <label for="genre">Genre:</label>
    <input type="text" name="genre" value="{{ $author->genre }}">
    </div> 
    <x-button>Update</x-button>
</form>