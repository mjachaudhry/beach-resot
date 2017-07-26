<?php

namespace App\Http\Controllers\admin;

use App\Project;
use App\Service;
use App\Project_service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectsRequestForm;
//use Illuminate\Support\Facades\Input;

class ProjectsController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {  
        $projects = Project::where('status', '!=', '0')->orWhereNull('status')->orderby('id', 'desc')->get();
        return view('admin.projects.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $projects = new Project;
        $services = Service::where('status', '!=', '0')->orWhereNull('status')->get();
        return view('admin.projects.create', ['projects' => $projects ,'services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectsRequestForm $request) {
        
        $services = $request->get('service');
        //print_r($expression.$select);
        

        $projects = new Project;
        
        $projects->name = $request->get('name');
        $projects->type = $request->get('type');
        $projects->comments = $request->get('comments');
        $projects->slug = str_slug($request->get('name'), '-');

        if (!(Project::where('slug', $projects->slug)->where("id", "!=", $projects->id)->get()->first())){
            
            $projects->save();

        if($projects->id > 0) {
            
            foreach($services as $key=>$service){
                $project_service = new Project_service;

                $project_service->project_id = $projects->id;
                $project_service->service_id = $service;
                $project_service->save();
            }
            
        }

        } else {
            return redirect()->back()->with('error', 'Project Name already exists')->withInput();
//            
        }
        if (!$projects->save()) {
            $errors = $projects->getErrors();
            return redirect()->action('admin\ProjectsController@create')->with('errors', $errors)->withInput();
        }

        return redirect()
                        ->action('admin\ProjectsController@index')
                        ->with('message', $projects->name . ' - Project is created!');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rooms  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room) {
       
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rooms  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project) {
        //$projects = Rooms::find($projects->id);
        $services = Service::where('status', '!=', '0')->orWhereNull('status')->get();

        $selected_services = Project_service::where(["project_id" => $project->id])->pluck('service_id')->toArray();
        return view('admin.projects.edit', ['projects' => $project, 'selected_services'=>$selected_services,'services'=>$services]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rooms  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectsRequestForm $request, Project $project) {
        
        $project->name = $request->get('name');
        $project->type = $request->get('type');
        $project->comments = $request->get('comments');
        $project->slug = str_slug($request->get('name'), '-');

        if (!(Project::where('slug', $project->slug)->where("id", "!=", $project->id)->get()->first())){
            
            $project->save();

            if($project->id > 0) {
                Project_service::where('project_id',$project->id)->delete();
                $services = $request->get('service');
                foreach($services as $key=>$service){
                    $project_service = new Project_service;

                    $project_service->project_id = $project->id;
                    $project_service->service_id = $service;
                    $project_service->save();
                }
                
            }

            if (!$project->save()) {
                $errors = $room->getErrors();
                return Redirect::to('_admincon/rooms/' . $project->id . '/edit')->with('errors', $errors)->withInput();
            }
            return redirect()
                            ->action('admin\ProjectsController@index')
                            ->with('message', $project->name . ' - Project updated successfully!');
        } else {
            return redirect()->back()->with('error', 'Project Name already exists')->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rooms  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project) {
        // delete
        //$project->delete();
        $ddate = date('Y-m-d H:i:s');
        Project::where('id', $project->id)->update(['deleted_at' => $ddate , 'status' => '0']);
        return redirect()
                        ->action('admin\ProjectsController@index')
                        ->with('message', $project->name . ' deleted successfully!');
    }

}
