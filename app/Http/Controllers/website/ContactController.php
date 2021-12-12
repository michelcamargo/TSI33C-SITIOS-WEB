<?php

namespace App\Http\Controllers\website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('website.contact.index');
    }

    /**
     *
     *
     */
    public function form(Request $request) {
        ddd($request->all());
    }
}
