@extends('layouts.material')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <form method="POST" action="{{ route('community.store') }}">
                    @csrf
                    <form name="add_community" id="add_community">

                        <div class="card-header">{{ __('Community') }}</div>
                        <div class="card-body">
                            <!-- add community information  -->
                            <!-- event_name,event_date, target_audience,participated_students,participated_faculties-->
                            <fieldset>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Faculty</label>
                                            <select required class="form-control" name="faculty_id">
                                                <option value="">Please Select Faculty</option>
                                                @foreach ($faculties as $faculty)
                                                <option value="{{$faculty->id}}">{{$faculty->english_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="event_name">{{ ('Event Name') }}</label>
                                        <input id="event-name" class="form-control" type="text" name="event_name" placeholder="event name" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="event-date">{{ ('Event Date') }}</label>
                                        <input id="event-date" class="form-control" type="date" name="event_date" required autofocus>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="target-audience">{{ ('Target Audience') }}</label>
                                        <input class="form-inline" id="target-audience" class="form-control" type="text" name="target_audience" value="{{ old('target_audience') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="participated-students">{{ __('Number of Participated Students') }}</label>
                                        <input class="form-inline" id="participated-students" class="form-control" type="text" name="participated_students" value="{{ old('participated_students') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="participated-faculties">{{ __('Number of Participated Faculties') }}</label>
                                        <input class="form-inline" id="participated-faculties" type="text" class="form-control" name="participated_faculties" value="{{ old('participated_faculties') }}">
                                    </div>
                                </div>

                            </fieldset>
                            <button type="submit" class="btn btn-primary">ADD</button>
                        </div>
            </div>
        </div>



        </form>
    </div>
</div>
@endsection