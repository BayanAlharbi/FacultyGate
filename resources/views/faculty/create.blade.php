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
                <div class="card-header">{{ __('Faculty Member') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('faculty.store') }}">
                        @csrf
                        <!-- 
                        <div class="form-group row">
                            <label for="Ar_name" class="col-md-4 col-form-label text-md-right">{{ ('Arabic Name') }}</label>

                            <div class="col-md-6">
                                <input id="Ar_name" type="text" name="Ar_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('English Name') }}</label>

                            <div class="col-md-6">
                                <input id="En_name" type="text" name="En_name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="badge" class="col-md-4 col-form-label text-md-right">{{ ('Badge') }}</label>
                            <div class="col-md-6">
                                <input id="badge" type="text" name="badge" value="{{ old('badge') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="academic_rank" class="col-md-4 col-form-label text-md-right">{{ __('Academic Rank') }}</label>
                            <div class="col-md-6">
                                <input id="academic_rank" type="text" name="academic_rank" value="{{ old('academic_rank') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="admin_position" class="col-md-4 col-form-label text-md-right">{{ __('Admin Position') }}</label>
                            <div class="col-md-6">
                                <input id="admin_position" type="text" name="admin_position" value="{{ old('admin_position') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="joining_date" class="col-md-4 col-form-label text-md-right">{{ __('Joining Date') }}</label>
                            <div class="col-md-6">
                                <input id="joining_date" type="date" name="joining_date" value="{{ old('joining_date') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="promotion_date" class="col-md-4 col-form-label text-md-right">{{ __('Promotion Date') }}</label>
                            <div class="col-md-6">
                                <input id="promotion_date" type="date" name="promotion_date" value="{{ old('promotion_date') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_working_date" class="col-md-4 col-form-label text-md-right">{{ __('Last Working Date') }}</label>
                            <div class="col-md-6">
                                <input id="last_working_date" type="date" name="last_working_date" value="{{ old('last_working_date') }}">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>
                    </form> -->
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="En_name">{{ ('English Name:') }}</label>
                                        <input id="En_name" class="form-control" type="text" name="En_name" value="{{ old('name') }}" placeholder="english full name" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Ar_name">{{ ('Arabic Name:') }}</label>
                                        <input id="Ar_name" class="form-control" type="text" name="Ar_name" value="{{ old('name') }}" placeholder="arabic full name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="badge">{{ ('Badge') }}</label>
                                        <input id="badge" class="form-control" type="text" name="badge" value="{{ old('badge') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="academic_rank">{{ __('Academic Rank') }}</label>
                                        <input id="academic_rank" class="form-control" type="text" name="academic_rank" value="{{ old('academic_rank') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="admin_position">{{ __('Admin Position') }}</label>
                                        <input id="admin_position" type="text" class="form-control" name="admin_position" value="{{ old('admin_position') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="joining_date">{{ __('Joining Date') }}</label>
                                        <input id="joining_date" class="form-control" type="date" name="joining_date" placeholder="dd/mm/yyyy" value="{{ old('joining_date') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="promotion_date">{{ __('Promotion Date') }}</label>
                                        <input id="promotion_date" class="form-control" type="date" name="promotion_date" placeholder="dd/mm/yyyy" value="{{ old('promotion_date') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_working_date">{{ __('Last Working Date') }}</label>
                                        <input id="last_working_date" type="date" class="form-control" name="last_working_date" value="{{ old('last_working_date') }}">
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
                                        <select name="nationality" class="js-example-basic-multiple">
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
                                        <label for="national_id">{{ __('National Id') }}</label>
                                        <input id="national_id" class="form-control" type="text" name="national_id" placeholder="1111111111" value="{{ old('national_id') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="gender">{{ __('Gender') }}</label> <br>
                                        <input type="radio" name="gender" value="male" checked>Male
                                        <input type="radio" name="gender" value="female"> Female
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="marital_status">{{ __('Marital Status') }}</label> <br>
                                        <!-- <input id="nationality" class="form-control" type="text" name="nationality" value="{{ old('nationality') }}"> -->
                                        <select name="marital_status" class="js-example-basic-multiple">
                                            <option value="married">married</option>
                                            <option value="single">single</option>
                                            <option value="divorced">divorced</option>
                                            <option value="separated">separated</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="date_of_birth">{{ __('Date of Birth') }}</label>
                                        <input id="date_of_birth" class="form-control" type="date" name="date_of_birth" placeholder="dd/mm/yyyy" value="{{ old('date_of_birth') }}">
                                    </div>

                                </div>
                            </fieldset>
                            <!-- contact Info -->
                            <div class="border-top my-3"></div>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="cell_phone">{{ __('Cell Phone') }}</label>
                                        <input id="cell_phone" class="form-control" type="text" name="cell_phone" placeholder="+966-55-555-5555" value="{{ old('cell_phone') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pager_number">{{ __('Pager Number') }}</label>
                                        <input id="pager_number" class="form-control" type="text" name="pager_number" placeholder="123456" value="{{ old('pager_number') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="extension">{{ __('extension') }}</label>
                                        <input id="extension" type="text" class="form-control" name="extension" value="{{ old('extension') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ngha_email">{{ __('NGHA Email') }}</label>
                                        <input id="ngha_email" class="form-control" type="email" name="ngha_email" placeholder="example@ngha.med.sa" value="{{ old('ngha_email') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ksauhs_email">{{ __('KSAU-HS Email') }}</label>
                                        <input id="ksauhs_email" class="form-control" type="email" name="ksauhs_email" placeholder="example@ksau-hs.edu.sa" value="{{ old('ksauhs_email') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="personal_email">{{ __('Personal Email') }}</label>
                                        <input id="personal_email" type="email" class="form-control" name="personal_email" value="{{ old('personal_email') }}">
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection