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
</div>
@endsection