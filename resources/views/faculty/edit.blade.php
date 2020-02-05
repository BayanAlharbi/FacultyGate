@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Faculty Member') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('faculty.update', $faculty->id) }}">
                        @method('PATCH')
                        @csrf
                        <!--  -->
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="englishName">{{ ('English Name:') }}</label>
                                    <input type="text" class="form-control" name="englishName" value="{{ $faculty->english_name }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="arabicName">{{ ('Arabic Name:') }}</label>
                                    <input type="text" class="form-control" name="arabicName" value="{{ $faculty->arabic_name }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="badge">{{ ('Badge') }}</label>
                                    <input id="badge" class="form-control" type="text" name="badge" value="{{ $faculty->badge }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="academicRank">{{ __('Academic Rank') }}</label>
                                    <input type="text" class="form-control" name="academicRank" value="{{ $faculty->academic_rank }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="adminPosition">{{ __('Admin Position') }}</label>
                                    <input type="text" class="form-control" name="adminPosition" value="{{ $faculty->admin_position }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="joiningDate">{{ __('Joining Date') }}</label>
                                    <input type="date" class="form-control" name="joiningDate" value="{{ $faculty->joining_date }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="promotionDate">{{ __('Promotion Date') }}</label>
                                    <input type="date" class="form-control" name="promotionDate" value="{{ $faculty->promotion_date }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="lastWorkingDate">{{ __('Last Working Date') }}</label>
                                    <input type="date" class="form-control" name="lastWorkingDate" value="{{ $faculty->last_working_date }}" />
                                </div>
                            </div>
                        </fieldset>
                        <!-- demographic Info  -->
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="nationality">{{ __('Nationality') }}</label>
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
                                        <option value="bangladeshi">Bangladeshi</option>
                                        <option value="british">British</option>
                                        <option value="canadian">Canadian</option>
                                        <option value="cape verdean">Cape Verdean</option>
                                        <option value="central african">Central African</option>
                                        <option value="chadian">Chadian</option>
                                        <option value="chinese">Chinese</option>
                                        <option value="ecuadorean">Ecuadorean</option>
                                        <option value="egyptian">Egyptian</option>
                                        <option value="equatorial guinean">Equatorial Guinean</option>
                                        <option value="eritrean">Eritrean</option>
                                        <option value="estonian">Estonian</option>
                                        <option value="ethiopian">Ethiopian</option>
                                        <option value="filipino">Filipino</option>
                                        <option value="french">French</option>
                                        <option value="georgian">Georgian</option>
                                        <option value="german">German</option>
                                        <option value="ghanaian">Ghanaian</option>
                                        <option value="greek">Greek</option>
                                        <option value="indian">Indian</option>
                                        <option value="indonesian">Indonesian</option>
                                        <option value="iraqi">Iraqi</option>
                                        <option value="irish">Irish</option>
                                        <option value="italian">Italian</option>
                                        <option value="japanese">Japanese</option>
                                        <option value="jordanian">Jordanian</option>
                                        <option value="kenyan">Kenyan</option>
                                        <option value="lebanese">Lebanese</option>
                                        <option value="libyan">Libyan</option>
                                        <option value="malaysian">Malaysian</option>
                                        <option value="mauritian">Mauritian</option>
                                        <option value="mexican">Mexican</option>
                                        <option value="moroccan">Moroccan</option>
                                        <option value="new zealander">New Zealander</option>
                                        <option value="nigerien">Nigerien</option>
                                        <option value="north korean">North Korean</option>
                                        <option value="omani">Omani</option>
                                        <option value="pakistani">Pakistani</option>n>
                                        <option value="polish">Polish</option>
                                        <option value="portuguese">Portuguese</option>
                                        <option value="qatari">Qatari</option>
                                        <option value="romanian">Romanian</option>
                                        <option value="russian">Russian</option>
                                        <option value="rwandan">Rwandan</option>
                                        <option value="saint lucian">Saint Lucian</option>
                                        <option value="salvadoran">Salvadoran</option>
                                        <option value="saudi" {{ $faculty->DemographicInfo->nationality == 'saudi' ? 'selected' : '' }}>Saudi</option>
                                        <option value="scottish" {{ $faculty->DemographicInfo->nationality  == 'Scottish' ? 'selected' : '' }}>Scottish</option>
                                        <option value="singaporean">Singaporean</option>
                                        <option value="somali">Somali</option>
                                        <option value="south african">South African</option>
                                        <option value="south korean">South Korean</option>
                                        <option value="spanish">Spanish</option>
                                        <option value="sudanese">Sudanese</option>
                                        <option value="swedish">Swedish</option>
                                        <option value="thai">Thai</option>
                                        <option value="tunisian">Tunisian</option>
                                        <option value="turkish">Turkish</option>
                                        <option value="tuvaluan">Tuvaluan</option>
                                        <option value="ugandan">Ugandan</option>
                                        <option value="ukrainian">Ukrainian</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nationalId">{{ __('National Id') }}</label>
                                    <input id="nationalId" class="form-control" type="text" name="nationalId" placeholder="1111111111" value="{!!$faculty->DemographicInfo->national_id !!}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label value="checked" for="gender">{{ __('Gender') }}</label> <br>
                                    <input type="radio" name="gender" value="Male" {{ $faculty->DemographicInfo->gender == 'Male' ? 'checked' : '' }}>Male
                                    <input type="radio" name="gender" value="Female" {{ $faculty->DemographicInfo->gender == 'Female' ? 'checked' : ''}}> Female
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="maritalStatus">{{ __('Marital Status') }}</label> <br>
                                    <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                    <select value="selected" name="maritalStatus" class="js-example-basic-multiple">
                                        <option value="married" {{ $faculty->DemographicInfo->marital_status  == 'married' ? 'selected' : '' }}>married</option>
                                        <option value="single" {{ $faculty->DemographicInfo->marital_status  == 'single' ? 'selected' : '' }}>single</option>
                                        <option value="divorced" {{ $faculty->DemographicInfo->marital_status == 'divorced' ? 'selected' : '' }}>divorced</option>
                                        <option value="separated" {{ ($faculty->DemographicInfo->marital_status == 'separated') ? 'selected' : '' }}>separated</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="dateOfBirth">{{ __('Date of Birth') }}</label>
                                    <input id="dateOfBirth" class="form-control" type="date" name="dateOfBirth" placeholder="dd/mm/yyyy" value="{!!$faculty->DemographicInfo->date_of_birth !!}">
                                </div>

                            </div>
                        </fieldset>
                        <!-- contact information -->
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cellPhone">{{ __('Cell Phone') }}</label>
                                    <input type="number" class="form-control" name="cellPhone" value="{!!$faculty->ContactInfo->cell_phone !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="pagerNumber">{{ __('Pager Number') }}</label>
                                    <input type="number" class="form-control" name="pagerNumber" value="{{ $faculty->ContactInfo->pager_number }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="extension">{{ __('extension') }}</label>
                                    <input type="number" class="form-control" name="extension" value="{{ $faculty->ContactInfo->extension }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ngha_email">{{ __('NGHA Email') }}</label>
                                    <input type="email" class="form-control" name="nghaEmail" value="{{ $faculty->ContactInfo->ngha_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ksauhs_email">{{ __('KSAU-HS Email') }}</label>
                                    <input type="email" class="form-control" name="ksauhsEmail" value="{{ $faculty->ContactInfo->ksauhs_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="personal_email">{{ __('Personal Email') }}</label>
                                    <input type="email" class="form-control" name="personalEmail" value="{{ $faculty->ContactInfo->personal_email }}" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="border-top my-3"></div>
                        <fieldset>
                            @foreach($faculty->EducationalBackground as $edu)
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="majorField">{{ __('Major Field') }}</label>
                                    <input id="majorField" class="form-control" type="text" name="majorField" value="{{ $edu->major_field }}">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="subspecialtyField">{{ __('Subspecialty Field') }}</label>
                                    <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->subspecialty_field}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="subspecialtyField">{{ __('Degree Name') }}</label>
                                    <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ $edu->degree_name }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="graduateInstitution">{{ __('Graduated Institution') }}</label>
                                    <input id="graduateInstitution" class="form-control" type="text" name="graduateInstitution" value="{{ $edu->graduate_institution }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="year">{{ __('Graduated Year') }}</label>
                                    <input id="year" class="form-control" type="number" name="year" value="{{  $edu->year }}">
                                </div>
                            </div>
                            @endforeach
                        </fieldset>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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