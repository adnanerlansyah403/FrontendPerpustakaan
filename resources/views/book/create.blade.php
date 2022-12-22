@extends("master")

@section("title", "Buat Buku")

@section("content_master")
    
<br><br>
<a href="{{ route("homepage") }}">Kembali</a>

<h1>Buat Buku</h1>

<form action="{{ route("book.store") }}" method="POST">
    @csrf

    <label for="title">Judul</label>
    <input type="text" name="title" placeholder="Title..."><br>
    <label for="size_of_book">Berat Buku</label>
    <input type="text" name="size_of_book" placeholder="Size of Book..."><br>
    <label for="thick_of_book">Tebal Buku</label>
    <input type="text" name="thick_of_book" placeholder="Tebal Buku..."><br>
    <label for="publication_at">Tanggal Perilisan</label>
    <input type="date" name="publication_at" placeholder="tanggal Perilisan..."><br><br>
    <label for="cover">Cover</label>
    <input type="file" name="cover" placeholder="Cover buku..."><br><br>
    <label for="description">Deskripsi</label><br>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br><br>
    <button type="submit">Buat Buku</button>


</form>

@endsection