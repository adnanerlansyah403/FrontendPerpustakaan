@extends("master")

@section("title", "Details Buku")

@section("content_master")

{{-- @dd($book["author"]["name"]) --}}
    <br><br>
    <a href="{{ route("homepage") }}">Kembali</a>

    <h1>Judul Buku: {{ $book["originalData"]["title"] }}</h1>
<details>
    <br>
    <div style="display: flex; align-items: center; gap: 5px;">
        @if($book["author"] != null)
            <b>Di buat oleh: 
                <span>
                    {{ $book["author"]["name"] }} 
                </span>
            </b>
        @endif
        @if ( $book["category"] != null )
            <span>
                Kategori: {{ $book["category"]["name"] }}
            </span>
        @endif
    </div><br>
    <ul>
        <li>
            <h2>Data Buku : </h2>
        </li>
        <li>
            <b>Description: </b>
            <span>
                {{ $book["originalData"]["publication_at"] }}
            </span>
        </li>
        <li>
            <b>Tebal Buku: </b>
            <span>
                {{ $book["originalData"]["thick_of_book"] }}
            </span>
        </li>
        <li>
            <b>Berat Buku: </b>
            <span>
                {{ $book["originalData"]["size_of_book"] }}
            </span>
        </li>
        <li>
            <b>Deskripsi: </b>
            <span>
                {{ $book["originalData"]["description"] }}
            </span>
        </li>
    </ul>
    @if($book["author"] != null)
    <br>
        <ul>
            <li>
                <h2>Data Author : </h2>
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
    @endif
    <br>
    <br>
</details>
<br>
<a href="{{ route("book.edit", $book["originalData"]["id"]) }}">Edit Buku</a>

@endsection