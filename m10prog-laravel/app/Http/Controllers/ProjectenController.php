<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;


class ProjectenController extends Controller
{

    public function index() {

        $projecten = project::all();

        return view('projecten.index',
        ['projecten' => $projecten], 
        ['title' => 'Projecten']);
    }
    // public function show() {
    //     return view('projecten.show', ['title' => '{$model->title} ']);
    // }


}
