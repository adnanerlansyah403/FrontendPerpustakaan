@extends("master")

@section("title", "Edit Buku")

@section("content_master")

<br><br>
<a href="{{ route("homepage") }}">Kembali</a>

<h1>Buat Buku</h1>

@if ($errors->any())
<br>
    @foreach ($errors as $error)
        <p>
            {{ $error }}
        </p>
    @endforeach
@endif


<form action="{{ route("book.update", $book["originalData"]["id"]) }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h3>Isi data form buku</h3>

    <label for="title">Judul</label>
    <input type="text" name="title" placeholder="Title..." value="{{ $book["originalData"]["title"] }}"><br>
    <label for="size_of_book">Berat Buku</label>
    <input type="text" name="size_of_book" placeholder="Size of Book..." value="{{ $book["originalData"]["size_of_book"] }}"><br>
    <label for="thick_of_book">Tebal Buku</label>
    <input type="text" name="thick_of_book" placeholder="Tebal Buku..." value="{{ $book["originalData"]["thick_of_book"] }}"><br>
    <label for="publication_at">Tanggal Perilisan</label>
    <input type="date" name="publication_at" placeholder="tanggal Perilisan..." value="{{ $book["originalData"]["publication_at"] }}"><br><br>
    <label for="cover">Cover</label>
    <input type="file" name="cover" placeholder="Cover buku..." ><br><br>
    <label for="description">Deskripsi</label><br>
    <textarea name="description" id="" cols="30" rows="10">{{ $book["originalData"]["description"] }}</textarea><br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        <option value="1">Drama</option>
    </select><br>
    <br><br>

    <h3>Isi data form author</h3>
    <label for="name">Judul</label>
    <input type="text" name="name" placeholder="Nama Author..." value="{{ $book["author"]["name"] }}"><br>
    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email Author..." value="{{ $book["author"]["email"] }}"><br>
    <label for="gender">Gender</label>
    <select name="gender" id="gender">
        <option value="L">Laki-Laki</option>
        <option value="P">Perempuan</option>
    </select><br>
    <label for="birthdate">Tanggal Lahir</label>
    <input type="date" name="birthdate" placeholder="Tanggal Lahir..." value="{{ $book["author"]["birthdate"] }}"><br><br>
    <label for="photo">Foto Profile</label>
    <input type="file" name="photo" placeholder="Foto Penulis..."><br><br>
    <label for="bio">Bio</label><br>
    <textarea name="bio" id="" cols="30" rows="10">{{ $book["author"]["bio"] }}</textarea><br><br>

    <button type="submit">Perbarui Buku</button>


</form>
    
@endsection