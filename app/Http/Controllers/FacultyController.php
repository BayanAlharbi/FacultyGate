<?php

namespace App\Http\Controllers;

use App\Faculty;
use App\ContactInfo;
use App\DemographicInfo;
use CreateContactInfoTable;
use App\EducationalBackground;
use Illuminate\Http\Request;
use Illuminate\Http\Input;

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
        $faculty->english_name = $request->englishName;
        $faculty->arabic_name = $request->arabicName;
        $faculty->badge = $request->badge;
        $faculty->academic_rank = $request->academicRank;
        $faculty->admin_position = $request->adminPosition;
        $faculty->status = $request->status;
        $faculty->full_time = $request->fullTime;
        $faculty->joining_date = $request->joiningDate;
        $faculty->promotion_date = $request->promotionDate;
        $faculty->save();

        $demographicInfo = new DemographicInfo();
        $demographicInfo->faculty_id = $faculty->id;
        $demographicInfo->nationality = $request->nationality;
        $demographicInfo->national_id = $request->nationalId;
        $demographicInfo->gender = $request->gender;
        $demographicInfo->marital_status = $request->maritalStatus;
        $demographicInfo->date_of_birth = $request->dateOfBirth;
        $demographicInfo->save();

        $contact = new ContactInfo();
        $contact->faculty_id = $faculty->id;
        $contact->cell_phone = $request->cellPhone;
        $contact->pager_number = $request->pagerNumber;
        $contact->extension = $request->extension;
        $contact->ngha_email = $request->nghaEmail;
        $contact->ksauhs_email = $request->ksauhsEmail;
        $contact->personal_email = $request->personalEmail;
        $contact->save();

        //  $education = new EducationalBackground();
        // $input = Input::all();
        // $condition = $input['name'];
        // foreach ($condition as $key => $condition) {
        //     $education = new EducationalBackground();
        //     $education->faculty_badge = $input['badge'][$key];
        //     $education->subspecialty_field = $input['subspecialty_field'][$key];
        //     $education->degree_name = $input['degree_name'][$key];
        //     $education->graduate_institution = $input['graduate_institution'][$key];
        //     $education->year = $input['year'][$key];
        //     $education->save();
        // }
        $education = new EducationalBackground();
        $education->faculty_id = $faculty->id;
        $education->major_field = $request->majorField;
        $education->subspecialty_field = $request->subspecialtyField;
        $education->degree_name = $request->degreeName;
        $education->graduate_institution = $request->graduateInstitution;
        $education->year = $request->year;
        $education->save();

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
        // return $faculty->EducationalBackground;
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
        $faculty->arabic_name = $request->arabicName;
        $faculty->english_name = $request->englishName;
        $faculty->badge = $request->badge;
        $faculty->academic_rank = $request->academicRank;
        $faculty->admin_position = $request->adminPosition;
        $faculty->status = $request->status;
        $faculty->full_time = $request->fullTime;
        $faculty->joining_date = $request->joiningDate;
        $faculty->promotion_date = $request->promotionDate;
        //contact info 
        $faculty->ContactInfo->cell_phone = $request->cellPhone;
        $faculty->ContactInfo->pager_number = $request->pagerNumber;
        $faculty->ContactInfo->extension = $request->extension;
        $faculty->ContactInfo->ngha_email = $request->nghaEmail;
        $faculty->ContactInfo->ksauhs_email = $request->ksauhsEmail;
        $faculty->ContactInfo->personal_email = $request->personalEmail;
        //demographic info
        $faculty->DemographicInfo->nationality = $request->nationality;
        $faculty->DemographicInfo->national_id = $request->nationalId;
        $faculty->DemographicInfo->gender = $request->gender;
        $faculty->DemographicInfo->marital_status = $request->maritalStatus;
        $faculty->DemographicInfo->date_of_birth = $request->dateOfBirth;
        //educational background 
        foreach ($faculty->EducationalBackground as $edu) {
            $edu->major_field = $request->majorField;
            $edu->subspecialty_field = $request->subspecialtyField;
            $edu->degree_name = $request->degreeName;
            $edu->graduate_institution = $request->graduateInstitution;
            $edu->year = $request->year;
            $edu->save();
        }
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
