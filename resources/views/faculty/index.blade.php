@extends('layouts.material')

@section('content')
<div class="row">
    <div class="col-md-12 align-items-center">

        <h4 class="card-title">All Faculties</h4>
        <hr>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('faculty.create')}}" role="button">New +</a>
            </div>
        </div>
        <button type="button" class="btn btn-link"></button>
        <div class="card uper">
            <table class="footable table m-b-0 toggle-circle table-striped">
                <thead>
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Badge</td>
                        <td>Academic Rank</td>
                        <td>Admin Positions</td>
                        <td>Joining Date</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faculties as $faculty)
                    <tr>
                        <td>{{$faculty->id}}</td>
                        <td><a href="{{ route('faculty.show',$faculty->id)}}" title="{{$faculty->english_name}}"> {{$faculty->english_name}}</a></td>
                        <td>{{$faculty->badge}}</td>
                        <td>{{$faculty->academic_rank}}</td>
                        <td>{{$faculty->admin_position}}</td>
                        <td>{{$faculty->joining_date}}</td>
                        <td><a href="{{ route('faculty.edit',$faculty->id)}}" class="btn btn-primary">Edit</a></td>
                        <td>
                            <form onsubmit="return confirm('Do you really want to delete?');" action="{{ route('faculty.destroy', $faculty->id)}}" method="post">
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