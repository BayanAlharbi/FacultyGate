<?php

namespace App\Http\Controllers;

use App\Research;
use App\Faculty;
use App\Community;
use Illuminate\Http\Request;

class ResearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $researches = Research::paginate(10);
        return view('research.index', compact('researches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        $faculties = Faculty::get();
        return view('research.create', compact('faculties'));
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
        $create = Research::create($request->all());
        $success = $create ? $request->session()->flash('success', 'research has been added!') : $request->session()->flash('errors', 'Oops! :(');
        return redirect('/research')->with($success);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $faculty = Faculty::where('id', '=', $id)->get();
        $research = Research::find($id);
        $communities = Community::where('faculty_id', '=', $id)->get();
        //return $research;
        return view('research.show', compact('research', 'faculty', 'communities'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $research = Research::find($id);
        $faculties = Faculty::get();

        return view('research.edit', compact('research', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        //
        $research = Research::find($id);
        $research->faculty_id = $request->facultyId;
        $research->pbl = $request->pbl;
        $research->research_proposal_supervised = $request->research_proposal_supervised;
        $research->research_proposal_cosupervised = $request->research_proposal_cosupervised;
        $research->irb_approval = $request->irb_approval;
        $research->research_presentation = $request->research_presentation;
        $research->publication = $request->publication;
        $research->student_involvement = $request->student_involvement;
        $research->save();


        return redirect('/research')->with('success', 'research has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Research  $research
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $research = Research::findOrfail($id);
        $research->destroy($id);
        return redirect('/research')->with('success', 'research has been deleted');
    }
}
