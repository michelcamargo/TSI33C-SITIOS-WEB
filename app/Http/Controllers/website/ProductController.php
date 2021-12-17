<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use App\Models\Products;
use Illuminate\Http\Request;


function productInputValidator($productInput) {
    // INPUT CHECK
    $errors = [];
    if(!$productInput->name && strlen($productInput->name) <= 0) { $errors[] = "name"; }
    if(!$productInput->genre && strlen($productInput->genre) <= 0) { $errors[] = "genre"; }
    if(!$productInput->director && strlen($productInput->director) <= 0) { $errors[] = "director"; }
    if(!$productInput->year && $productInput->year > 1600 && $productInput->year < date("Y")) { $errors[] = "year"; }

    // ERROR TREATMENT
    if(sizeof($errors) > 0) {
        // ERROR
        $errorMessage = "Falha no cadastro.\\nErros em entradas: ";
        foreach ($errors as $error) { $errorMessage .= " " . $error; }
        echo "<script>var errorMessage = '$errorMessage'; alert(errorMessage);</script>";

        return false;
    } else {
        // SUCCESS
        $successMessage = "Sucesso! \\n" . $productInput->name . " adicionado ao catálogo.";
        echo "<script>var successMessage = '$successMessage'; alert(successMessage);</script>";

        return true;
    }
}


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

    public function editView($id, Request $request) {
        $product = Products::find($id);
        return view('website.products.edit')->with("product", $product);
    }

    public function productEdit($id, Request $request) {
        $product = Products::find($id);
        $product->name = $request->get("name");
        $product->genre = $request->get("genre");
        $product->year = $request->get("year");
        $product->director = $request->get("director");

        $hasErrors = productInputValidator($product);

        if($hasErrors == true) {
            $product->save();
            return view('website.products.view')->with("product", $product);
        } else {
            return view('website.products.create');
        }
    }

    public function createView(Request $request) {
        return view('website.products.create');
    }

    public function productCreate(Request $request) {
        $product = new Products();
        $product->name = $request->get("name");
        $product->genre = $request->get("genre");
        $product->year = $request->get("year");
        $product->director = $request->get("director");

        $hasErrors = productInputValidator($product);

        if($hasErrors == true) {
            $product->save();
            return view('website.products.view')->with("product", $product);
        } else {
            return view('website.products.create');
        }

    }

    public function productRemove($id, Request $request) {
        Products::get('id', $id)->delete();

        return view('website.products.index');
    }


}
