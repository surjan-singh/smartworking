<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\ListAllProperty;
use Illuminate\Support\Facades\Http;

class GetProperty extends Controller
{
    //

    public function index() {

        $properties = ListAllProperty::simplePaginate(10);
        return view('properties')->with('data', $properties);
    }
}
