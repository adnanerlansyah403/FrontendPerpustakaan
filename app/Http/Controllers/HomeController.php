<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {

        $responseBook = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/books"
        );

        $book = $responseBook["data"];

        // dd($book[0]);

        return view("layout.home", compact("book"));

    }

    public function show($id)
    {

        $responseBook = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/books/".$id."/show"
        );

        $book = $responseBook["data"]['book'];

        // dd($book['author']['name']);

        return view("book.show", compact("book"));

    }

    public function edit($id)
    {

        $responseBook = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/books/".$id."/edit"
        );

        $book = $responseBook["data"]['book'];

        return view("book.edit", compact("book"));

    }

    public function create() 
    {
        return view("book.create");
    }

    public function store(Request $request)
    {
        $responseBook = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/books/store",
            $request->all()
        );

        // dd($responseBook);

        return redirect()->route("homepage");

    }

}
