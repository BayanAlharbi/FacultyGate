@extends('layouts.material')

@section('content')
<div class="row">
    <div class="col-md-12 align-items-center">
        <h4 class="card-title">Researches</h4>
        <button type="button" class="btn btn-link"></button>
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a href="#faculty" data-toggle="tab" aria-expanded="false" class="nav-link ">
                    <i class="mdi mdi-home-variant d-lg-none d-block mr-1 "></i>
                    <span class=" d-none d-lg-block">Faculty</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#community" data-toggle="tab" aria-expanded="false" class="nav-link ">
                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Communities</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="#research" data-toggle="tab" aria-expanded="true" class="nav-link active">
                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Researches</span>
                </a>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content">
                <div class="tab-pane show active" id="research">
                    <div class=" card-body">
                        @if(empty($research))
                        No Research for this faculty
                        @else
                        <dl class="row">
                            <dt class="col-sm-5">No. of PBL Session taken:</dt>
                            <dd class="col-sm-6">{{ $research->pbl }}</dd>
                            <dt class="col-sm-5">Research Proposal Supervised:</dt>
                            <dd class="col-sm-6">{{ $research->research_proposal_supervised }}</dd>
                            <dt class="col-sm-5">Research Proposal COSupervised:</dt>
                            <dd class="col-sm-6"> {{ $research->research_proposal_cosupervised }}</dd>
                            <dt class="col-sm-5">IRB Approval:</dt>
                            <dd class="col-sm-6"> {{ $research->irb_approval }}</dd>
                            <dt class="col-sm-5">Research Presentation:</dt>
                            <dd class="col-sm-6"> {{ $research->research_presentation }}</dd>
                            <dt class="col-sm-5">Publication:</dt>
                            <dd class="col-sm-6"> {{ $research->publication }}</dd>
                            <dt class="col-sm-5">No. of Student Involvement:</dt>
                            <dd class="col-sm-6"> {{ $research->student_involvement }}</dd>
                        </dl>
                        <div class="border-top my-3"></div>
                        @endif
                    </div>
                </div>
                <!-- community -->
                <div class="tab-pane" id="community">
                    @if($communities->isEmpty())
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
                    <div class="border-top my-3"></div>
                    @endforeach
                    @endif
                </div>
                <!-- Faculty Info -->
                <div class="tab-pane" id="faculty">
                    <dl class="row">
                        <dt class="col-sm-4">English Name:</dt>
                        <dd class="col-sm-6"> {{ $research->Faculty->english_name }}</dd>
                        <dt class="col-sm-4">Arabic Name:</dt>
                        <dd class="col-sm-6"> {{ $research->Faculty->arabic_name }}</dd>
                        <dt class="col-sm-4">Badge:</dt>
                        <dd class="col-sm-6"> {{$research->Faculty->badge }}</dd>
                        <dt class="col-sm-4">Academic Rank:</dt>
                        <dd class="col-sm-6"> {{$research->Faculty->academic_rank }}</dd>
                        <dt class="col-sm-4">Admin Position:</dt>
                        <dd class="col-sm-6"> {{$research->Faculty->admin_position }}</dd>
                        <dt class="col-sm-4">Status:</dt>
                        <dd class="col-sm-6"> {{$research->Faculty->status }}</dd>
                    </dl>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection