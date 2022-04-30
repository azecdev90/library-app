@if ($errors->any())
@foreach($errors->all() as $error )
    {{ $error }}
@endforeach
@endif
<h1> Create authors </h1>

<form action="{{ route('authors.store')}}" method="POST">
    @csrf

    <div>
    <label for="name">Name:</label>
         <input type="text" name="name">
    </div>

    <div>
    <label for="country">Country:</label>
    <input type="text" name="country">

</div>
<div>
    <label for="genre">Genre:</label>
    <input type="text" name="genre">
    </div> 
    <x-button>Register</x-button>
</form>