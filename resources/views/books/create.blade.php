@if ($errors->any())
@foreach ($errors->all() as $error)
       <li> {{ $error }}</li>
@endforeach
@endif

<h1> Create books </h1>

<form action="{{ route('books.store')}}" method="POST">
    @csrf

    <div>
    <label for="name">Name:</label>
         <input type="text" name="name">
    </div>

    <div>
    <label for="author">Author:</label>
    <input type="text" name="author">

</div>
<div>
    <label for="genre">Genre:</label>
    <input type="text" name="genre">
    </div> 
    <x-button>Register</x-button>
</form>