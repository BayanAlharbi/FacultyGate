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
                        <!-- 
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
                    </form> -->
                        <form>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="En_name">{{ ('English Name:') }}</label>
                                        <input id="En_name" class="form-control" type="text" name="En_name" value="{{ old('name') }}" placeholder="english full name" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Ar_name">{{ ('Arabic Name:') }}</label>
                                        <input id="Ar_name" class="form-control" type="text" name="Ar_name" value="{{ old('name') }}" placeholder="arabic full name" required autocomplete="name" autofocus>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="badge">{{ ('Badge') }}</label>
                                        <input id="badge" class="form-control" type="text" name="badge" value="{{ old('badge') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="academic_rank">{{ __('Academic Rank') }}</label>
                                        <input id="academic_rank" class="form-control" type="text" name="academic_rank" value="{{ old('academic_rank') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="admin_position">{{ __('Admin Position') }}</label>
                                        <input id="admin_position" type="text" class="form-control" name="admin_position" value="{{ old('admin_position') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="joining_date">{{ __('Joining Date') }}</label>
                                        <input id="joining_date" class="form-control" type="date" name="joining_date" placeholder="dd/mm/yyyy" value="{{ old('joining_date') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="promotion_date">{{ __('Promotion Date') }}</label>
                                        <input id="promotion_date" class="form-control" type="date" name="promotion_date" placeholder="dd/mm/yyyy" value="{{ old('promotion_date') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="last_working_date">{{ __('Last Working Date') }}</label>
                                        <input id="last_working_date" type="date" class="form-control" name="last_working_date" value="{{ old('last_working_date') }}">
                                    </div>
                                </div>
                            </fieldset>
                            <div class="border-top my-3"></div>
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="cell_phone">{{ __('Cell Phone') }}</label>
                                        <input id="cell_phone" class="form-control" type="text" name="cell_phone" placeholder="+966-55-555-5555" value="{{ old('cell_phone') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="pager_number">{{ __('Pager Number') }}</label>
                                        <input id="pager_number" class="form-control" type="text" name="pager_number" placeholder="123456" value="{{ old('pager_number') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="extension">{{ __('extension') }}</label>
                                        <input id="extension" type="text" class="form-control" name="extension" value="{{ old('extension') }}">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="ngha_email">{{ __('NGHA Email') }}</label>
                                        <input id="ngha_email" class="form-control" type="email" name="ngha_email" placeholder="example@ngha.med.sa" value="{{ old('ngha_email') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="ksauhs_email">{{ __('KSAU-HS Email') }}</label>
                                        <input id="ksauhs_email" class="form-control" type="email" name="ksauhs_email" placeholder="example@ksau-hs.edu.sa" value="{{ old('ksauhs_email') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="personal_email">{{ __('Personal Email') }}</label>
                                        <input id="personal_email" type="email" class="form-control" name="personal_email" value="{{ old('personal_email') }}">
                                    </div>
                                </div>
                            </fieldset>
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection