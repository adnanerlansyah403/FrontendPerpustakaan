@extends("master")

@section("title", "Edit Buku")

@section("content_master")

<br><br>
<a href="{{ route("homepage") }}">Kembali</a>

<h1>Edit Buku</h1>

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
    <textarea name="description" id="" cols="30" rows="10">{{ $book["originalData"]["description"] }}</textarea><br><br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @forelse ($book["categories"] as $category)
            <option value="{{ $category["id"] }}" {{ $category["id"] == $book["originalData"]["category_id"] ? "selected" : "" }}>{{ $category["name"] }}</option>    
        @empty
            <option value="">Belum ada kategori</option>
        @endforelse
    </select><br><br>
    <label for="category_id">Author</label>
    <select name="category_id" id="category_id">
        @forelse ($book["authors"] as $author)
            <option value="{{ $author["id"] }}" {{ $author["id"] == $book["originalData"]["author_id"] ? "selected" : "" }}>{{ $author["name"] }}</option>    
        @empty
            <option value="">Belum ada author</option>
        @endforelse 
    </select><br>
    <br><br>

    <button type="submit">Perbarui Buku</button>


</form>
    
@endsection