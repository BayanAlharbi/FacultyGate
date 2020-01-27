<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\ContactInfo;
use App\DemographicInfo;
use CreateContactInfoTable;
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
        $faculty->english_name = $request->En_name;
        $faculty->arabic_name = $request->Ar_name;
        $faculty->badge = $request->badge;
        $faculty->academic_rank = $request->academic_rank;
        $faculty->admin_position = $request->admin_position;
        $faculty->joining_date = $request->joining_date;
        $faculty->promotion_date = $request->promotion_date;
        $faculty->save();

        $demographicInfo = new DemographicInfo();
        $demographicInfo->faculty_badge = $request->badge;
        $demographicInfo->nationality = $request->nationality;
        $demographicInfo->national_id = $request->national_id;
        $demographicInfo->gender = $request->gender;
        $demographicInfo->marital_status = $request->marital_status;
        $demographicInfo->date_of_birth = $request->date_of_birth;
        $demographicInfo->save();

        $contact = new ContactInfo();
        $contact->faculty_badge = $request->badge;
        $contact->cell_phone = $request->cell_phone;
        $contact->pager_number = $request->pager_number;
        $contact->extension = $request->extension;
        $contact->ngha_email = $request->ngha_email;
        $contact->ksauhs_email = $request->ksauhs_email;
        $contact->personal_email = $request->personal_email;
        $contact->save();

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
        $faculty->badge = $request->badge;
        $faculty->academic_rank = $request->academic_rank;
        $faculty->admin_position = $request->admin_position;
        $faculty->joining_date = $request->joining_date;
        $faculty->promotion_date = $request->promotion_date;
        $faculty->ContactInfo->cell_phone = $request->cell_phone;
        $faculty->ContactInfo->pager_number = $request->pager_number;
        $faculty->ContactInfo->extension = $request->extension;
        $faculty->ContactInfo->ngha_email = $request->ngha_email;
        $faculty->ContactInfo->ksauhs_email = $request->ksauhs_email;
        $faculty->ContactInfo->personal_email = $request->personal_email;
        $faculty->DemographicInfo->nationality = $request->nationality;
        $faculty->DemographicInfo->national_id = $request->national_id;
        $faculty->DemographicInfo->gender = $request->gender;
        $faculty->DemographicInfo->marital_status = $request->marital_status;
        $faculty->DemographicInfo->date_of_birth = $request->date_of_birth;
        $faculty->save();
        $faculty->ContactInfo->save();
        $faculty->DemographicInfo->save();
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
        $faculty->destroy($id);
        return redirect('/faculty')->with('success', 'faculty has been deleted');
    }
}
