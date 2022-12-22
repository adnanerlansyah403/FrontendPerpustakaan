@extends("master")

@section("title", "Buat Kategori")

@section("content_master")

<br><br>
<a href="{{ route("category.index") }}">Kembali</a>

<h1>Buat Kategori</h1>

@if ($errors->any())
<br>
    @foreach ($errors as $error)
        <p>
            {{ $error }}
        </p>
    @endforeach
@endif

<form action="{{ route("category.store") }}" method="POST">
    @csrf

    <h3>Isi data form kategori</h3>

    <label for="name">Nama Kategori</label>
    <input type="text" name="name" placeholder="Nama Kategori..."><br>

    <button type="submit">Buat kategori</button>


</form>
    
@endsection