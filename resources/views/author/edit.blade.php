@extends("master")

@section("title", "Edit Author")

@section("content_master")

<br><br>
<a href="{{ route("homepage") }}">Kembali</a>

<h1>Edit Author</h1>

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


<form action="{{ route("author.update", $book["originalData"]["id"]) }}" method="POST" enctype="multipart/form-data">
    @csrf

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

    <button type="submit">Perbarui Author</button>


</form>
    
@endsection