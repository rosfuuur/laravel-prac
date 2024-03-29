<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Services\Twitter;

class ProjectsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $projects = Project::where( 'owner_id', auth()->id() )->get();

        dump( $projects );

        return view('projects.index', compact('projects'));
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {
        $attributes = request()->validate([
            'title' => ['required', 'min:3'],
            'description' => ['required', 'min:3'],
        ]);

        $attributes['owner_id'] = auth()->id();

        Project::create($attributes);

        \Mail::to(request()->user())->send(new MailableClass);

        return redirect('/projects');
    }

    public function edit( Project $project ) {

        return view('projects.edit', compact('project'));
    }

    public function update( Project $project ) {
        $this->authorize( 'update', $project );

        $project->update(request(['title', 'description']));

        return redirect('/projects');
    }

    public function destroy( Project $project ) {
        $this->authorize( 'update', $project );

        $project->delete();

        return redirect('/projects');
    }

    public function show( Project $project ) {
        $this->authorize( 'update', $project );

        return view('projects.show', compact('project'));
    }
}
