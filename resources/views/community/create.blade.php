@extends('layouts.app')

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
                                        <label for="eventName">{{ ('Event Name') }}</label>
                                        <input id="eventName" class="form-control" type="text" name="eventName" placeholder="event name" required autocomplete="name" autofocus>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="eventDate">{{ ('Event Date') }}</label>
                                        <input id="eventDate" class="form-control" type="date" name="eventDate" required autofocus>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="targetAudience">{{ ('Target Audience') }}</label>
                                        <input class="form-inline" id="targetAudience" class="form-control" type="text" name="targetAudience" value="{{ old('target_audience') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="participatedStudents">{{ __('Number of Participated Students') }}</label>
                                        <input class="form-inline" id="participatedStudents" class="form-control" type="text" name="participatedStudents" value="{{ old('participated_students') }}">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="participatedFaculties">{{ __('Number of Participated Faculties') }}</label>
                                        <input class="form-inline" id="participatedFaculties" type="text" class="form-control" name="participatedFaculties" value="{{ old('participated_faculties') }}">
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