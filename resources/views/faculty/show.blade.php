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
                        <h6 class="card-subtitle mb-2 text-muted">English Name: {!! $faculty->english_name !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Arabic Name: {!! $faculty->arabic_name !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Badge: {!!$faculty->badge !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Academic Rank: {!!$faculty->academic_rank !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Admin Position: {!!$faculty->admin_position !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Joining Date: {!!$faculty->joining_date !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Promotion Date: {!!$faculty->promotion_date !!}</h6>
                    </div>
                    <div class="card-body">
                        <h6 class="card-subtitle mb-2 text-muted">Last Working Date: {!!$faculty->last_working_date !!}</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection