<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Mail\MailProjectCreated;
use App\Mail\MailContactUs;
use Illuminate\Support\Facades\Mail;

class ProjectController extends Controller
{
    public function create(){
        return view('projects.create');
    }

    public function store(){

        $attributes = $this->validatedAttributes();
        $attributes['owner_id'] = auth()->id();
        $attributes['color'] = implode(",", request('color'));

        $project = Project::create($attributes);

        session()->flash('message', \Lang::getFromJson('project.project_created_message'));

        Mail::to($project->owner->email)->send(
            new MailProjectCreated($project)
        );

        return redirect('home');
    }

    public function contact(){
        $data = request()->validate([
            'name' => ['required','min:3'],
            'phone' => ['required'],
            'message' => ['required', 'min:10']
        ]);

        session()->flash('message_mail_sent', 'Your message has been sent!');

        Mail::to('morionstone@gmail.com')->send(
            new MailContactUs($data)
        );

        return redirect('/');

    }

    public function show(Project $project){
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project){
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project){
        $attributes = $this->validatedAttributes();
        $attributes['color'] = implode(",", request('color'));
        $project->update($attributes);
        return redirect('/home');
    }

    public function validatedAttributes(){
        return request()->validate([
            'title' => ['required','min:3'],
            'type' => ['required'],
            'description' => ['required']
        ]);
    }
}
