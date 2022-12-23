@extends("master")

@section("title", "Buat Buku")

@section("content_master")
    
<br><br>
<a href="{{ route("homepage") }}">Kembali</a>

<h1>Buat Buku</h1>


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

<form action="{{ route("book.store") }}" method="POST" enctype="multipart/form-data">
    @csrf

    <h3>Isi data form buku</h3>

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
    <textarea name="description" id="" cols="30" rows="10"></textarea><br><br>
    <label for="category_id">Category</label>
    <select name="category_id" id="category_id">
        @foreach ($categories as $category)
            <option value="{{ $category["id"] }}">{{ $category["name"] }}</option>
        @endforeach
    </select><br>
    <br><br>

    <button type="submit">Buat Buku</button>


</form>

@endsection