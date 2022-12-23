@extends("master")

@section("title", "Edit Kategori")

@section("content_master")

<br><br>
<a href="{{ route("category.index") }}">Kembali</a>

@if($errors->any())
<br>
<div class="bg-red-500 text-white font-bold rounded-t py-2 px-4">
    Something went wrong...
</div><br>
<ul class="border border-t-0 border-red-400 rounded-b px-4 py-3 text-red-700">
    @foreach($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
    @endforeach
</ul>
@endif

<form action="{{ route("category.update", $category["id"]) }}" method="POST">
    @csrf

    <h3>Isi data form category</h3>

    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name..." value="{{ $category["name"] }}"><br>

    <button type="submit">Perbarui Category</button>


</form>
    
@endsection