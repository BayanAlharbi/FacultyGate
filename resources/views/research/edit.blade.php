@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            <div class="card">

                <div class="card-header">{{(' Research') }}</div>

                <div class="card-body">
                    <form method="post" action="{{ route('research.update', $research->id) }}">
                        @method('PATCH')
                        @csrf
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="exampleFormControlSelect1">{{('Faculty Name')}}</label>
                                    <select required class="form-control" name="faculty_id">
                                        @foreach ($faculties as $faculty )
                                        @if($faculty->english_name == $research->Faculty->english_name)
                                        <option value="{{$faculty->id}}" selected>{{ $faculty->english_name }}</option>
                                        @else
                                        <option value="{{$faculty->id}}">{{ $faculty->english_name }}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="pbl">{{ 'PBL' }}</label>
                                    <input class="form-control" type="number" name="pbl" value="{{$research->pbl }}" required autofocus>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="research_proposal_supervised">{{ 'Research Proposal Supervised '}}</label>
                                    <input class="form-control" name="research_proposal_supervised" type="number" value="{{$research->research_proposal_supervised}}" required autofocus>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="research_proposal_cosupervised">{{ 'Research Proposal Co-supervised '}}</label>
                                    <input class="form-inline" class="form-control" type="number" name="research_proposal_cosupervised" value="{{$research->research_proposal_cosupervised}}">
                                </div>
                                <div class=" form-group col-md-4">
                                    <label for="irb_approval">{{ 'IRB Approval' }}</label>
                                    <input class="form-inline" class="form-control" type="number" name="irb_approval" value="{{ $research->irb_approval}}">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="research_presentation">{{ 'Research Presentation' }}</label>
                                    <input class="form-inline" type="number" class="form-control" name="research_presentation" value="{{ $research->research_presentation }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="publication">{{ 'Publication' }}</label>
                                    <input class="form-inline" type="number" class="form-control" name="publication" value="{{ $research->publication }}">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="student_involvement">{{ 'Student Involvement' }}</label>
                                    <input class="form-inline" type="number" class="form-control" name="student_involvement" value="{{ $research->student_involvement }}">
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