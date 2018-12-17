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
        
        return "dsd";
        //
    }

    public function form($id){
        
        return view('pages.forms.timetable', compact('id'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('pages.forms.timetable_modals._form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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

    public function foo(){
     return '1';   
    }

    public function dataTable()
    {
    
        $model = TimeTable::query();
        return DataTables::of($model)
            ->addColumn('action', function ($model) {
                return view('pages.forms.timetable_modals._action', [
                    'model' => $model,
                    'url_show' => route('timetable.show', $model->id),
                    'url_edit' => route('timetable.edit', $model->id),
                    'url_destroy' => route('timetable.destroy', $model->id)
                ]);
            })
            ->addIndexColumn()
            ->rawColumns(['action'])
            ->make(true);

        // return 1;
    }
}
