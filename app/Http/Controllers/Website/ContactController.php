<?php

namespace App\Http\Controllers\Website;

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
        return view('Website.contact.index');
    }

    /**
     *
     *
     */
    public function form(Request $request) {
        ddd($request->all());
    }
}
