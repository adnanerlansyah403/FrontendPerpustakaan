@extends("master")

@section("title", "Details Author")

@section("content_master")

{{-- @dd($book["author"]["name"]) --}}
    <br><br>
    <a href="{{ route("homepage") }}">Kembali</a>
<details>
    <br>
    <ul>
        <li>
            <h2>Data Author : </h2>
        </li>
        <li>
            @if ($book["originalData"]["cover"])
                <img src="{{ $book["author"]["photo_path"] }}" alt="" width="200" height="200">
            @endif
        </li>
        <li>
            <b>Nama: </b>
            <span>
                {{ $book["author"]["name"] }}
            </span>
        </li>
        <li>
            <b>Email Author: </b>
            <span>
                {{ $book["author"]["email"] }}
            </span>
        </li>
        <li>
            <b>Gender: </b>
            <span>
                {{ $book["author"]["gender"] == "L" ? "Laki-Laki" : "Perempuan" }}
            </span>
        </li>
        <li>
            <b>Tanggal Lahir: </b>
            <span>
                {{ $book["author"]["birthdate"] }}
            </span>
        </li>
        <li>
            <b>Bio: </b>
            <span>
                {{ $book["author"]["bio"] }}
            </span>
        </li>
    </ul>
    <br>
    <br>
</details>
<br>
<a href="{{ route("book.edit", $book["originalData"]["id"]) }}">Edit Buku</a>

@endsection