<?php

namespace App\Http\Controllers;

use App\Helpers\HttpClient;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {

        $responsePengguna = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories"
        );

        $categories = $responsePengguna["data"];

        // dd($categories[0]);

        return view("category.index", compact("categories"));

    }

    public function show($id)
    {

        $responsePengguna = HttpClient::fetch(
            "GET",
            "http://localhost:8001/api/categories/".$id."/show"
        );

        $categories = $responsePengguna["data"];

        dd($categories);

        return view("category.show", compact("categories"));

    }

    public function create() 
    {
        return view("category.create");
    }

}
