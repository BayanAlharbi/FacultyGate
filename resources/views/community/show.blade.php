@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link " id="nav-faculty-tab" data-toggle="tab" href="#nav-faculty" role="tab" aria-controls="nav-faculty" aria-selected="false">Faculty</a>
                        <a class="nav-item nav-link active" id="nav-community-tab" data-toggle="tab" href="#nav-community" role="tab" aria-controls="nav-community" aria-selected="true">Community</a>
                        <a class="nav-item nav-link" id="nav-research-tab" data-toggle="tab" href="#nav-research" role="tab" aria-controls="nav-research" aria-selected="false">Researches</a>
                    </div>
                </nav>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-community" role="tabpanel" aria-labelledby="nav-community-tab">
                        <div class=" card-body">
                            <dl class="row">
                                <dt class="col-sm-5">Event Name:</dt>
                                <dd class="col-sm-6">{{ $community->event_name }}</dd>
                                <dt class="col-sm-5">Event Date:</dt>
                                <dd class="col-sm-6">{{ $community->event_date }}</dd>
                                <dt class="col-sm-5">Target Audience:</dt>
                                <dd class="col-sm-6"> {{ $community->target_audience }}</dd>
                                <dt class="col-sm-5">Number of Participated Students:</dt>
                                <dd class="col-sm-6"> {{ $community->participated_students }}</dd>
                                <dt class="col-sm-5">Number of Participated Faculties:</dt>
                                <dd class="col-sm-6"> {{ $community->participated_faculties }}</dd>
                            </dl>
                            <div class="border-top my-3"></div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-research" role="tabpanel" aria-labelledby="nav-research-tab">
                        <div class=" card-body">
                            @if($researches->isEmpty())
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
                            <div class="border-top my-3"></div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                    <!-- faculty -->
                    <div class="tab-pane fade" id="nav-faculty" role="tabpanel" aria-labelledby="nav-faculty-tab">
                        <div class=" card-body">
                            <dl class="row">
                                <dt class="col-sm-4">English Name:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->english_name }}</dd>
                                <dt class="col-sm-4">Arabic Name:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->arabic_name }}</dd>
                                <dt class="col-sm-4">Badge:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->badge }}</dd>
                                <dt class="col-sm-4">Academic Rank:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->academic_rank }}</dd>
                                <dt class="col-sm-4">Admin Position:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->admin_position }}</dd>
                                <dt class="col-sm-4">Status:</dt>
                                <dd class="col-sm-6"> {{ $community->Faculty->status }}</dd>
                            </dl>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection