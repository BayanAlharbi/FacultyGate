@extends('layouts.material')

@section('content')
<div class="row">
    <div class="col-md-12 align-items-center">

        <h4 class="card-title">All Community Activity</h4>
        <hr>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('community.create')}}" role="button">New +</a>
            </div>
        </div>
        <button type="button" class="btn btn-link"></button>

        <div class="card uper">
            <table class="footable table m-b-0 toggle-circle table-striped" data-sort="false">
                <thead>
                    <tr>
                        <td>Faculty Name</td>
                        <td>Name of Event</td>
                        <td>Event Date</td>
                        <td>Target Audience</td>
                        <td>Number of participated Students</td>
                        <td>Number of participated Faculties</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <!--  event_name,event_date, target_audience,participated_students,participated_faculties -->
                <tbody>
                    @foreach($communities as $community)
                    <!-- <td>
                @if($community->faculty_id != NULL)
                {{$community->Faculty->english_name}}
                @endif -->

                    <td><a href="{{ route('community.show',$community->id)}}" title="{{ $community->Faculty->english_name}}">
                            @if($community->faculty_id != NULL)
                            {{$community->Faculty->english_name}}
                            @endif</a></td>
                    </td>

                    <td>{{$community->event_name}}</td>
                    <td>{{$community->event_date}}</td>
                    <td>{{$community->target_audience}}</td>
                    <td>{{$community->participated_students}}</td>
                    <td>{{$community->participated_faculties}}</td>
                    <td><a href="{{ route('community.edit',$community->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to delete?');" action="{{ route('community.destroy', $community->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection