<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Project;

class TaskController extends Controller
{
    public function index(){
        return response(Task::select('id','project_id','title','status')->get(),200);
    }

    public function store(Request $request){
        $projects = Project::select(['id','title'])->get();
        $task = Task::create($request->all());
        return response(compact('task','project'),201);
    }

    public function update($id,Request $request){
        $task = Task::find($id);
        $task->update($request->all());
        return response('Success',201);
    }

    public function delete($id){
        $task = Task::find($id);
        $task->delete();
        return response('deleted',201);
    }
}
