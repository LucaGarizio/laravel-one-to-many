<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index(){

        $type = Type ::all();

        return view('pages.index', compact('type'));

    }
}
