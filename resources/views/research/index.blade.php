@extends('layouts.material')

@section('content')

<div class="row">
    <div class="col-md-12 align-items-center">

        <h4 class="card-title">All Researches</h4>
        <hr>
        <div class="row">
            <div class="col">
                <a class="btn btn-primary" href="{{ route('research.create')}}" role="button">New +</a>
            </div>
        </div>
        <button type="button" class="btn btn-link"></button>

        <div class="card uper">
            <table class="footable table m-b-0 toggle-circle table-striped" data-sort="false">
                <thead>
                    <tr>
                        <td>Faculty Name</td>
                        <td>No. of Pbl</td>
                        <td>Research Proposal Supervised</td>
                        <td>Research Proposal Cosupervised</td>
                        <td>IRB Approval</td>
                        <td>Research Presentation</td>
                        <td>Publication</td>
                        <td>Student Involvement</td>
                        <td colspan="2">Action</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach($researches as $research)


                    <td><a href="{{ route('research.show',$research->id)}}" title="{{ $research->Faculty->english_name}}">
                            @if($research->faculty_id != NULL)
                            {{$research->Faculty->english_name}}
                            @endif</a></td>
                    </td>
                    <!-- 'pbl','research_proposal_supervised','research_proposal_cosupervised','irb_approval','research_presentation','publication','student_involvement'); -->
                    <td>{{$research->pbl}}</td>
                    <td>{{$research->research_proposal_supervised}}</td>
                    <td>{{$research->research_proposal_cosupervised}}</td>
                    <td>{{$research->irb_approval}}</td>
                    <td>{{$research->research_presentation}}</td>
                    <td>{{$research->publication}}</td>
                    <td>{{$research->student_involvement}}</td>
                    <td><a href="{{ route('research.edit',$research->id)}}" class="btn btn-primary">Edit</a></td>
                    <td>
                        <form onsubmit="return confirm('Do you really want to delete?');" action="{{ route('research.destroy', $research->id)}}" method="post">
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