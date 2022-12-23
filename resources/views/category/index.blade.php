@extends("master")

@section("title", "List Kategori")

@section("content_master")

<h1>List Category</h1>

<a href="{{ route("category.create") }}">Tambah Kategori</a>
<br><br>
        
<table border="1" spacing="1">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($categories as $c)
            <tr>
                <td>
                    {{ $c["name"] }}
                </td>
                <td>
                    <a href="{{ route("category.edit", $c["id"]) }}">
                        Edit
                    </a>
                    <a href="{{ route("category.destroy", $c["id"]) }}">
                        Delete
                    </a>
                </td>
            </tr>
        @empty
            
        @endforelse
    </tbody>
</table> 
    
@endsection