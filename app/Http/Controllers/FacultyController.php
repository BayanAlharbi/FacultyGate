<?php

namespace App\Http\Controllers;

use App\Faculty;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $faculties = Faculty::all();
        return view('faculty.index', compact('faculties'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('faculty.create');
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
        $faculty = new Faculty();
        $faculty->arabic_name = $request->Ar_name;
        $faculty->english_name = $request->En_name;
        $faculty->badge = $request->badge;
        $faculty->academic_rank = $request->academic_rank;
        $faculty->admin_position = $request->admin_position;
        $faculty->joining_date = $request->joining_date;
        $faculty->promotion_date = $request->promotion_date;
        $faculty->save();
        return redirect('/faculty')->with('success', 'faculty has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $faculty =  Faculty::findOrfail($id);

        return view('faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $faculty = Faculty::find($id);
        return view('faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $faculty = Faculty::find($id);
        $faculty->arabic_name = $request->arabic_name;
        $faculty->english_name = $request->english_name;
        $faculty->save();
        return redirect('/faculty')->with('success', 'faculty has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Faculty  $faculty
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $faculty = Faculty::findOrfail($id);
        $faculty->delete();
        return redirect('/faculty')->with('success', 'faculty has been deleted');
    }
}
