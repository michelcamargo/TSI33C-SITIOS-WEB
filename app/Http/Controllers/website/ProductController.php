<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $products = Products::orderBy("id")->get();
        return view('website.products.index')->with('products', $products);
    }

    public function view($id, Request $request) {
        $product = Products::find($id);
        return view('website.products.view')->with("product", $product);
    }

    public function productEdit($id, Request $request) {

        $product = Products::find($id);
        $product->name = $request->get("name");
        $product->genre = $request->get("genre");
        $product->year = $request->get("year");
        $product->director = $request->get("director");

        $product->save();

        return view('website.products.view')->with("product", $product);
    }

    public function productCreate(Request $request) {

        $product = new Products();
        $product->name = $request->get("name");
        $product->genre = $request->get("genre");
        $product->year = $request->get("year");
        $product->director = $request->get("director");

        $product->save();

        return view('website.products.view')->with("product", $product);
    }

    public function productDelete() {
        return view('website.products.index');
    }


}
