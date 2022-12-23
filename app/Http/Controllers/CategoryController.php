<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        $responseCategory = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories"
        );

        $categories = $responseCategory["data"];

        // dd($categories[0]);

        return view("category.index", compact("categories"));
    }

    public function show($id)
    {

        $responseCategory = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories/" . $id . "/show"
        );

        $categories = $responseCategory["data"];

        return view("category.show", compact("categories"));
    }

    public function edit($id)
    {

        $responseCategory = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories/" . $id . "/show"
        );

        $category = $responseCategory["data"];

        return view("category.edit", compact("category"));
    }

    public function update(Request $request, $id)
    {
        $responseCategory = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/categories/" . $id . "/update",
            $request->all()
        );

        if (isset($responseBook["errors"])) {
            return redirect()->route('category.edit', $id)->withErrors($responseCategory['errors']);
        }

        $category = $responseCategory["data"];

        return redirect()->route('category.index');
    }

    public function create()
    {
        return view("category.create");
    }

    public function store(Request $request)
    {

        $responseCategory = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/categories/store",
            $request->all()
        );

        if (isset($responseBook["errors"])) {
            return redirect()->route('category.create')->withErrors($responseCategory['errors']);
        }

        return redirect()->route("category.index");
    }

    public function destroy($id)
    {

        $responseCategory = HttpClient::fetch(
            "POST",
            "http://localhost:8001/api/categories/" . $id . "/destroy"
        );

        return redirect()->route('category.index');
    }
}
