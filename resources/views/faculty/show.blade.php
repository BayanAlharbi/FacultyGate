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
                <div class="card-body">
                    <div class="card-header">{{ __('Faculty Information') }}</div>
                    <dl class="row">
                        <dt class="col-sm-4">English Name:</dt>
                        <dd class="col-sm-6"> {!! $faculty->english_name !!}</dd>
                        <dt class="col-sm-4">Arabic Name:</dt>
                        <dd class="col-sm-6">{!! $faculty->arabic_name !!}</dd>
                        <dt class="col-sm-4">Badge:</dt>
                        <dd class="col-sm-6">{!!$faculty->badge !!}</dd>
                        <dt class="col-sm-4">Academic Rank:</dt>
                        <dd class="col-sm-6">{!!$faculty->academic_rank !!}</dd>
                        <dt class="col-sm-4">Admin Position:</dt>
                        <dd class="col-sm-6"> {!!$faculty->admin_position !!}</dd>
                        <dt class="col-sm-4">Status:</dt>
                        <dd class="col-sm-6"> {!!$faculty->status !!}</dd>
                        <dt class="col-sm-4">Full-Time:</dt>
                        @if($faculty->full_time==1)
                        <dd class="col-sm-6">True</dd>
                        @else
                        <dd class="col-sm-6">False</dd>
                        @endif
                        <dt class="col-sm-4">Joining Date:</dt>
                        <dd class="col-sm-6"> {!!$faculty->joining_date !!}</dd>
                        <dt class="col-sm-4">Promotion Date:</dt>
                        <dd class="col-sm-6"> {!!$faculty->promotion_date !!}</dd>
                        <dt class="col-sm-4">Last Working Date:</dt>
                        <dd class="col-sm-6"> {!!$faculty->last_working_date !!}</dd>
                    </dl>
                </div>
                <!-- demographic Info -->
                <div class="card-body">
                    <div class="card-header">{{ __('Demographic Information') }}</div>
                    <dl class="row">
                        <dt class="col-sm-4">Nationality:</dt>
                        <dd class="col-sm-6"> {!!$faculty->DemographicInfo->nationality !!}</dd>
                        <dt class="col-sm-4">National Id:</dt>
                        <dd class="col-sm-6"> {!!$faculty->DemographicInfo->national_id !!}</dd>
                        <dt class="col-sm-4">Gender:</dt>
                        <dd class="col-sm-6"> {!!$faculty->DemographicInfo->gender !!}</dd>
                        <dt class="col-sm-4">Marital Status:</dt>
                        <dd class="col-sm-6"> {!!$faculty->DemographicInfo->marital_status !!}</dd>
                        <dt class="col-sm-4">Date of Birth:</dt>
                        <dd class="col-sm-6"> {!!$faculty->DemographicInfo->date_of_birth !!}</dd>
                    </dl>
                </div>
                <!-- contact info -->
                <div class="card-body">
                    <div class="card-header">{{ __('Contact Information') }}</div>
                    <dl class="row">
                        <div class="border-top my-4"></div>
                        <dt class="col-sm-4">Cell Phone:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->cell_phone !!}</dd>
                        <dt class="col-sm-4">Pager Number:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->pager_number !!}</dd>
                        <dt class="col-sm-4">Extension:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->extension !!}</dd>
                        <dt class="col-sm-4">NGHA Email:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->ngha_email !!}</dd>
                        <dt class="col-sm-4">KSAU-HS Email:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->ksauhs_email !!}</dd>
                        <dt class="col-sm-4">Personal Email:</dt>
                        <dd class="col-sm-6"> {!!$faculty->ContactInfo->personal_email !!}</dd>
                    </dl>
                </div>
                <!-- EDUCATIONAL BACKGROUND -->
                <div class="card-body">

                    <div class="card-header">{{ __('Educational Background') }}</div>
                    <dl class="row">
                        @foreach($faculty->EducationalBackground as $edu)
                        <div class="border-top my-4"></div>
                        <dt class="col-sm-4">Major Field:</dt>
                        <dd class="col-sm-6"> {!!$edu->major_field !!}</dd>
                        <dt class="col-sm-4">Subspecialty Field:</dt>
                        <dd class="col-sm-6"> {!!$edu->subspecialty_field !!}</dd>
                        <dt class="col-sm-4">Degree Name:</dt>
                        <dd class="col-sm-6"> {!!$edu->degree_name !!}</dd>
                        <dt class="col-sm-4">Graduate Institution:</dt>
                        <dd class="col-sm-6"> {!!$edu->graduate_institution !!}</dd>
                        <dt class="col-sm-4">Year:</dt>
                        <dd class="col-sm-6"> {!!$edu->year !!}</dd>
                        @endforeach
                    </dl>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection