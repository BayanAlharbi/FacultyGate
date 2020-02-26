<?php

namespace App\Http\Controllers;

use App\Community;
use App\Faculty;
use App\Research;
use Illuminate\Http\Request;
use App\Http\Requests\CommunityRequest;
use App\Http\Controllers\array_except;

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
    public function store(CommunityRequest $request)
    {
        $create = Community::create($request->all());
        $success = $create ? $request->session()->flash('success', 'community activity has been added!') : $request->session()->flash('errors', 'Oops! :(');
        return redirect('/community')->with($success);
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
        $researches = Research::where('faculty_id', '=', $id)->get();
        $community = Community::find($id);
        return view('community.show', compact('community', 'researches'));
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
        $faculties = Faculty::select('id', 'english_name')->get();
        //return $faculties;
        return view('community.edit', compact('community', 'faculties'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(CommunityRequest $request, $id)
    {
        //
        $request = $request->except(['_token', '_method']);
        Community::where('id', $id)->update($request);
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
