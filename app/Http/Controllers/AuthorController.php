<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    
    public function index()
    {

        $responsePengguna = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/authors"
        );

        $author = $responsePengguna["data"];

        // dd($author[0]);

        return view("author.index", compact("author"));

    }

    public function show($id)
    {

        $responsePengguna = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/authors/".$id."/show"
        );

        $author = $responsePengguna["data"];

        return view("author.show", compact("author"));

    }

    public function create() 
    {
        return view("author.create");
    }
    
}
