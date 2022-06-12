<?php

namespace App\Http\Controllers;

use App\Models\projectModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('projecthub');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'collegename'=>'required',
            'projid'=>'required',
            'projtitle'=>'required',
            'projdesc'=>'required',
            'projimg'=>'required',
            'teamname'=>'required'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function show(projectModel $projectModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function edit(projectModel $projectModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, projectModel $projectModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\projectModel  $projectModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(projectModel $projectModel)
    {
        //
    }
}
