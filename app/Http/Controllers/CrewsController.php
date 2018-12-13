<?php

namespace App\Http\Controllers;

use App\Crews;
use App\PassportTravel;
use App\PersonalDetailHistory;
use App\FamilyFriends;
use App\EducationEmployment;

use Illuminate\Http\Request;

class CrewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return '1';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return "aa";
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
        // dd($request);

        $crews = Crews::create($request->all());
        return $crews;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Crews  $crews
     * @return \Illuminate\Http\Response
     */
    public function show(Crews $crews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Crews  $crews
     * @return \Illuminate\Http\Response
     */
    public function edit(Crews $crews)
    {
        //
    }

    public function form($id)
    {
        // need user validation befor peform this
        //
        return view('pages.forms.crews', compact('id'));
        // return "form2";

        
    }

    public function details($id)
    {
        // need user validation befor peform this
        //
        // return view('pages.forms.crews', compact('id','parts'));
        // return "form2";
        return view('pages.forms.crews_details.main_menu', compact('id'));
        
    }
    
    public function passportTravel($id)
    {
        // need user validation befor peform this
        //
        
        return view('pages.forms.crews_details.passportTravel', compact('id'));
        // return "1";
    }

    public function PassportTravelstore(Request $request)
    {
        //  
        // dd($request);
        $save = PassportTravel::create($request->all());
        return redirect()->route('crews.personalDetailHistory',['id'=>$request->project_id]);
        // return redirect()->route('one.form', $project->id);
        // $crews = Crews::create($request->all());
        // return $save;
    }

    public function PersonalDetailHistoryStore(Request $request)
    {
        
        $save = PersonalDetailHistory::create($request->all());
        return $save;
    }

    public function PersonalDetailHistory($id)
    {
        // need user validation befor peform this
        //
        
        return view('pages.forms.crews_details.PersonalDetailHistory', compact('id'));
        // return "2";
    }

    public function familyFriends($id)
    {
        // need user validation befor peform this
        //
        
        return view('pages.forms.crews_details.familyFriends', compact('id','parts'));
        // return "3";
    }

    public function familyFriendsStore(Request $request)
    {
        
        
        
        // return view('pages.forms.crews_details.passport_travel', compact('id','parts'));
        // return "3 stire";
        
        $save = FamilyFriends::create($request->all());
       
        return $save;


    }

    public function educationEmployment($id)
    {
        // need user validation befor peform this
        //
        
        // return view('pages.forms.crews_details.passport_travel', compact('id','parts'));
        // return "4";
        return view('pages.forms.crews_details.educationEmployment',compact('id'));
    }

    public function educationEmploymentStore(Request $request)
    {
        // need user validation befor peform this
        //
        
        // return view('pages.forms.crews_details.passport_travel', compact('id','parts'));
        // return "4";

        // $save = PersonalDetailHistory::create($request->all());
        
        $save = EducationEmployment::create($request->all());

        return $save;
        
        // return $save;

    }

    public function medical($id)
    {
        // need user validation befor peform this
        //
        
        // return view('pages.forms.crews_details.passport_travel', compact('id','parts'));
        return "5";
    }

    
    
    public function detailsdb($id, $parts, Crews $crews)
    {
        // need user validation befor peform this
        //
        $crew = Crews::find(2);
        return view('pages.forms.crews', compact('id','parts','crew'));
        // return "form2";

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Crews  $crews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Crews $crews)
    {
        //
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Crews  $crews
     * @return \Illuminate\Http\Response
     */
    public function destroy(Crews $crews)
    {
        //
    }
}
