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
                        <div class="form-group">
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
                        </div>

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