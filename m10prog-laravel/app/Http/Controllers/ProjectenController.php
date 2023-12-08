<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectenController extends Controller
{
    public function index() {
        return view('projecten.index');
    }
    public function show() {
        return view('projecten.show');
    }
}
