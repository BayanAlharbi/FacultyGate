@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ Faculty Member }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('faculty.update', $faculty->id) }}">
                        @method('PATCH')
                        @csrf
                        <!--  -->
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="englishName">{{ English Name:}}</label>
                                    <input type="text" class="form-control" name="englishName" value="{{ $faculty->english_name }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="arabicName">{{Arabic Name:}}</label>
                                    <input type="text" class="form-control" name="arabicName" value="{{ $faculty->arabic_name }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="badge">{{Badge}}</label>
                                    <input id="badge" class="form-control" type="text" name="badge" value="{{ $faculty->badge }}">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="academicRank">{{ Academic Rank}}</label>
                                    <input type="text" class="form-control" name="academicRank" value="{{ $faculty->academic_rank }}" />
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="adminPosition">{{ Admin Position }}</label>
                                    <input type="text" class="form-control" name="adminPosition" value="{{ $faculty->admin_position }}" />
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="status">{{ Status }}</label>
                                    <select class="form-inline" class="btn-primary dropdown-toggle" name="status" class="js-example-basic-multiple">
                                        <option class="dropdown-item" value="active" {{ $faculty->status  == 'active' ? 'selected' : '' }}>Active</option>
                                        <option class="dropdown-item" value="retried" {{ $faculty->status  == 'retried' ? 'selected' : '' }}>Retried</option>
                                        <option class="dropdown-item" value="resigned" {{ $faculty->status  == 'resigned' ? 'selected' : '' }}>Resigned</option>
                                        <option class="dropdown-item" value="transfer" {{ $faculty->status  == 'transfer' ? 'selected' : '' }}>Transfer</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="joiningDate">{{Joining Date}}</label>
                                    <input type="date" class="form-control" name="joiningDate" value="{{ $faculty->joining_date }}" />
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="promotionDate">{{ Promotion Date }}</label>
                                    <input type="date" class="form-control" name="promotionDate" value="{{ $faculty->promotion_date }}" />
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="lastWorkingDate">{{Last Working Date}}</label>
                                    <input type="date" class="form-control" name="lastWorkingDate" value="{{ $faculty->last_working_date }}" />
                                </div>
                                <div class="form-group col-md-3">
                                    <label>Is faculty full-time?</label>
                                    <select class="form-control" name="fullTime" id="fullTime">
                                        <option value="1" {{ $faculty->full_time  == '1' ? 'selected' : '' }}>True</option>
                                        <option value="0" {{ $faculty->full_time  == '0' ? 'selected' : '' }}>False</option>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                        <!-- full time  -->
                        @if($faculty->full_time =='1')
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="yearlyAppraisal">{{Yearly Appraisal}}</label>
                                    <input type="number" class="form-control" name="yearlyAppraisal" value="{!!$faculty->FullTime->yearly_appraisal !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="businessLeave">{{Prof. and Business Leave Attend}}</label>
                                    <input type="number" class="form-control" name="businessLeave" value="{!!$faculty->FullTime->business_leave !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="administrativeDuties">{{ Administrative Duties }}</label>
                                    <input type="text" class="form-control" name="administrativeDuties" value="{!!$faculty->FullTime->administrative_duties !!}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="numberOfInvigilator">{{ Number Of Invigilator}}</label>
                                    <input type="number" class="form-control" name="numberOfInvigilator" value="{!!$faculty->FullTime->number_of_invigilator !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="totalInvigilatorHour">{{ Total Invigilator Hour}}</label>
                                    <input type="number" class="form-control" name="totalInvigilatorHour" value="{!!$faculty->FullTime->total_invigilator_hour !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="committeeMembership">{{Committee Membership}}</label>
                                    <input type="text" class="form-control" name="committeeMembership" value="{!!$faculty->FullTime->committee_membership !!}" />
                                </div>
                            </div>
                        </fieldset>
                        @endif

                        <!-- demographic Info  -->
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nationality">{{Nationality }}</label> <br>
                                    <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                    <select value="selected" selected name="nationality" class="js-example-basic-multiple">
                                        <option value="american" {{ $faculty->DemographicInfo->nationality == 'american' ? 'selected' : '' }}>American</option>
                                        <option value="andorran" {{ $faculty->DemographicInfo->nationality == 'andorran' ? 'selected' : '' }}>Andorran</option>
                                        <option value="angolan" {{ $faculty->DemographicInfo->nationality == 'angolan' ? 'selected' : '' }}>Angolan</option>
                                        <option value="antiguans" {{ $faculty->DemographicInfo->nationality == 'antiguans' ? 'selected' : '' }}>Antiguans</option>
                                        <option value="argentinean" {{ $faculty->DemographicInfo->nationality == 'argentinean' ? 'selected' : '' }}>Argentinean</option>
                                        <option value="armenian" {{ $faculty->DemographicInfo->nationality == 'armenian' ? 'selected' : '' }}>Armenian</option>
                                        <option value="australian" {{ $faculty->DemographicInfo->nationality == 'australian' ? 'selected' : '' }}>Australian</option>
                                        <option value="austrian" {{ $faculty->DemographicInfo->nationality == 'austrian' ? 'selected' : '' }}>Austrian</option>
                                        <option value="azerbaijani" {{ $faculty->DemographicInfo->nationality == 'azerbaijani' ? 'selected' : '' }}>Azerbaijani</option>
                                        <option value="bahamian" {{ $faculty->DemographicInfo->nationality == 'bahamian' ? 'selected' : '' }}>Bahamian</option>
                                        <option value="bahraini" {{ $faculty->DemographicInfo->nationality == 'bahraini' ? 'selected' : '' }}>Bahraini</option>
                                        <option value="bangladeshi" {{ $faculty->DemographicInfo->nationality == 'Bangladeshi' ? 'selected' : '' }}>Bangladeshi</option>
                                        <option value="british" {{ $faculty->DemographicInfo->nationality == 'British' ? 'selected' : '' }}>British</option>
                                        <option value="canadian" {{ $faculty->DemographicInfo->nationality == 'Canadian' ? 'selected' : '' }}>Canadian</option>
                                        <option value="cape verdean" {{ $faculty->DemographicInfo->nationality == 'Cape Verdean' ? 'selected' : '' }}>Cape Verdean</option>
                                        <option value="central african" {{ $faculty->DemographicInfo->nationality == 'Central African' ? 'selected' : '' }}>Central African</option>
                                        <option value="chadian" {{ $faculty->DemographicInfo->nationality == 'Chadian' ? 'selected' : '' }}>Chadian</option>
                                        <option value="chinese" {{ $faculty->DemographicInfo->nationality == 'Chinese' ? 'selected' : '' }}>Chinese</option>
                                        <option value="ecuadorean" {{ $faculty->DemographicInfo->nationality == 'Ecuadorean' ? 'selected' : '' }}>Ecuadorean</option>
                                        <option value="egyptian" {{ $faculty->DemographicInfo->nationality == 'Egyptian' ? 'selected' : '' }}>Egyptian</option>
                                        <option value="equatorial guinean" {{ $faculty->DemographicInfo->nationality == 'Equatorial Guinean' ? 'selected' : '' }}>Equatorial Guinean</option>
                                        <option value="eritrean" {{ $faculty->DemographicInfo->nationality == 'Eritrean' ? 'selected' : '' }}>Eritrean</option>
                                        <option value="estonian" {{ $faculty->DemographicInfo->nationality == 'Estonian' ? 'selected' : '' }}>Estonian</option>
                                        <option value="ethiopian" {{ $faculty->DemographicInfo->nationality == 'Ethiopian' ? 'selected' : '' }}>Ethiopian</option>
                                        <option value="filipino" {{ $faculty->DemographicInfo->nationality == 'Filipino' ? 'selected' : '' }}>Filipino</option>
                                        <option value="french" {{ $faculty->DemographicInfo->nationality == 'French' ? 'selected' : '' }}>French</option>
                                        <option value="georgian" {{ $faculty->DemographicInfo->nationality == 'Georgian' ? 'selected' : '' }}>Georgian</option>
                                        <option value="german" {{ $faculty->DemographicInfo->nationality == 'German' ? 'selected' : '' }}>German</option>
                                        <option value="ghanaian" {{ $faculty->DemographicInfo->nationality == 'Ghanaian' ? 'selected' : '' }}>Ghanaian</option>
                                        <option value="greek" {{ $faculty->DemographicInfo->nationality == 'Greek' ? 'selected' : '' }}>Greek</option>
                                        <option value="indian" {{ $faculty->DemographicInfo->nationality == 'Indian' ? 'selected' : '' }}>Indian</option>
                                        <option value="indonesian" {{ $faculty->DemographicInfo->nationality == 'Indonesian' ? 'selected' : '' }}>Indonesian</option>
                                        <option value="iraqi" {{ $faculty->DemographicInfo->nationality == 'Iraqi' ? 'selected' : '' }}>Iraqi</option>
                                        <option value="irish" {{ $faculty->DemographicInfo->nationality == 'Irish' ? 'selected' : '' }}>Irish</option>
                                        <option value="italian" {{ $faculty->DemographicInfo->nationality == 'Italian' ? 'selected' : '' }}>Italian</option>
                                        <option value="japanese" {{ $faculty->DemographicInfo->nationality == 'Japanese' ? 'selected' : '' }}>Japanese</option>
                                        <option value="jordanian" {{ $faculty->DemographicInfo->nationality == 'Jordanian' ? 'selected' : '' }}>Jordanian</option>
                                        <option value="kenyan" {{ $faculty->DemographicInfo->nationality == 'Kenyan' ? 'selected' : '' }}>Kenyan</option>
                                        <option value="lebanese" {{ $faculty->DemographicInfo->nationality == 'Lebanese' ? 'selected' : '' }}>Lebanese</option>
                                        <option value="libyan" {{ $faculty->DemographicInfo->nationality == 'Libyan' ? 'selected' : '' }}>Libyan</option>
                                        <option value="malaysian" {{ $faculty->DemographicInfo->nationality == 'Malaysian' ? 'selected' : '' }}>Malaysian</option>
                                        <option value="mauritian" {{ $faculty->DemographicInfo->nationality == 'Mauritian' ? 'selected' : '' }}>Mauritian</option>
                                        <option value="mexican" {{ $faculty->DemographicInfo->nationality == 'Mexican' ? 'selected' : '' }}>Mexican</option>
                                        <option value="moroccan" {{ $faculty->DemographicInfo->nationality == 'Moroccan' ? 'selected' : '' }}>Moroccan</option>
                                        <option value="new zealander" {{ $faculty->DemographicInfo->nationality == 'New Zealander' ? 'selected' : '' }}>New Zealander</option>
                                        <option value="nigerien" {{ $faculty->DemographicInfo->nationality == 'Nigerien' ? 'selected' : '' }}>Nigerien</option>
                                        <option value="north korean" {{ $faculty->DemographicInfo->nationality == 'North Korean' ? 'selected' : '' }}>North Korean</option>
                                        <option value="omani" {{ $faculty->DemographicInfo->nationality == 'Omani' ? 'selected' : '' }}>Omani</option>
                                        <option value="pakistani" {{ $faculty->DemographicInfo->nationality == 'Pakistani' ? 'selected' : '' }}>Pakistani</option>n>
                                        <option value="polish" {{ $faculty->DemographicInfo->nationality == 'Polish' ? 'selected' : '' }}>Polish</option>
                                        <option value="portuguese" {{ $faculty->DemographicInfo->nationality == 'Portuguese' ? 'selected' : '' }}>Portuguese</option>
                                        <option value="qatari" {{ $faculty->DemographicInfo->nationality == 'Qatari' ? 'selected' : '' }}>Qatari</option>
                                        <option value="romanian" {{ $faculty->DemographicInfo->nationality == 'Romanian' ? 'selected' : '' }}>Romanian</option>
                                        <option value="russian" {{ $faculty->DemographicInfo->nationality == 'Russian' ? 'selected' : '' }}>Russian</option>
                                        <option value="rwandan" {{ $faculty->DemographicInfo->nationality == 'Rwandan' ? 'selected' : '' }}>Rwandan</option>
                                        <option value="saint lucian" {{ $faculty->DemographicInfo->nationality == 'Saint Lucian' ? 'selected' : '' }}>Saint Lucian</option>
                                        <option value="salvadoran" {{ $faculty->DemographicInfo->nationality == 'Salvadoran' ? 'selected' : '' }}>Salvadoran</option>
                                        <option value="saudi" {{ $faculty->DemographicInfo->nationality == 'saudi' ? 'selected' : '' }}>Saudi</option>
                                        <option value="scottish" {{ $faculty->DemographicInfo->nationality  == 'Scottish' ? 'selected' : '' }}>Scottish</option>
                                        <option value="singaporean" {{ $faculty->DemographicInfo->nationality == 'Singaporean' ? 'selected' : '' }}>Singaporean</option>
                                        <option value="somali" {{ $faculty->DemographicInfo->nationality == 'Somali' ? 'selected' : '' }}>Somali</option>
                                        <option value="south african" {{ $faculty->DemographicInfo->nationality == 'South African' ? 'selected' : '' }}>South African</option>
                                        <option value="south korean" {{ $faculty->DemographicInfo->nationality == 'South Korean<' ? 'selected' : '' }}>South Korean</option>
                                        <option value="spanish" {{ $faculty->DemographicInfo->nationality == 'Spanish' ? 'selected' : '' }}>Spanish</option>
                                        <option value="sudanese" {{ $faculty->DemographicInfo->nationality == 'Sudanese' ? 'selected' : '' }}>Sudanese</option>
                                        <option value="swedish" {{ $faculty->DemographicInfo->nationality == 'Swedish' ? 'selected' : '' }}>Swedish</option>
                                        <option value="thai" {{ $faculty->DemographicInfo->nationality == 'Thai' ? 'selected' : '' }}>Thai</option>
                                        <option value="tunisian" {{ $faculty->DemographicInfo->nationality == 'Tunisian' ? 'selected' : '' }}>Tunisian</option>
                                        <option value="turkish" {{ $faculty->DemographicInfo->nationality == 'Turkish' ? 'selected' : '' }}>Turkish</option>
                                        <option value="tuvaluan" {{ $faculty->DemographicInfo->nationality == 'Tuvaluan' ? 'selected' : '' }}>Tuvaluan</option>
                                        <option value="ugandan" {{ $faculty->DemographicInfo->nationality == 'Ugandan' ? 'selected' : '' }}>Ugandan</option>
                                        <option value="ukrainian" {{ $faculty->DemographicInfo->nationality == 'Ukrainian' ? 'selected' : '' }}>Ukrainian</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="maritalStatus">{{ Marital Status}}</label> <br>
                                    <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                    <select value="selected" name="maritalStatus" class="js-example-basic-multiple">
                                        <option value="married" {{ $faculty->DemographicInfo->marital_status  == 'married' ? 'selected' : '' }}>married</option>
                                        <option value="single" {{ $faculty->DemographicInfo->marital_status  == 'single' ? 'selected' : '' }}>single</option>
                                        <option value="divorced" {{ $faculty->DemographicInfo->marital_status == 'divorced' ? 'selected' : '' }}>divorced</option>
                                        <option value="separated" {{ ($faculty->DemographicInfo->marital_status == 'separated') ? 'selected' : '' }}>separated</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label value="checked" for="gender">{{Gender}}</label> <br>
                                    <input type="radio" name="gender" value="Male" {{ $faculty->DemographicInfo->gender == 'Male' ? 'checked' : '' }}>Male
                                    <input type="radio" name="gender" value="Female" {{ $faculty->DemographicInfo->gender == 'Female' ? 'checked' : ''}}> Female
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nationalId">{{ National Id}}</label>
                                    <input id="nationalId" class="form-control" type="text" name="nationalId" placeholder="1111111111" value="{!!$faculty->DemographicInfo->national_id !!}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="dateOfBirth">{{ Date of Birth}}</label>
                                    <input id="dateOfBirth" class="form-control" type="date" name="dateOfBirth" placeholder="dd/mm/yyyy" value="{!!$faculty->DemographicInfo->date_of_birth !!}">
                                </div>

                            </div>
                        </fieldset>
                        <!-- contact information -->
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cellPhone">{{ Cell Phone }}</label>
                                    <input type="number" class="form-control" name="cellPhone" value="{!!$faculty->ContactInfo->cell_phone !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="pagerNumber">{{Pager Number}}</label>
                                    <input type="number" class="form-control" name="pagerNumber" value="{{ $faculty->ContactInfo->pager_number }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="extension">{{Extension}}</label>
                                    <input type="number" class="form-control" name="extension" value="{{ $faculty->ContactInfo->extension }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ngha_email">{{NGHA Email }}</label>
                                    <input type="email" class="form-control" name="nghaEmail" value="{{ $faculty->ContactInfo->ngha_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ksauhs_email">{{KSAU-HS Email }}</label>
                                    <input type="email" class="form-control" name="ksauhsEmail" value="{{ $faculty->ContactInfo->ksauhs_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="personal_email">{{Personal Email}}</label>
                                    <input type="email" class="form-control" name="personalEmail" value="{{ $faculty->ContactInfo->personal_email }}" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="border-top my-3"></div>
                        <fieldset>
                            @foreach($faculty->EducationalBackground as $edu)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="majorField">{{ Major Field }}</label>
                                    <input id="majorField" class="form-control" type="text" name="majorField" value="{{ $edu->major_field }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subspecialtyField">{{ Subspecialty Field}}</label>
                                    <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->subspecialty_field}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="subspecialtyField">{{ Degree Name }}</label>
                                    <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->degree_name }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="graduateInstitution">{{Graduated Institution }}</label>
                                    <input id="graduateInstitution" class="form-control" type="text" name="graduateInstitution" value="{{ $edu->graduate_institution }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="year">{{ Graduated Year}}</label>
                                    <input id="year" class="form-control" type="number" name="year" value="{{  $edu->year }}">
                                </div>
                            </div>
                            @endforeach
                        </fieldset>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{Update}}
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<!-- <div class="form-group">
                            <label for="name">Arabic name</label>
                            <input type="text" class="form-control" name="arabic_name" value="{{ $faculty->arabic_name }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">English name</label>
                            <input type="text" class="form-control" name="english_name" value="{{ $faculty->english_name }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Badge</label>
                            <input type="text" class="form-control" name="badge" value="{{ $faculty->badge }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Academic Rank</label>
                            <input type="text" class="form-control" name="academic_rank" value="{{ $faculty->academic_rank }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Admin Position</label>
                            <input type="text" class="form-control" name="admin_position" value="{{ $faculty->admin_position }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Joining Date</label>
                            <input type="date" class="form-control" name="joining_date" value="{{ $faculty->joining_date }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Promotion Date</label>
                            <input type="date" class="form-control" name="promotion_date" value="{{ $faculty->promotion_date }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Last Working Date</label>
                            <input type="date" class="form-control" name="last_working_date" value="{{ $faculty->last_working_date }}" />
                        </div> -->