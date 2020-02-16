@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">


        <div class="col-md-8">
            <div class="card">
                <!--  event_name,event_date, target_audience,participated_students,participated_faculties -->
                <div class="card-body">
                    <div class="card-header">{{ __('Community Activity') }}</div>
                    <dl class="row">
                        <dt class="col-sm-5">faculty Name:</dt>
                        <dd class="col-sm-6"> {!! $community->Faculty->english_name !!}</dd>
                        <dt class="col-sm-5">Event Name:</dt>
                        <dd class="col-sm-6">{!!$community->event_name !!}</dd>
                        <dt class="col-sm-5">Event Date:</dt>
                        <dd class="col-sm-6">{!!$community->event_date !!}</dd>
                        <dt class="col-sm-5">Target Audience:</dt>
                        <dd class="col-sm-6"> {!!$community->target_audience !!}</dd>
                        <dt class="col-sm-5">Number of Participated Students:</dt>
                        <dd class="col-sm-6"> {!!$community->participated_students !!}</dd>
                        <dt class="col-sm-5">Number of Participated Faculties:</dt>
                        <dd class="col-sm-6"> {!!$community->participated_faculties !!}</dd>

                    </dl>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection