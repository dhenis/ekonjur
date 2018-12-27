<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DataTables;
use App\TimeTable;


class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return var_dump($_POST);
        //
        // return 1;
    }

    public function form($project_id){
        
        return view('pages.forms.timetable.timetable', compact('project_id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        // return view('pages.forms.timetable_modals._form',compact('id'));
        return "create";
    }
    
    public function modalCreate($project_id)
    {
        //

        $model = new TimeTable();
        

        return view('pages.forms.timetable.form',compact('project_id','model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'activity' => 'required|string'
        ]);

        $model = TimeTable::create($request->all());
        return $model;
        // return "store";
        // return $request;
        //
    }

    public function modalStore(Request $request)
    {

        $this->validate($request, [
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'activity' => ''
        ]);

        $model = TimeTable::create($request->all());
        return $model;
            // return $request->all();
        //
    }

    public function modalUpdate(Request $request, $id)
    {

        $this->validate($request, [
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'activity' => ''
        ]);

        // $model = TimeTable::create($request->all());
        // return $model;

        $model = TimeTable::findOrFail($request->id);

        $model->update($request->all());
        
        // return $id;

        return $request->all();
        //
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
    public function edit($project_id)
    {
        $model = TimeTable::findOrFail($project_id);           

        return view('pages.forms.timetable.form',compact('project_id',  'model'));


    }

    public function modalEdit($project_id, $id)
    {
        $model = TimeTable::findOrFail($id);           

        return view('pages.forms.timetable.form',compact('project_id', 'id', 'model'));


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
          $this->validate($request, [
            'date' => 'required|date',
            'location' => 'required|string|max:255',
            'activity' => '' . $id
        ]);

        $model = TimeTable::findOrFail($id);

        $model->update($request->all());
        return $model;
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


    public function modalDestroy($project_id, $id)
    {
        
        $model = TimeTable::findOrFail($id);
        $model->delete();
        // return $model;
        
    }

    public function foo(){
     return '1';   
    }

    public function dataTable($project_id)
    {

        // $model = TimeTable::findOrFail($project_id);
        $model = TimeTable::query()->where('project_id',$project_id);
        // dd($model);
        // return var_dump($model);
        // $model = TimeTable::table('time_tables')->get();
        // return var_dump($model)->where('project_id',$project_id);
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('layouts.modals_layout._action', [
                    'model' => $model,
                    'url_show' => route('timetable.show', $model->id),
                    'url_edit' => route('timetable.modalEdit',['project_id'=> $model->project_id, 'id' => $model->id]),
                    'url_destroy' => route('timetable.modalDestroy', ['project_id'=> $model->project_id, 'id' => $model->id])
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);

    }
}
