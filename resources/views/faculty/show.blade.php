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
                        <dt class="col-sm-3">English Name:</dt>
                        <dd class="col-sm-9"> {!! $faculty->english_name !!}</dd>
                        <dt class="col-sm-3">Arabic Name:</dt>
                        <dd class="col-sm-9">{!! $faculty->arabic_name !!}</dd>
                        <dt class="col-sm-3">Badge:</dt>
                        <dd class="col-sm-9">{!!$faculty->badge !!}</dd>
                        <dt class="col-sm-3">Academic Rank:</dt>
                        <dd class="col-sm-9">{!!$faculty->academic_rank !!}</dd>
                        <dt class="col-sm-3">Admin Position:</dt>
                        <dd class="col-sm-9"> {!!$faculty->admin_position !!}</dd>
                        <dt class="col-sm-3">Joining Date:</dt>
                        <dd class="col-sm-9"> {!!$faculty->joining_date !!}</dd>
                        <dt class="col-sm-3">Promotion Date:</dt>
                        <dd class="col-sm-9"> {!!$faculty->promotion_date !!}</dd>
                        <dt class="col-sm-3">Last Working Date:</dt>
                        <dd class="col-sm-9"> {!!$faculty->last_working_date !!}</dd>
                    </dl>
                </div>
                <!-- demographic Info -->
                <div class="card-body">
                    <div class="card-header">{{ __('Demographic Information') }}</div>
                    <dl class="row">
                        <dt class="col-sm-3">Nationality:</dt>
                        <dd class="col-sm-9"> {!!$faculty->DemographicInfo->nationality !!}</dd>
                        <dt class="col-sm-3">National Id:</dt>
                        <dd class="col-sm-9"> {!!$faculty->DemographicInfo->national_id !!}</dd>
                        <dt class="col-sm-3">Gender:</dt>
                        <dd class="col-sm-9"> {!!$faculty->DemographicInfo->gender !!}</dd>
                        <dt class="col-sm-3">Marital Status:</dt>
                        <dd class="col-sm-9"> {!!$faculty->DemographicInfo->marital_status !!}</dd>
                        <dt class="col-sm-3">Date of Birth:</dt>
                        <dd class="col-sm-9"> {!!$faculty->DemographicInfo->date_of_birth !!}</dd>
                    </dl>
                </div>
                <!-- contact info -->
                <div class="card-body">
                    <div class="card-header">{{ __('Contact Information') }}</div>
                    <dl class="row">
                        <div class="border-top my-3"></div>
                        <dt class="col-sm-3">Cell Phone:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->cell_phone !!}</dd>
                        <dt class="col-sm-3">Pager Number:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->pager_number !!}</dd>
                        <dt class="col-sm-3">Extension:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->extension !!}</dd>
                        <dt class="col-sm-3">NGHA Email:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->ngha_email !!}</dd>
                        <dt class="col-sm-3">KSAU-HS Email:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->ksauhs_email !!}</dd>
                        <dt class="col-sm-3">Personal Email:</dt>
                        <dd class="col-sm-9"> {!!$faculty->ContactInfo->personal_email !!}</dd>


                    </dl>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection