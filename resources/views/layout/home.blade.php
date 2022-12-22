@extends("master")

@section("content_master")

<h1>List Buku</h1>

<a href="{{ route("book.create") }}">Tambah Buku</a><br><br>
        
<table border="1" spacing="1">
    <thead>
        <tr>
            <th>Judul Buku</th>
            <th>Deskripsi Penulis</th>
            <th>Tanggal Terbit</th>
            <th>Tebal Buku</th>
            <th>Berat Buku</th>
            <th>Cover</th>
            <th>Kota Terbit</th>
            <th>Rating Buku</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($book as $p)
            <tr>
                <td>
                    {{ $p["book"]["originalData"]["title"] ? $p["book"]["originalData"]["title"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["description"] ? Str::limit($p["book"]["originalData"]["description"], 50, "...") : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["publication_at"] ? $p["book"]["originalData"]["publication_at"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["thick_of_book"] ? $p["book"]["originalData"]["thick_of_book"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["size_of_book"] ? $p["book"]["originalData"]["size_of_book"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["cover"] ? $p["book"]["originalData"]["cover"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["rising_city"] ? $p["book"]["originalData"]["rising_city"] : "Tidak ada data" }}
                </td>
                <td>
                    {{ $p["book"]["originalData"]["age_rating"] ? $p["book"]["originalData"]["age_rating"] : "Tidak ada data" }}
                </td>
                <td>
                    <a href="">
                        Delete
                    </a>
                    <a href="">
                        Edit
                    </a>
                    <a href="{{ route("book.show", $p["book"]["originalData"]["id"]) }}">
                        Show
                    </a>
                </td>
            </tr>
        @empty
            
        @endforelse
    </tbody>
</table>    

@endsection