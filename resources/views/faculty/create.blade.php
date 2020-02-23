@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div><br />
                @endif -->
                <form method="POST" action="{{ route('faculty.store') }}">
                    @csrf
                    <form name="add_faculty" id="add_faculty">

                        <div class="card-header">{{ ('Faculty Member') }}</div>
                        <div class="card-body">
                            <!-- faculty basic information  -->
                            <div id="faq" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="questionOne">
                                        <h5 class="panel-title">
                                            <h5 data-toggle="collapse" data-parent="#faq" href="#answerOne" aria-expanded="false" aria-controls="answerOne">
                                                Basic Information</h5><i class="fas fa-angle-down"></i>
                                        </h5>
                                    </div>
                                    <div id="answerOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="questionOne">
                                        <div class="panel-body">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="englishName">{{ 'English Name' }}</label>
                                                        <input id="englishName" class="form-control" type="text" name="englishName" placeholder="english full name" required autocomplete="name" autofocus>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="arabicName">{{ 'Arabic Name' }}</label>
                                                        <input id="arabicName" class="form-control" type="text" name="arabicName" placeholder="arabic full name" required autocomplete="name" autofocus>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="badge">{{ ('Badge') }}</label>
                                                        <input class="form-inline" id="badge" class="form-control" type="number" name="badge" value="{{ old('badge') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="academicRrank">{{ 'Academic Rank' }}</label>
                                                        <input class="form-inline" id="academicRank" class="form-control" type="text" name="academicRank" value="{{ old('academic_rank') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="adminPosition">{{' Admin Position' }}</label>
                                                        <input class="form-inline" id="adminPosition" type="text" class="form-control" name="adminPosition" value="{{ old('admin_position') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="status">{{ 'Status' }}</label>
                                                        <select class="form-inline" class="btn-primary dropdown-toggle" name="status" class="js-example-basic-multiple">
                                                            <option class="dropdown-item" value="active">Active</option>
                                                            <option class="dropdown-item" value="retried">Retried</option>
                                                            <option class="dropdown-item" value="resigned">Resigned</option>
                                                            <option class="dropdown-item" value="transfer">Transfer</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="joiningDate">{{ 'Joining Date' }}</label>
                                                        <input id="joiningDate" class="form-control" type="date" name="joiningDate" placeholder="dd/mm/yyyy" value="{{ old('joining_date') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="promotionDate">{{ 'Promotion Date' }}</label>
                                                        <input id="promotionDate" class="form-control" type="date" name="promotionDate" placeholder="dd/mm/yyyy" value="{{ old('promotion_date') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="lastWorkingDate">{{ 'Last Working Date' }}</label>
                                                        <input id="lastWorkingDate" type="date" class="form-control" name="lastWorkingDate" value="{{ old('last_working_date') }}">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="fullTime">
                                                            <input type="checkbox" class="form-control" name="fullTime" value="1" id="fullTime" />
                                                            Are you a full-time faculty?
                                                        </label></div>
                                                </div>
                                                <!-- hidden div for full time faculty details -->
                                                <div id="dvPassport" style="display: none">
                                                    <div class="border-top my-3"></div>
                                                    <fieldset>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="yearlyAppraisal">{{ 'Yearly Appraisal' }}</label>
                                                                <input id="yearlyAppraisal" class="form-control" type="number" name="yearlyAppraisal" placeholder="" value="{{ old('yearly_appraisal') }}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="businessLeave">{{ 'Professional and Business Leave' }}</label>
                                                                <input id="businessLeave" class="form-control" type="number" name="businessLeave" placeholder="12" value="{{ old('business_leave') }}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="administrativeDuties">{{ 'Administrative Duties' }}</label>
                                                                <input id="administrativeDuties" type="text" class="form-control" name="administrativeDuties" value="{{ old('administrative_duties') }}">
                                                            </div>
                                                        </div>
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="numberOfInvigilator">{{ 'Number of Invigilator' }}</label>
                                                                <input id="numberOfInvigilator" class="form-control" type="number" name="numberOfInvigilator" placeholder="" value="{{ old('number_of_invigilator') }}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="totalInvigilatorHour">{{ 'Total Invigilator Hour' }}</label>
                                                                <input id="totalInvigilatorHour" class="form-control" type="number" name="totalInvigilatorHour" placeholder="12" value="{{ old('total_invigilator_hour') }}">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="committeeMembership">{{ 'Committee Membership' }}</label>
                                                                <input id="committeeMembership" type="text" class="form-control" name="committeeMembership" value="{{ old('committee_membership') }}">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top my-3"></div>
                                <!-- demographic Info  -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="questionTwo">
                                        <h5 class="panel-title">
                                            <h5 class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerTwo" aria-expanded="false" aria-controls="answerTwo">
                                                Demographic Information</h5>
                                        </h5>
                                    </div>
                                    <div id="answerTwo" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="questionTwo">
                                        <div class="panel-body">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="nationalId">{{ 'National Id' }}</label>
                                                        <input id="nationalId" class="form-inline" class="form-control" type="number" name="nationalId" placeholder="1111111111" value="{{ old('national_id') }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="dateOfBirth">{{ 'Date of Birth' }}</label>
                                                        <input class="form-inline" id="dateOfBirth" class="form-control" type="date" name="dateOfBirth" placeholder="dd/mm/yyyy" value="{{ old('dateOfBirth') }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="nationality">{{ 'Nationality' }}</label>
                                                        <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                                        <select class="form-inline" name="nationality" class="js-example-basic-multiple">
                                                            <option value="american">American</option>
                                                            <option value="andorran">Andorran</option>
                                                            <option value="angolan">Angolan</option>
                                                            <option value="antiguans">Antiguans</option>
                                                            <option value="argentinean">Argentinean</option>
                                                            <option value="armenian">Armenian</option>
                                                            <option value="australian">Australian</option>
                                                            <option value="austrian">Austrian</option>
                                                            <option value="azerbaijani">Azerbaijani</option>
                                                            <option value="bahamian">Bahamian</option>
                                                            <option value="bahraini">Bahraini</option>
                                                            <option value="bangladeshi">Bangladeshi</option>
                                                            <option value="barbadian">Barbadian</option>
                                                            <option value="belgian">Belgian</option>
                                                            <option value="belizean">Belizean</option>
                                                            <option value="beninese">Beninese</option>
                                                            <option value="bhutanese">Bhutanese</option>
                                                            <option value="bolivian">Bolivian</option>
                                                            <option value="bosnian">Bosnian</option>
                                                            <option value="brazilian">Brazilian</option>
                                                            <option value="british">British</option>
                                                            <option value="burmese">Burmese</option>
                                                            <option value="burundian">Burundian</option>
                                                            <option value="cambodian">Cambodian</option>
                                                            <option value="cameroonian">Cameroonian</option>
                                                            <option value="canadian">Canadian</option>
                                                            <option value="cape verdean">Cape Verdean</option>
                                                            <option value="central african">Central African</option>
                                                            <option value="chadian">Chadian</option>
                                                            <option value="chinese">Chinese</option>
                                                            <option value="colombian">Colombian</option>
                                                            <option value="comoran">Comoran</option>
                                                            <option value="congolese">Congolese</option>
                                                            <option value="costa rican">Costa Rican</option>
                                                            <option value="croatian">Croatian</option>
                                                            <option value="cuban">Cuban</option>
                                                            <option value="cypriot">Cypriot</option>
                                                            <option value="czech">Czech</option>
                                                            <option value="danish">Danish</option>
                                                            <option value="djibouti">Djibouti</option>
                                                            <option value="dominican">Dominican</option>
                                                            <option value="dutch">Dutch</option>
                                                            <option value="east timorese">East Timorese</option>
                                                            <option value="ecuadorean">Ecuadorean</option>
                                                            <option value="egyptian">Egyptian</option>
                                                            <option value="emirian">Emirian</option>
                                                            <option value="equatorial guinean">Equatorial Guinean</option>
                                                            <option value="eritrean">Eritrean</option>
                                                            <option value="estonian">Estonian</option>
                                                            <option value="ethiopian">Ethiopian</option>
                                                            <option value="fijian">Fijian</option>
                                                            <option value="filipino">Filipino</option>
                                                            <option value="finnish">Finnish</option>
                                                            <option value="french">French</option>
                                                            <option value="gabonese">Gabonese</option>
                                                            <option value="gambian">Gambian</option>
                                                            <option value="georgian">Georgian</option>
                                                            <option value="german">German</option>
                                                            <option value="ghanaian">Ghanaian</option>
                                                            <option value="greek">Greek</option>
                                                            <option value="grenadian">Grenadian</option>
                                                            <option value="guatemalan">Guatemalan</option>
                                                            <option value="guinea-bissauan">Guinea-Bissauan</option>
                                                            <option value="haitian">Haitian</option>
                                                            <option value="herzegovinian">Herzegovinian</option>
                                                            <option value="indian">Indian</option>
                                                            <option value="indonesian">Indonesian</option>
                                                            <option value="iranian">Iranian</option>
                                                            <option value="iraqi">Iraqi</option>
                                                            <option value="irish">Irish</option>
                                                            <option value="italian">Italian</option>
                                                            <option value="ivorian">Ivorian</option>
                                                            <option value="jamaican">Jamaican</option>
                                                            <option value="japanese">Japanese</option>
                                                            <option value="jordanian">Jordanian</option>
                                                            <option value="kazakhstani">Kazakhstani</option>
                                                            <option value="kenyan">Kenyan</option>
                                                            <option value="kittian and nevisian">Kittian and Nevisian</option>
                                                            <option value="kuwaiti">Kuwaiti</option>
                                                            <option value="kyrgyz">Kyrgyz</option>
                                                            <option value="laotian">Laotian</option>
                                                            <option value="latvian">Latvian</option>
                                                            <option value="lebanese">Lebanese</option>
                                                            <option value="liberian">Liberian</option>
                                                            <option value="libyan">Libyan</option>
                                                            <option value="liechtensteiner">Liechtensteiner</option>
                                                            <option value="lithuanian">Lithuanian</option>
                                                            <option value="luxembourger">Luxembourger</option>
                                                            <option value="macedonian">Macedonian</option>
                                                            <option value="malagasy">Malagasy</option>
                                                            <option value="malawian">Malawian</option>
                                                            <option value="malaysian">Malaysian</option>
                                                            <option value="maldivan">Maldivan</option>
                                                            <option value="malian">Malian</option>
                                                            <option value="maltese">Maltese</option>
                                                            <option value="marshallese">Marshallese</option>
                                                            <option value="mauritanian">Mauritanian</option>
                                                            <option value="mauritian">Mauritian</option>
                                                            <option value="mexican">Mexican</option>
                                                            <option value="micronesian">Micronesian</option>
                                                            <option value="moldovan">Moldovan</option>
                                                            <option value="monacan">Monacan</option>
                                                            <option value="mongolian">Mongolian</option>
                                                            <option value="moroccan">Moroccan</option>
                                                            <option value="mosotho">Mosotho</option>
                                                            <option value="motswana">Motswana</option>
                                                            <option value="mozambican">Mozambican</option>
                                                            <option value="namibian">Namibian</option>
                                                            <option value="nauruan">Nauruan</option>
                                                            <option value="nepalese">Nepalese</option>
                                                            <option value="new zealander">New Zealander</option>
                                                            <option value="ni-vanuatu">Ni-Vanuatu</option>
                                                            <option value="nicaraguan">Nicaraguan</option>
                                                            <option value="nigerien">Nigerien</option>
                                                            <option value="north korean">North Korean</option>
                                                            <option value="northern irish">Northern Irish</option>
                                                            <option value="norwegian">Norwegian</option>
                                                            <option value="omani">Omani</option>
                                                            <option value="pakistani">Pakistani</option>
                                                            <option value="palauan">Palauan</option>
                                                            <option value="panamanian">Panamanian</option>
                                                            <option value="papua new guinean">Papua New Guinean</option>
                                                            <option value="paraguayan">Paraguayan</option>
                                                            <option value="peruvian">Peruvian</option>
                                                            <option value="polish">Polish</option>
                                                            <option value="portuguese">Portuguese</option>
                                                            <option value="qatari">Qatari</option>
                                                            <option value="romanian">Romanian</option>
                                                            <option value="russian">Russian</option>
                                                            <option value="rwandan">Rwandan</option>
                                                            <option value="saint lucian">Saint Lucian</option>
                                                            <option value="salvadoran">Salvadoran</option>
                                                            <option value="samoan">Samoan</option>
                                                            <option value="san marinese">San Marinese</option>
                                                            <option value="sao tomean">Sao Tomean</option>
                                                            <option value="saudi">Saudi</option>
                                                            <option value="scottish">Scottish</option>
                                                            <option value="senegalese">Senegalese</option>
                                                            <option value="serbian">Serbian</option>
                                                            <option value="seychellois">Seychellois</option>
                                                            <option value="sierra leonean">Sierra Leonean</option>
                                                            <option value="singaporean">Singaporean</option>
                                                            <option value="slovakian">Slovakian</option>
                                                            <option value="slovenian">Slovenian</option>
                                                            <option value="solomon islander">Solomon Islander</option>
                                                            <option value="somali">Somali</option>
                                                            <option value="south african">South African</option>
                                                            <option value="south korean">South Korean</option>
                                                            <option value="spanish">Spanish</option>
                                                            <option value="sri lankan">Sri Lankan</option>
                                                            <option value="sudanese">Sudanese</option>
                                                            <option value="surinamer">Surinamer</option>
                                                            <option value="swazi">Swazi</option>
                                                            <option value="swedish">Swedish</option>
                                                            <option value="swiss">Swiss</option>
                                                            <option value="syrian">Syrian</option>
                                                            <option value="taiwanese">Taiwanese</option>
                                                            <option value="tajik">Tajik</option>
                                                            <option value="tanzanian">Tanzanian</option>
                                                            <option value="thai">Thai</option>
                                                            <option value="togolese">Togolese</option>
                                                            <option value="tongan">Tongan</option>
                                                            <option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
                                                            <option value="tunisian">Tunisian</option>
                                                            <option value="turkish">Turkish</option>
                                                            <option value="tuvaluan">Tuvaluan</option>
                                                            <option value="ugandan">Ugandan</option>
                                                            <option value="ukrainian">Ukrainian</option>
                                                            <option value="uruguayan">Uruguayan</option>
                                                            <option value="uzbekistani">Uzbekistani</option>
                                                            <option value="venezuelan">Venezuelan</option>
                                                            <option value="vietnamese">Vietnamese</option>
                                                            <option value="welsh">Welsh</option>
                                                            <option value="yemenite">Yemenite</option>
                                                            <option value="zambian">Zambian</option>
                                                            <option value="zimbabwean">Zimbabwean</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="maritalStatus">{{ 'Marital Status' }}</label> <br>
                                                        <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                                        <select class="form-inline" name="maritalStatus" class="js-example-basic-multiple">
                                                            <option value="married">married</option>
                                                            <option value="single">single</option>
                                                            <option value="divorced">divorced</option>
                                                            <option value="separated">separated</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-4 ">
                                                        <label for="gender">{{ 'Gender' }}</label> <br>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" value="male">
                                                            <label class="form-check-label" for="gender">Male</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" name="gender" value="female">
                                                            <label class="form-check-label" for="gender">Female</label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-top my-3"></div>

                                <!-- contact Info -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="questionThree">
                                        <h5 class="panel-title">
                                            <h5 class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerThree" aria-expanded="true" aria-controls="answerThree">
                                                Contact Information
                                            </h5>
                                        </h5>
                                    </div>
                                    <div id="answerThree" class="panel-collapse collapse show in" role="tabpanel" aria-labelledby="questionThree">
                                        <div class="panel-body">
                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="cellPhone">{{ 'Cell Phone' }}</label>
                                                        <input id="cellPhone" class="form-control" type="number" name="cellPhone" placeholder="+966-55-555-5555" value="{{ old('cell_phone') }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="pagerNumber">{{ 'Pager Number' }}</label>
                                                        <input id="pagerNumber" class="form-control" type="number" name="pagerNumber" placeholder="123456" value="{{ old('pager_number') }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="extension">{{ 'extension' }}</label>
                                                        <input id="extension" type="number" class="form-control" name="extension" value="{{ old('extension') }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="nghaEmail">{{ 'NGHA Email' }}</label>
                                                        <input id="nghaEmail" class="form-control" type="email" name="nghaEmail" placeholder="example@ngha.med.sa" value="{{ old('ngha_email') }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="ksauhsEmail">{{ 'KSAU-HS Email' }}</label>
                                                        <input id="ksauhsEmail" class="form-control" type="email" name="ksauhsEmail" placeholder="example@ksau-hs.edu.sa" value="{{ old('ksauhs_email') }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="personalEmail">{{ 'Personal Email' }}</label>
                                                        <input id="personalEmail" type="email" class="form-control" name="personalEmail" value="{{ old('personal_email') }}">
                                                    </div>
                                                </div>
                                            </fieldset>
                                        </div>
                                    </div>
                                </div>

                                <div class="border-top my-3"></div>
                                <!-- educational Info -->
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="questionFour">
                                        <h5 class="panel-title">
                                            <h5 class="collapsed" data-toggle="collapse" data-parent="#faq" href="#answerFour" aria-expanded="false" aria-controls="answerFour">
                                                Educational Information
                                            </h5>
                                        </h5>
                                    </div>
                                    <div id="answerFour" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="questionFour">
                                        <div class="panel-body">

                                            <fieldset>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="majorField">{{ 'Major Field' }}</label>
                                                        <input id="majorField" class="form-control" type="text" name="majorField" value="{{ old('major_field') }}">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="subspecialtyField">{{ 'Subspecialty Field' }}</label>
                                                        <input id="subspecialtyField" class="form-control" type="text" name="subspecialtyField" value="{{ old('subspecialty_field') }}">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="degreeName">{{ 'Degree Name' }}</label>
                                                        <input id="degreeName" type="text" class="form-control" name="degreeName" value="{{ old('degree_name')  }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="graduateInstitution">{{ 'Graduate Institution'  }}</label>
                                                        <input id="graduateInstitution" class="form-control" type="text" name="graduateInstitution" placeholder="King Saud bin Abdulaziz for Heath Sciences" value="{{ old('ngha_email')  }}">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="year">{{ 'Graduated Year'  }}</label>
                                                        <input id="year" class="form-control" type="number" name="year" placeholder="2012" value="{{ old('year') }}">
                                                    </div>
                                                </div>


                                            </fieldset>

                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">ADD</button>

                    </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function() {
        $("#fullTime").click(function() {
            if ($(this).is(":checked")) {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
</script>