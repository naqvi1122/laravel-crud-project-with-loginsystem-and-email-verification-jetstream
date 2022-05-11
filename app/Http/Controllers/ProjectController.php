<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view("about");
    }
    public function contact()
    {
        return view("contact");
    }
    public function display()
    {
        $url=url('/shah');
        $data=compact('url');
        return view("display")->with($data);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        print_r($request->all());
        $project =new project;
        $project->name=$request['name'];
        $project->email=$request['email'];
        $project->phone=$request['phone'];
        $project->msg=$request['msg'];
        $project->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $project=project::all();
        $data = compact('project');
        return view('display')->with($data);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        $info = project::find($id);
        if(is_null($info))
        return redirect('display');
        else{
            $url=url('/project/update')."/".$id;
        $data = compact('info','url');
        return view('my')->with($data);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id , Request $request)
    {
        $project = project::find($id);
        $project->name=$request['name'];
        $project->email=$request['email'];
        $project->phone=$request['phone'];
        $project->msg=$request['msg'];
        $project->save();
        return redirect('display');

        
    }

  

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        project::find($id)->delete();
        return redirect()->back();
    }
    public function index(Request $request)
    {
        
    }





}
