@extends("master")

@section("title", "Details Buku")

@section("content_master")

{{-- @dd($book["author"]["name"]) --}}
    <br><br>
    <a href="{{ route("homepage") }}">Kembali</a>

    <h1>Judul Buku: {{ $book["originalData"]["title"] }}</h1>
<details>
    <br>
    <div>
        @if($book["author"] != null)
            <b>Di buat oleh: 
            </b>
                <span>
                    {{ $book["author"]["name"] }} 
                </span>
        @endif
        @if ( $book["category"] != null )
        <br><b>
                Kategori:
            </b>
            <span>
                {{ $book["category"]["name"] }}
            </span>
        @endif
    </div><br>
    <ul>
        <li>
            <h2>Data Buku : </h2>
        </li>
        <li>
            @if ($book["originalData"]["cover"])
                <img src="{{ $book["originalData"]["cover_path"] }}" alt="" width="200" height="200">
            @endif
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
            @if ($book["author"]["photo"])
                <li>
                    <img src="{{ $book["author"]["photo"] }}" alt="" width="200" height="200">
                </li>
            @endif
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