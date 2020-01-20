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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection