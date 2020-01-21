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
                    <div class="card-body">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection