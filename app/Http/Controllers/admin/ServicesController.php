<?php

namespace App\Http\Controllers\admin;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServicesRequestForm;

class ServicesController extends Controller
{
 

    public function index()
    {
        $services = Service::where('status', '!=', '0')->orWhereNull('status')->get();
        return view('admin.services.index', ['services'=>$services]);
    }

 
    public function create()
    {
        $services = new Service;
        return view('admin.services.create', ['service'=>$services]);
    }

 
    public function store(ServicesRequestForm $request)
    {
        $service = new Service;
        $service->title = $request->get('title');
        
        $slug = str_slug($service->title, "-");
        $service->slug = $slug;
        $service->save();
                return redirect()
                ->to('/admincon/services/')
                ->with('message', $service->title. ' - Service Created Successfully');
    }

 
    public function show(Service $service)
    {
        //
    }

 
    public function edit(Service $service )
    {
        return view('admin.services.edit', ['service'=>$service]);
    }

 
    public function update(ServicesRequestForm $request, Service $service)
    {
        $service->title = $request->get('title');
        
        $slug = str_slug($service->title, "-");
        $service->slug = $slug;
        $service->save();
                return redirect()
                ->to('/admincon/services/')
                ->with('message', $service->title. ' - Service Updated Successfully');
    }
    

    public function destroy(Service $service)
    {
        $ddate = date('Y-m-d H:i:s');      
        //$service->delete();
        Service::where('id', $service->id)->update(['deleted_at' => $ddate , 'status' => '0']);
        return redirect()
               ->to('/admincon/services/')
               ->with('message', $service->name. ' - Service Deleted Successfully');
    }


}
