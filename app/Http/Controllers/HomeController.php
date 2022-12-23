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
            "http://localhost:8001/api/books/" . $id . "/show"
        );

        $book = $responseBook["data"]['book'];

        // dd($book['author']);

        return view("book.show", compact("book"));
    }

    public function edit($id)
    {

        $responseBook = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/books/" . $id . "/edit"
        );

        $book = $responseBook["data"]['book'];

        return view("book.edit", compact("book"));
    }

    public function update(Request $request, $id)
    {
        $responseBook = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/books/" . $id . "/update",
            $request->all(),
            $request->file()
        );

        // dd($responseBook);

        if (isset($responseBook["errors"])) {
            // dd("test");
            return redirect()->route('book.edit', $id)->withErrors($responseBook['errors']);
        }

        return redirect()->route('book.show', $id);
    }

    public function create()
    {

        $responseCategory = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories"
        );

        $categories = $responseCategory["data"];
        // dd($categories);

        return view("book.create", compact("categories"));
    }

    public function store(Request $request)
    {
        $responseBook = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/books/store",
            $request->all(),
            $request->file()
        );


        if (isset($responseBook["errors"])) {
            // dd("test");
            return redirect()->route("book.create")->withErrors($responseBook['errors']);
        }

        return redirect()->route("homepage");
    }

    public function destroy($id)
    {

        $responseBook = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/books/" . $id . "/destroy"
        );

        // dd($responseBook);

        return redirect()->route("homepage");
    }
}
