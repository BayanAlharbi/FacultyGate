@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ __('Faculty Member') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('faculty.update', $faculty->id) }}">
                        @method('PATCH')
                        @csrf
                        <!--  -->
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="english_name">{{ ('English Name:') }}</label>
                                    <input type="text" class="form-control" name="english_name" value="{{ $faculty->english_name }}" />
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="arabic_name">{{ ('Arabic Name:') }}</label>
                                    <input type="text" class="form-control" name="arabic_name" value="{{ $faculty->arabic_name }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="badge">{{ ('Badge') }}</label>
                                    <input id="badge" class="form-control" type="text" name="badge" value="{{ $faculty->badge }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="academic_rank">{{ __('Academic Rank') }}</label>
                                    <input type="text" class="form-control" name="academic_rank" value="{{ $faculty->academic_rank }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="admin_position">{{ __('Admin Position') }}</label>
                                    <input type="text" class="form-control" name="admin_position" value="{{ $faculty->admin_position }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="joining_date">{{ __('Joining Date') }}</label>
                                    <input type="date" class="form-control" name="joining_date" value="{{ $faculty->joining_date }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="promotion_date">{{ __('Promotion Date') }}</label>
                                    <input type="date" class="form-control" name="promotion_date" value="{{ $faculty->promotion_date }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="last_working_date">{{ __('Last Working Date') }}</label>
                                    <input type="date" class="form-control" name="last_working_date" value="{{ $faculty->last_working_date }}" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="border-top my-3"></div>
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cell_phone">{{ __('Cell Phone') }}</label>
                                    <input type="number" class="form-control" name="cell_phone" value="{!!$faculty->ContactInfo->cell_phone !!}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="pager_number">{{ __('Pager Number') }}</label>
                                    <input type="number" class="form-control" name="pager_number" value="{{ $faculty->ContactInfo->pager_number }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="extension">{{ __('extension') }}</label>
                                    <input type="number" class="form-control" name="extension" value="{{ $faculty->ContactInfo->extension }}" />
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="ngha_email">{{ __('NGHA Email') }}</label>
                                    <input type="email" class="form-control" name="ngha_email" value="{{ $faculty->ContactInfo->ngha_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="ksauhs_email">{{ __('KSAU-HS Email') }}</label>
                                    <input type="email" class="form-control" name="ksauhs_email" value="{{ $faculty->ContactInfo->ksauhs_email }}" />
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="personal_email">{{ __('Personal Email') }}</label>
                                    <input type="email" class="form-control" name="personal_email" value="{{ $faculty->ContactInfo->personal_email }}" />
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
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
<!-- <div class="form-group">
                            <label for="name">Arabic name</label>
                            <input type="text" class="form-control" name="arabic_name" value="{{ $faculty->arabic_name }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">English name</label>
                            <input type="text" class="form-control" name="english_name" value="{{ $faculty->english_name }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Badge</label>
                            <input type="text" class="form-control" name="badge" value="{{ $faculty->badge }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Academic Rank</label>
                            <input type="text" class="form-control" name="academic_rank" value="{{ $faculty->academic_rank }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Admin Position</label>
                            <input type="text" class="form-control" name="admin_position" value="{{ $faculty->admin_position }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Joining Date</label>
                            <input type="date" class="form-control" name="joining_date" value="{{ $faculty->joining_date }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Promotion Date</label>
                            <input type="date" class="form-control" name="promotion_date" value="{{ $faculty->promotion_date }}" />
                        </div>
                        <div class="form-group">
                            <label for="name">Last Working Date</label>
                            <input type="date" class="form-control" name="last_working_date" value="{{ $faculty->last_working_date }}" />
                        </div> -->