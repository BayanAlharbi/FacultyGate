@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ ('Community Activity')  }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('community.update', $community->id) }}">
                        @method('PATCH')
                        @csrf
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">{{('Faculty Name')}}</label>
                                    <select required class="form-control" name="facultyId">
                                        @foreach ($faculties as $faculty )
                                        @if ($community->faculty_id == $faculty->id)
                                        <option selected value=" {{$faculty->id}}"> {{ $community->Faculty->english_name }}</option>
                                        @else
                                        <option value="{{$faculty->id}}">{{ $community->Faculty->english_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="eventName">{{ ('Event Name') }}</label>
                                    <input class="form-control" type="text" name="eventName" value="{{$community->event_name }}" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="eventDate">{{ ('Event Date') }}</label>
                                    <input class="form-control" name="eventDate" type="date" value="{{$community->event_date}}" required autofocus>
                                </div>
                            </div>
                            <!--  event_name,event_date, target_audience,participated_students,participated_faculties -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="targetAudience">{{ ('Target Audience') }}</label>
                                    <input class="form-inline" class="form-control" type="text" name="targetAudience" value="{{$community->target_audience}}">
                                </div>
                                <div class=" form-group col-md-4">
                                    <label for="participatedStudents">{{ ('Number of Participated Students') }}</label>
                                    <input class="form-inline" class="form-control" type="number" name="participatedStudents" value="{{ $community->participated_students}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="participatedFaculties">{{ ('Number of Participated Faculties') }}</label>
                                    <input class="form-inline" type="number" class="form-control" name="participatedFaculties" value="{{ $community->participated_faculties }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection