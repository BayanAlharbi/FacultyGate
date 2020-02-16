@extends('layouts.app')

@section('content')

<div class='container'>
    <div class="row">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('community.create')}}" role="button">New +</a>
        </div>
    </div>
    <div class="card-header">
        All Community Activity
    </div>
    <table class="table">
        <thead>
            <tr>
                <td>Faculty Name</td>
                <td>Name of Event</td>
                <td>Event Date</td>
                <td>Target Audience</td>
                <td>Number of participated Students</td>
                <td>Number of participated Faculties</td>
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
@endsection