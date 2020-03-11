@extends('layouts.material')

@section('content')
<div class="row">
    <div class="col-md-12 align-items-center">
        <h4 class="card-title">Edit Faculty Profile</h4>
        <hr>
        <button type="button" class="btn btn-link"></button>
        <div class="card uper">
            <form method="post" action="{{ route('faculty.update', $faculty->id) }}">
                <div class="card-body">
                    @method('PATCH')
                    @csrf
                    <!--  -->
                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="englishName">English Name:</label>
                                <input type="text" class="form-control" name="englishName" value="{{ $faculty->english_name }}" />
                            </div>
                            <div class="form-group col-md-6">
                                <label for="arabicName">Arabic Name:</label>
                                <input type="text" class="form-control" name="arabicName" value="{{ $faculty->arabic_name }}" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="badge">Badge:</label>
                                <input id="badge" class="form-control" type="text" name="badge" value="{{ $faculty->badge }}">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="academicRank">Academic Rank:</label>
                                <input type="text" class="form-control" name="academicRank" value="{{ $faculty->academic_rank }}" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="adminPosition">Admin Position:</label>
                                <input type="text" class="form-control" name="adminPosition" value="{{ $faculty->admin_position }}" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option class="dropdown-item" value="active" {{ $faculty->status  == 'active' ? 'selected' : '' }}>Active</option>
                                    <option class="dropdown-item" value="retried" {{ $faculty->status  == 'retried' ? 'selected' : '' }}>Retried</option>
                                    <option class="dropdown-item" value="resigned" {{ $faculty->status  == 'resigned' ? 'selected' : '' }}>Resigned</option>
                                    <option class="dropdown-item" value="transfer" {{ $faculty->status  == 'transfer' ? 'selected' : '' }}>Transfer</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="joiningDate">Joining Date:</label>
                                <input type="date" class="form-control" name="joiningDate" value="{{ $faculty->joining_date }}" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="promotionDate">Promotion Date:</label>
                                <input type="date" class="form-control" name="promotionDate" value="{{ $faculty->promotion_date }}" />
                            </div>
                            <div class="form-group col-md-3">
                                <label for="lastWorkingDate">Last Working Date:</label>
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
                                <label for="yearlyAppraisal">Yearly Appraisal:</label>
                                <input type="number" class="form-control" name="yearlyAppraisal" value="{!!$faculty->FullTime->yearly_appraisal !!}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="businessLeave">Prof. and Business Leave Attend:</label>
                                <input type="number" class="form-control" name="businessLeave" value="{!!$faculty->FullTime->business_leave !!}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="administrativeDuties">Administrative Duties:</label>
                                <input type="text" class="form-control" name="administrativeDuties" value="{!!$faculty->FullTime->administrative_duties !!}" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="numberOfInvigilator">Number Of Invigilator:</label>
                                <input type="number" class="form-control" name="numberOfInvigilator" value="{!!$faculty->FullTime->number_of_invigilator !!}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="totalInvigilatorHour">Total Invigilator Hour:</label>
                                <input type="number" class="form-control" name="totalInvigilatorHour" value="{!!$faculty->FullTime->total_invigilator_hour !!}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="committeeMembership">Committee Membership:</label>
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
                                <label for="nationality">Nationality:</label>
                                <select class="form-control" id="nationality" name="nationality" class="form-control">
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
                                    <option value="barbadian" {{ $faculty->DemographicInfo->nationality == 'barbadian' ? 'selected' : '' }}>Barbadian</option>
                                    <option value="belgian" {{ $faculty->DemographicInfo->nationality == 'belgian' ? 'selected' : '' }}>Belgian</option>
                                    <option value="belizean" {{ $faculty->DemographicInfo->nationality == 'belizean' ? 'selected' : '' }}>Belizean</option>
                                    <option value="beninese" {{ $faculty->DemographicInfo->nationality == 'beninese' ? 'selected' : '' }}>Beninese</option>
                                    <option value="bhutanese" {{ $faculty->DemographicInfo->nationality == 'bhutanese' ? 'selected' : '' }}>Bhutanese</option>
                                    <option value="bolivian" {{ $faculty->DemographicInfo->nationality == 'bolivian' ? 'selected' : '' }}>Bolivian</option>
                                    <option value="bosnian" {{ $faculty->DemographicInfo->nationality == 'bosnian' ? 'selected' : '' }}>Bosnian</option>
                                    <option value="brazilian" {{ $faculty->DemographicInfo->nationality == 'brazilian' ? 'selected' : '' }}>Brazilian</option>
                                    <option value="burmese" {{ $faculty->DemographicInfo->nationality == 'burmese' ? 'selected' : '' }}>Burmese</option>
                                    <option value="burundian" {{ $faculty->DemographicInfo->nationality == 'burundian' ? 'selected' : '' }}>Burundian</option>
                                    <option value="cambodian" { $faculty->DemographicInfo->nationality == 'cambodian' ? 'selected' : '' }}>Cambodian</option>
                                    <option value="cameroonian" { $faculty->DemographicInfo->nationality == 'cameroonian' ? 'selected' : '' }}>Cameroonian</option>
                                    <option value="canadian" {{ $faculty->DemographicInfo->nationality == 'Canadian' ? 'selected' : '' }}>Canadian</option>
                                    <option value="cape verdean" {{ $faculty->DemographicInfo->nationality == 'Cape Verdean' ? 'selected' : '' }}>Cape Verdean</option>
                                    <option value="central african" {{ $faculty->DemographicInfo->nationality == 'Central African' ? 'selected' : '' }}>Central African</option>
                                    <option value="chadian" {{ $faculty->DemographicInfo->nationality == 'Chadian' ? 'selected' : '' }}>Chadian</option>
                                    <option value="chinese" {{ $faculty->DemographicInfo->nationality == 'Chinese' ? 'selected' : '' }}>Chinese</option>
                                    <option value="colombian" {{ $faculty->DemographicInfo->nationality == 'colombian' ? 'selected' : '' }}>Colombian</option>
                                    <option value="comoran" {{ $faculty->DemographicInfo->nationality == 'comoran' ? 'selected' : '' }}>Comoran</option>
                                    <option value="congolese" {{ $faculty->DemographicInfo->nationality == 'congolese' ? 'selected' : '' }}>Congolese</option>
                                    <option value="costa rican" {{ $faculty->DemographicInfo->nationality == 'costa rican' ? 'selected' : '' }}>Costa Rican</option>
                                    <option value="croatian" {{ $faculty->DemographicInfo->nationality == 'croatian' ? 'selected' : '' }}>Croatian</option>
                                    <option value="cuban" {{ $faculty->DemographicInfo->nationality == 'cuban' ? 'selected' : '' }}>Cuban</option>
                                    <option value="cypriot" {{ $faculty->DemographicInfo->nationality == 'cypriot' ? 'selected' : '' }}>Cypriot</option>
                                    <option value="czech" {{ $faculty->DemographicInfo->nationality == 'czech' ? 'selected' : '' }}>Czech</option>
                                    <option value="danish" {{ $faculty->DemographicInfo->nationality == 'danish' ? 'selected' : '' }}>Danish</option>
                                    <option value="djibouti" {{ $faculty->DemographicInfo->nationality == 'djibouti' ? 'selected' : '' }}>Djibouti</option>
                                    <option value="dominican" {{ $faculty->DemographicInfo->nationality == 'dominican' ? 'selected' : '' }}>Dominican</option>
                                    <option value="dutch" {{ $faculty->DemographicInfo->nationality == 'dutch' ? 'selected' : '' }}>Dutch</option>
                                    <option value="east timorese" {{ $faculty->DemographicInfo->nationality == 'east timorese' ? 'selected' : '' }}>East Timorese</option>
                                    <option value="ecuadorean" {{ $faculty->DemographicInfo->nationality == 'ecuadorean' ? 'selected' : '' }}>Ecuadorean</option>
                                    <option value="egyptian" {{ $faculty->DemographicInfo->nationality == 'egyptian' ? 'selected' : '' }}>Egyptian</option>
                                    <option value="emirian" {{ $faculty->DemographicInfo->nationality == 'emirian' ? 'selected' : '' }}>Emirian</option>
                                    <option value="equatorial guinean" {{ $faculty->DemographicInfo->nationality == 'equatorial Guinean' ? 'selected' : '' }}>Equatorial Guinean</option>
                                    <option value="eritrean" {{ $faculty->DemographicInfo->nationality == 'eritrean' ? 'selected' : '' }}>Eritrean</option>
                                    <option value="estonian" {{ $faculty->DemographicInfo->nationality == 'estonian' ? 'selected' : '' }}>Estonian</option>
                                    <option value="ethiopian" {{ $faculty->DemographicInfo->nationality == 'ethiopian' ? 'selected' : '' }}>Ethiopian</option>
                                    <option value="fijian" {{ $faculty->DemographicInfo->nationality == 'fijian' ? 'selected' : '' }}>Fijian</option>
                                    <option value="filipino" {{ $faculty->DemographicInfo->nationality == 'filipino' ? 'selected' : '' }}>Filipino</option>
                                    <option value="french" {{ $faculty->DemographicInfo->nationality == 'french' ? 'selected' : '' }}>French</option>
                                    <option value="georgian" {{ $faculty->DemographicInfo->nationality == 'georgian' ? 'selected' : '' }}>Georgian</option>
                                    <option value="german" {{ $faculty->DemographicInfo->nationality == 'german' ? 'selected' : '' }}>German</option>
                                    <option value="ghanaian" {{ $faculty->DemographicInfo->nationality == 'ghanaian' ? 'selected' : '' }}>Ghanaian</option>
                                    <option value="greek" {{ $faculty->DemographicInfo->nationality == 'greek' ? 'selected' : '' }}>Greek</option>
                                    <option value="indian" {{ $faculty->DemographicInfo->nationality == 'indian' ? 'selected' : '' }}>Indian</option>
                                    <option value="indonesian" {{ $faculty->DemographicInfo->nationality == 'indonesian' ? 'selected' : '' }}>Indonesian</option>
                                    <option value="iraqi" {{ $faculty->DemographicInfo->nationality == 'iraqi' ? 'selected' : '' }}>Iraqi</option>
                                    <option value="irish" {{ $faculty->DemographicInfo->nationality == 'irish' ? 'selected' : '' }}>Irish</option>
                                    <option value="italian" {{ $faculty->DemographicInfo->nationality == 'italian' ? 'selected' : '' }}>Italian</option>
                                    <option value="japanese" {{ $faculty->DemographicInfo->nationality == 'japanese' ? 'selected' : '' }}>Japanese</option>
                                    <option value="jordanian" {{ $faculty->DemographicInfo->nationality == 'jordanian' ? 'selected' : '' }}>Jordanian</option>
                                    <option value="kenyan" {{ $faculty->DemographicInfo->nationality == 'kenyan' ? 'selected' : '' }}>Kenyan</option>
                                    <option value="kuwaiti" {{ $faculty->DemographicInfo->nationality == 'kuwaiti' ? 'selected' : '' }}>Kuwaiti</option>
                                    <option value="lebanese" {{ $faculty->DemographicInfo->nationality == 'lebanese' ? 'selected' : '' }}>Lebanese</option>
                                    <option value="libyan" {{ $faculty->DemographicInfo->nationality == 'libyan' ? 'selected' : '' }}>Libyan</option>
                                    <option value="malaysian" {{ $faculty->DemographicInfo->nationality == 'malaysian' ? 'selected' : '' }}>Malaysian</option>
                                    <option value="mauritian" {{ $faculty->DemographicInfo->nationality == 'mauritian' ? 'selected' : '' }}>Mauritian</option>
                                    <option value="mexican" {{ $faculty->DemographicInfo->nationality == 'mexican' ? 'selected' : '' }}>Mexican</option>
                                    <option value="moroccan" {{ $faculty->DemographicInfo->nationality == 'moroccan' ? 'selected' : '' }}>Moroccan</option>
                                    <option value="new zealander" {{ $faculty->DemographicInfo->nationality == 'new zealander' ? 'selected' : '' }}>New Zealander</option>
                                    <option value="nigerien" {{ $faculty->DemographicInfo->nationality == 'nigerien' ? 'selected' : '' }}>Nigerien</option>
                                    <option value="north korean" {{ $faculty->DemographicInfo->nationality == 'north korean' ? 'selected' : '' }}>North Korean</option>
                                    <option value="omani" {{ $faculty->DemographicInfo->nationality == 'omani' ? 'selected' : '' }}>Omani</option>
                                    <option value="pakistani" {{ $faculty->DemographicInfo->nationality == 'pakistani' ? 'selected' : '' }}>Pakistani</option>n>
                                    <option value="polish" {{ $faculty->DemographicInfo->nationality == 'polish' ? 'selected' : '' }}>Polish</option>
                                    <option value="portuguese" {{ $faculty->DemographicInfo->nationality == 'portuguese' ? 'selected' : '' }}>Portuguese</option>
                                    <option value="qatari" {{ $faculty->DemographicInfo->nationality == 'qatari' ? 'selected' : '' }}>Qatari</option>
                                    <option value="romanian" {{ $faculty->DemographicInfo->nationality == 'romanian' ? 'selected' : '' }}>Romanian</option>
                                    <option value="russian" {{ $faculty->DemographicInfo->nationality == 'russian' ? 'selected' : '' }}>Russian</option>
                                    <option value="rwandan" {{ $faculty->DemographicInfo->nationality == 'rwandan' ? 'selected' : '' }}>Rwandan</option>
                                    <option value="saint lucian" {{ $faculty->DemographicInfo->nationality == 'saint lucian' ? 'selected' : '' }}>Saint Lucian</option>
                                    <option value="salvadoran" {{ $faculty->DemographicInfo->nationality == 'salvadoran' ? 'selected' : '' }}>Salvadoran</option>
                                    <option value="saudi" {{ $faculty->DemographicInfo->nationality == 'saudi' ? 'selected' : '' }}>Saudi</option>
                                    <option value="scottish" {{ $faculty->DemographicInfo->nationality  == 'scottish' ? 'selected' : '' }}>Scottish</option>
                                    <option value="singaporean" {{ $faculty->DemographicInfo->nationality == 'singaporean' ? 'selected' : '' }}>Singaporean</option>
                                    <option value="somali" {{ $faculty->DemographicInfo->nationality == 'somali' ? 'selected' : '' }}>Somali</option>
                                    <option value="south african" {{ $faculty->DemographicInfo->nationality == 'south african' ? 'selected' : '' }}>South African</option>
                                    <option value="south korean" {{ $faculty->DemographicInfo->nationality == 'south korean' ? 'selected' : '' }}>South Korean</option>
                                    <option value="spanish" {{ $faculty->DemographicInfo->nationality == 'spanish' ? 'selected' : '' }}>Spanish</option>
                                    <option value="sudanese" {{ $faculty->DemographicInfo->nationality == 'sudanese' ? 'selected' : '' }}>Sudanese</option>
                                    <option value="swedish" {{ $faculty->DemographicInfo->nationality == 'swedish' ? 'selected' : '' }}>Swedish</option>
                                    <option value="syrian" {{ $faculty->DemographicInfo->nationality == 'syrian' ? 'selected' : '' }}>Syrian</option>
                                    <option value="thai" {{ $faculty->DemographicInfo->nationality == 'thai' ? 'selected' : '' }}>Thai</option>
                                    <option value="tunisian" {{ $faculty->DemographicInfo->nationality == 'turkish' ? 'selected' : '' }}>Tunisian</option>
                                    <option value="turkish" {{ $faculty->DemographicInfo->nationality == 'turkish' ? 'selected' : '' }}>Turkish</option>
                                    <option value="tuvaluan" {{ $faculty->DemographicInfo->nationality == 'tuvaluan' ? 'selected' : '' }}>Tuvaluan</option>
                                    <option value="ugandan" {{ $faculty->DemographicInfo->nationality == 'ugandan' ? 'selected' : '' }}>Ugandan</option>
                                    <option value="ukrainian" {{ $faculty->DemographicInfo->nationality == 'ukrainian' ? 'selected' : '' }}>Ukrainian</option>
                                    <option value="yemenite" {{ $faculty->DemographicInfo->nationality == 'yemenite' ? 'selected' : '' }}>Yemenite</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="maritalStatus">Marital Status:</label>
                                <select value="selected" selected id="maritalStatus" name="maritalStatus" class="form-control">
                                    <option value="married" {{ $faculty->DemographicInfo->marital_status  == 'married' ? 'selected' : '' }}>married</option>
                                    <option value="single" {{ $faculty->DemographicInfo->marital_status  == 'single' ? 'selected' : '' }}>single</option>
                                    <option value="divorced" {{ $faculty->DemographicInfo->marital_status == 'divorced' ? 'selected' : '' }}>divorced</option>
                                    <option value="separated" {{ ($faculty->DemographicInfo->marital_status == 'separated') ? 'selected' : '' }}>separated</option>
                                </select>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="gender">Gender:</label><br>
                                <input type=radio name="gender" value="male" {{ $faculty->DemographicInfo->gender == 'male' ? 'checked' : ''}}>Male</option>
                                <input type=radio name="gender" value="female" {{ $faculty->DemographicInfo->gender == 'female' ? 'checked' : ''}}>Female</option>
                            </div>
                            <!-- <div class="form-group col-md-4">
                                <label value="checked" for="gender">Gender:</label> <br>
                                <input type="radio" name="gender" value="Male" {{ $faculty->DemographicInfo->gender == 'Male' ? 'checked' : '' }}>Male
                                <input type="radio" name="gender" value="Female" {{ $faculty->DemographicInfo->gender == 'Female' ? 'checked' : ''}}> Female
                            </div> -->
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="nationalId">National Id:</label>
                                <input id="nationalId" class="form-control" type="text" name="nationalId" placeholder="1111111111" value="{!!$faculty->DemographicInfo->national_id !!}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="dateOfBirth">Date of Birth:</label>
                                <input id="dateOfBirth" class="form-control" type="date" name="dateOfBirth" placeholder="dd/mm/yyyy" value="{!!$faculty->DemographicInfo->date_of_birth !!}">
                            </div>

                        </div>
                    </fieldset>
                    <!-- contact information -->
                    <div class="border-top my-3"></div>
                    <fieldset>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cellPhone">Cell Phone:</label>
                                <input type="number" class="form-control" name="cellPhone" value="{!!$faculty->ContactInfo->cell_phone !!}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="pagerNumber">Pager Number:</label>
                                <input type="number" class="form-control" name="pagerNumber" value="{{ $faculty->ContactInfo->pager_number }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="extension">Extension:</label>
                                <input type="number" class="form-control" name="extension" value="{{ $faculty->ContactInfo->extension }}" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="ngha_email">NGHA Email:</label>
                                <input type="email" class="form-control" name="nghaEmail" value="{{ $faculty->ContactInfo->ngha_email }}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="ksauhs_email">KSAU-HS Email:</label>
                                <input type="email" class="form-control" name="ksauhsEmail" value="{{ $faculty->ContactInfo->ksauhs_email }}" />
                            </div>
                            <div class="form-group col-md-4">
                                <label for="personal_email">Personal Email:</label>
                                <input type="email" class="form-control" name="personalEmail" value="{{ $faculty->ContactInfo->personal_email }}" />
                            </div>
                        </div>
                    </fieldset>
                    <div class="border-top my-3"></div>
                    <fieldset>
                        @foreach($faculty->EducationalBackground as $edu)
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="majorField">Major Field:</label>
                                <input id="majorField" class="form-control" type="text" name="majorField" value="{{ $edu->major_field }}">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="subspecialtyField">Subspecialty Field:</label>
                                <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->subspecialty_field}}">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="subspecialtyField">Degree Name:</label>
                                <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->degree_name }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="graduateInstitution">Graduated Institution:</label>
                                <input id="graduateInstitution" class="form-control" type="text" name="graduateInstitution" value="{{ $edu->graduate_institution }}">
                            </div>
                            <div class="form-group col-md-4">
                                <label for="year">Graduated Year:</label>
                                <input id="year" class="form-control" type="number" name="year" value="{{  $edu->year }}">
                            </div>
                        </div>
                        @endforeach
                    </fieldset>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
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