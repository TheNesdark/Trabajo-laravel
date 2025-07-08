<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SqlController extends Controller{
public function index()
{
    // Your logic goes here
    return view('sql.index'); // or whatever view or response you need
}

}

