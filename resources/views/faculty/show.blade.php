@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Faculty</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Community</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Researches</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <div class=" card-body">
                            <h5 class="card-title">{{(' Faculty Information')}}</h5>
                            <dl class="row">
                                <dt class="col-sm-4">English Name:</dt>
                                <dd class="col-sm-6"> {{ $faculty->english_name }}</dd>
                                <dt class="col-sm-4">Arabic Name:</dt>
                                <dd class="col-sm-6"> {{ $faculty->arabic_name }}</dd>
                                <dt class="col-sm-4">Badge:</dt>
                                <dd class="col-sm-6"> {{$faculty->badge }}</dd>
                                <dt class="col-sm-4">Academic Rank:</dt>
                                <dd class="col-sm-6"> {{$faculty->academic_rank }}</dd>
                                <dt class="col-sm-4">Admin Position:</dt>
                                <dd class="col-sm-6"> {{$faculty->admin_position }}</dd>
                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-6"> {{$faculty->status }}</dd>
                                <dt class="col-sm-4">Full-Time:</dt>
                                @if($faculty->full_time==1)
                                <dd class="col-sm-6">Yes</dd>
                                @else
                                <dd class="col-sm-6">No</dd>
                                @endif
                                <dt class="col-sm-4">Joining Date:</dt>
                                <dd class="col-sm-6"> {{$faculty->joining_date }}</dd>
                                <dt class="col-sm-4">Promotion Date:</dt>
                                <dd class="col-sm-6"> {{$faculty->promotion_date }}</dd>
                                <dt class="col-sm-4">Last Working Date:</dt>
                                <dd class="col-sm-6"> {{$faculty->last_working_date }}</dd>
                            </dl>
                        </div>
                        <!-- full time  -->
                        @if($faculty->full_time =='1')
                        <div class="card-body">
                            <h5 class="card-title">{{ ('Full-Time Faculty Details') }}</h5>
                            <dl class="row">
                                <dt class="col-sm-4">Yearly Appraisal:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->yearly_appraisal }}</dd>
                                <dt class="col-sm-4">Prof. and Business Leave Attend:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->business_leave }}</dd>
                                <dt class="col-sm-4">Administrative Duties:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->administrative_duties}}</dd>
                                <dt class="col-sm-4">Number Of Invigilator:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->number_of_invigilator }}</dd>
                                <dt class="col-sm-4">Total Invigilator Hour:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->total_invigilator_hour }}</dd>
                                <dt class="col-sm-4">Committee Membership:</dt>
                                <dd class="col-sm-6"> {{$faculty->FullTime->committee_membership}}</dd>
                            </dl>
                        </div>
                        @endif
                        <!-- demographic Info -->
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Demographic Information') }}</h5>
                            <dl class="row">
                                <dt class="col-sm-4">Nationality:</dt>
                                <dd class="col-sm-6"> {{$faculty->DemographicInfo->nationality }}</dd>
                                <dt class="col-sm-4">National Id:</dt>
                                <dd class="col-sm-6"> {{$faculty->DemographicInfo->national_id }}</dd>
                                <dt class="col-sm-4">Gender:</dt>
                                <dd class="col-sm-6"> {{$faculty->DemographicInfo->gender }}</dd>
                                <dt class="col-sm-4">Marital Status:</dt>
                                <dd class="col-sm-6"> {{$faculty->DemographicInfo->marital_status }}</dd>
                                <dt class="col-sm-4">Date of Birth:</dt>
                                <dd class="col-sm-6"> {{$faculty->DemographicInfo->date_of_birth }}</dd>
                            </dl>
                        </div>
                        <!-- contact info -->
                        <div class="card-body">
                            <h5 class="card-title">{{ __('Contact Information') }}</h5>
                            <dl class="row">
                                <div class="border-top my-4"></div>
                                <dt class="col-sm-4">Cell Phone:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->cell_phone }}</dd>
                                <dt class="col-sm-4">Pager Number:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->pager_number }}</dd>
                                <dt class="col-sm-4">Extension:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->extension }}</dd>
                                <dt class="col-sm-4">NGHA Email:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->ngha_email }}</dd>
                                <dt class="col-sm-4">KSAU-HS Email:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->ksauhs_email }}</dd>
                                <dt class="col-sm-4">Personal Email:</dt>
                                <dd class="col-sm-6"> {{$faculty->ContactInfo->personal_email }}</dd>
                            </dl>
                        </div>
                        <!-- EDUCATIONAL BACKGROUND -->
                        <div class="card-body">

                            <h5 class="card-title">{{ __('Educational Background') }}</h5>
                            <dl class="row">
                                @foreach($faculty->EducationalBackground as $edu)
                                <div class="border-top my-4"></div>
                                <dt class="col-sm-4">Major Field:</dt>
                                <dd class="col-sm-6"> {{$edu->major_field }}</dd>
                                <dt class="col-sm-4">Subspecialty Field:</dt>
                                <dd class="col-sm-6"> {{$edu->subspecialty_field }}</dd>
                                <dt class="col-sm-4">Degree Name:</dt>
                                <dd class="col-sm-6"> {{$edu->degree_name }}</dd>
                                <dt class="col-sm-4">Graduate Institution:</dt>
                                <dd class="col-sm-6"> {{$edu->graduate_institution }}</dd>
                                <dt class="col-sm-4">Year:</dt>
                                <dd class="col-sm-6"> {{$edu->year }}</dd>
                                @endforeach
                            </dl>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <div class=" card-body">
                            @if(empty($communities))
                            <h6 class="card-subtitle mb-2 text-muted">No Community Activity Found</h6>
                            @else
                            @foreach($communities as $community)
                            <dl class="row">
                                <dt class="col-sm-5">Event Name:</dt>
                                <dd class="col-sm-6">{{$community->event_name}}</dd>
                                <dt class="col-sm-5">Event Date:</dt>
                                <dd class="col-sm-6">{{$community->event_date}}</dd>
                                <dt class="col-sm-5">Target Audience:</dt>
                                <dd class="col-sm-6"> {{$community->target_audience }}</dd>
                                <dt class="col-sm-5">Number of Participated Students:</dt>
                                <dd class="col-sm-6"> {{$community->participated_students }}</dd>
                                <dt class="col-sm-5">Number of Participated Faculties:</dt>
                                <dd class="col-sm-6"> {{ $community->participated_faculties }}</dd>
                            </dl>
                            <!-- <div class="border-top my-3"></div> -->
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <div class=" card-body">
                            @if(empty($researches))
                            <h6 class="card-subtitle mb-2 text-muted">No Research Found</h6>
                            @else
                            @foreach($researches as $research)
                            <dl class="row">
                                <dt class="col-sm-5">No. of PBL Session taken:</dt>
                                <dd class="col-sm-6">{{$research->pbl }}</dd>
                                <dt class="col-sm-5">Research Proposal Supervised:</dt>
                                <dd class="col-sm-6">{{$research->research_proposal_supervised }}</dd>
                                <dt class="col-sm-5">Research Proposal COSupervised:</dt>
                                <dd class="col-sm-6"> {{$research->research_proposal_cosupervised }}</dd>
                                <dt class="col-sm-5">IRB Approval:</dt>
                                <dd class="col-sm-6"> {{$research->irb_approval }}</dd>
                                <dt class="col-sm-5">Research Presentation:</dt>
                                <dd class="col-sm-6"> {{$research->research_presentation }}</dd>
                                <dt class="col-sm-5">Publication:</dt>
                                <dd class="col-sm-6"> {{$research->publication }}</dd>
                                <dt class="col-sm-5">No. of Student Involvement:</dt>
                                <dd class="col-sm-6"> {{$research->student_involvement }}</dd>
                            </dl>
                            <!-- <div class="border-top my-3"></div> -->
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
<!-- <script>
    $('#profile-tab a').on('click', function(e) {
        e.preventDefault()
        $(this).tab('show')
    })
</script> -->