<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Fixer;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.forms.apply');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   

        /**
         * requid only for project title and head
         */
        $this->validate($request, [
            'project_title' => 'required|string|max:255',
            'purpose' => 'required|string',
            'crew_number' => 'required',
            'project_title' => 'required|string',
            'head' => 'required|string|max:255',
            'head_address' => 'required|string|max:255',
            'head_phone' => 'required|string|max:255',
            'head_email' => 'required|string|email|'
            // 'production_date' => 'required|date',
            
        ]);
            
        // if($validator->fails()) {
        //     return Redirect::back()->withErrors($validator);
        // }
        
        //
        // return $request->all();
        $project = new Project;
        $project->title = $request->project_title;
        $project->purpose = $request->purpose;
        $project->production_date = $request->production_date;
        // $project->accomodation = $request->project_title;
        $project->crew_number = $request->crew_number;
        $project->save();
        //for fixer 
        $fixer = new Fixer([
            // 'project_id'    =>$project->id,
            'fixer'         =>$request->fixer,
            'fixer_address' =>$request->fixer_address,
            'fixer_phone'   =>$request->fixer_phone,
            'fixer_email'   =>$request->fixer_email,
            'counterpart'   =>$request->counterpart,
            'counterpart_address'   =>$request->counterpart_address,
            'counterpart_phone'   =>$request->counterpart_phone,
            'counterpart_email'   =>$request->counterpart_email
        ]);

        $project->fixer()->save($fixer);
  
        // return $project;
        
        // return redirect()->route('step1.edit', [$project->id]);
        
        // return redirect("one/{$project->id}/edit");

        // return redirect('one')->with('message', 'State saved correctly!!!');;
        return redirect()->route('one.form', $project->id);
        
        // return redirect()->route('one.show',[$project->id]);
        // return redirect()->route('step1.edit',[$project->id])->withErrors($validator);


        // return redirect()->action(
        //     'OneController@edit', ['id' => $project->id]
        // );
        // return \Redirect::route('one', $project->id)->with('message', 'State saved correctly!!!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
