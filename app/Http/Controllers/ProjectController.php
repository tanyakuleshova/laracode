<?php

namespace App\Http\Controllers;

use App\Mail\MailProjectWithoutRegisterCreated;
use App\ProjectWithoutRegister;
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

        $recipients = [$project->owner->email, 'morionstone@gmail.com'];
        Mail::to($recipients)->send(
            new MailProjectCreated($project)
        );

        return redirect('home');
    }

    public function contact(){
        $data = request()->validate([
            'name' => ['required','min:3'],
            'phone' => ['required'],
        ]);

        $data['message'] = request('message');
        session()->flash('message_mail_sent', 'Your message has been sent!');

        Mail::to('morionstone@gmail.com')->send(
            new MailContactUs($data)
        );
        return redirect('/');
    }

    public function show(Project $project){
        $this->authorize('update', $project);
        return view('projects.show', compact('project'));
    }

    public function edit(Project $project){
        $this->authorize('update', $project);
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
    public function create_without_register(){
        return view('projects.create_without_register');
    }
    public function store_create_without_register(){

        $attributes = request()->validate([
            'title' => ['required','min:3'],
            'type' => ['required'],
            'description' => [],
            'author_name' => ['required'],
            'author_phone' => ['required'],
        ]);
        $attributes['color'] = implode(",", request('color'));

        $project = ProjectWithoutRegister::create($attributes);

        session()->flash('message_pr_wr', \Lang::getFromJson('project.project_without_register_created_message'));

        $recipients = [ 'morionstone@gmail.com'];
        Mail::to($recipients)->send(
            new MailProjectWithoutRegisterCreated($project)
        );


        return back();
    }
}
