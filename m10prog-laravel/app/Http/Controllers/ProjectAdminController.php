<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projecten = Project::paginate(100);
return view('dashboard.projecten.index', ['projecten'=>$projecten]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.projecten.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'titel'      => 'required|max:255',
            'header'      => 'required|max:255',
            'link'        => '',
            'img'         => '',
            'alt'       => '',
            'video'       => '',
            'description'      => 'required|max:255',

        ]);

        $projecten = new Project( $valid );
        $projecten->save();

        return redirect( route('projecten.index', $projecten->id ) );


    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $projecten)
    {
        return view('dashboard.projecten.edit', ['project'=>$projecten]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $projecten)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
