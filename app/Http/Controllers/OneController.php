<?php

namespace App\Http\Controllers;

use App\One;
use Illuminate\Http\Request;
use App\PassportTravel;

class OneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "index:";
    }

    public function form($id)
    {
        //
        return view('pages.forms.one', compact('id'));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "na";
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
            "sponsor_letter" => "required|mimes:pdf",
            "company_profile" => "mimes:pdf",
            "local_patner" => "mimes:pdf"
        ]);
        
        if ($request->hasFile('sponsor_letter')){
          
            // return $request->all();
            $input1 = $request->all();
            $nameRandom = str_random(14);
            $input1['sponsor_letter'] = '/upload/files/'.str_slug($nameRandom, '-').'_sponsor_letter.'.$request->sponsor_letter->getClientOriginalExtension();
            $request->sponsor_letter->move(public_path('/upload/files/'), $input1['sponsor_letter']);

        }
        
        if ($request->hasFile('company_profile')){
          
            // return $request->all();
            $input2 = $request->all();
            $nameRandom = str_random(14);
            $input2['company_profile'] = '/upload/files/'.str_slug($nameRandom, '-').'_company_profile.'.$request->company_profile->getClientOriginalExtension();
            $request->company_profile->move(public_path('/upload/files/'), $input2['company_profile']);
        }
        
        if ($request->hasFile('local_patner')){
          
            // return $request->all();
            $input3 = $request->all();
            $nameRandom = str_random(14);
            $input3['local_patner'] = '/upload/files/'.str_slug($nameRandom, '-').'_local_patner.'.$request->local_patner->getClientOriginalExtension();
            $request->local_patner->move(public_path('/upload/files/'), $input3['local_patner']);

        }

        // $save = One::create($request->all());
          // return $request->all();
          $one = new One;
          $one->project_id = $request->project_id;
          $one->sponsor_letter = $input1['sponsor_letter'];
          $one->company_profile = $input2['company_profile'];
          $one->local_patner = $input3['local_patner'];
          $one->save();

        // return $one;
        return redirect()->route('crews.form', $request->project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\One  $one
     * @return \Illuminate\Http\Response
     */
    public function show(One $one)
    {
        //
        return"oh :".$one;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\One  $one
     * @return \Illuminate\Http\Response
     */
    public function edit(One $one)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\One  $one
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, One $one)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\One  $one
     * @return \Illuminate\Http\Response
     */
    public function destroy(One $one)
    {
        //
    }
}
