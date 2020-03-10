@extends('layouts.material')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{ ('Community Activity')  }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('community.update', $community->id) }}">
                        @method('PUT')
                        @csrf
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">{{('Faculty Name')}}</label>
                                    <select required class="form-control" name="id">
                                        @foreach ($faculties as $faculty )
                                        @if($faculty->english_name == $community->Faculty->english_name)
                                        <option value="{{$faculty->id}}" selected>{{ $faculty->english_name }}</option>
                                        @else
                                        <option value="{{$faculty->id}}">{{ $faculty->english_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="event_name">{{ ('Event Name') }}</label>
                                    <input class="form-control" type="text" name="event_name" value="{{$community->event_name }}" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="event_date">{{ ('Event Date') }}</label>
                                    <input class="form-control" name="event_date" type="date" value="{{$community->event_date}}" required autofocus>
                                </div>
                            </div>
                            <!--  event_name,event_date, target_audience,participated_students,participated_faculties -->
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="target_audience">{{ ('Target Audience') }}</label>
                                    <input class="form-inline" class="form-control" type="text" name="target_audience" value="{{$community->target_audience}}">
                                </div>
                                <div class=" form-group col-md-4">
                                    <label for="participated_students">{{ ('Number of Participated Students') }}</label>
                                    <input class="form-inline" class="form-control" type="number" name="participated_students" value="{{ $community->participated_students}}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="participated_faculties">{{ ('Number of Participated Faculties') }}</label>
                                    <input class="form-inline" type="number" class="form-control" name="participated_faculties" value="{{ $community->participated_faculties }}">
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