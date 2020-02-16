<?php

namespace App\Http\Controllers;

use App\Community;
use App\Faculty;
use Illuminate\Http\Request;

class CommunityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $communities = Community::paginate(10);
        return view('community.index', compact('communities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $faculties = Faculty::get();
        return view('community.create', compact('faculties'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   <!-- event_name,event_date, target_audience,participated_students,participated_faculties-->
        $community = new Community();
        $community->event_name = $request->eventName;
        $community->event_date = $request->eventDate;
        $community->target_audience = $request->targetAudience;
        $community->participated_students = $request->participatedStudents;
        $community->participated_faculties = $request->participatedFaculties;
        $community->faculty_id = $request->faculty_id;
        // return $request;
        $community->save();

        return redirect('/community')->with('success', 'community activity has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $community = Community::findOrfail($id);
        $faculties = Faculty::get();
        return view('community.show', compact('community', 'faculties'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $community = Community::find($id);
        $faculties = Faculty::get();
        return view('community.edit', compact('community', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // 
        $community = Community::find($id);
        $community->faculty_id = $request->facultyId;
        $community->event_name = $request->eventName;
        $community->event_date = $request->eventDate;
        $community->target_audience = $request->targetAudience;
        $community->participated_students = $request->participatedStudents;
        $community->participated_faculties = $request->participatedFaculties;
        $community->save();

        return redirect('/community')->with('success', 'community activity has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $community = Community::findOrfail($id);
        $community->destroy($id);
        return redirect('/community')->with('success', 'community activity has been deleted');
    }
}
