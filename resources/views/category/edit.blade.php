@extends("master")

@section("title", "Edit Kategori")

@section("content_master")

<br><br>
<a href="{{ route("category.index") }}">Kembali</a>

@if ($errors->any())
<br>
    @foreach ($errors as $error)
        <p>
            {{ $error }}
        </p>
    @endforeach
@endif

<form action="{{ route("category.update", $category["id"]) }}" method="POST">
    @csrf

    <h3>Isi data form category</h3>

    <label for="name">Name</label>
    <input type="text" name="name" placeholder="Name..." value="{{ $category["name"] }}"><br>

    <button type="submit">Perbarui Category</button>


</form>
    
@endsection