<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    public function add() {
    // Maak een model aan
    $model = new Project();
    // definieer de velden
    $model->titel = 'titel';
    $model->img = 'https://images.pexels.com/photos/4456992/pexels-photo-4456992.jpeg?auto=compress&cs=tinysrgb&w=800';
    $model->alt = 'een foto van gemeente amsterdam';
    $model->video = '//www.youtube.com/embed/wjTn_EkgQRg?si=tphj23V4wC3MLV9_';
    $model->description = 'hallo ik ben je eerste project';
    $model->active = 1;
    // sla het model op
    $model->save();
    }

    public function show(Project $project): string
    {
        return view('projecten.show', ['project'=>$project]);
    }



}
