@extends('layouts.material')

@section('content')
<div class="row">
    <div class="col-md-12 align-items-center">

        <h4 class="card-title">Add Research</h4>
        <hr>
        <button type="button" class="btn btn-link"></button>

        <div class="card uper">

            <form method="POST" action="{{ route('research.store') }}">
                @csrf
                <form name="add_research" id="add_research">

                    <div class="card-body">
                        <!-- 'pbl','research_proposal_supervised','research_proposal_cosupervised','irb_approval','research_presentation','publication','student_involvement'); -->
                        <fieldset>
                            <div class="form-row">
                                <div class="form-group col-md-6">
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
                                <div class="form-group col-md-6">
                                    <label for="pbl">{{ ('No. of PBL Session taken') }}</label>
                                    <input id="pbl" class="form-control" type="number" name="pbl" placeholder="No. PBL Session taken" required autofocus>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="research_proposal_supervised">{{ ('No. of Research Proposal Supervised') }}</label>
                                    <input id="research_proposal_supervised" class="form-control" type="number" name="research_proposal_supervised" required autofocus>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="research_proposal_cosupervised">{{ ('No. of Research Proposal Co-supervised') }}</label>
                                    <input id="research_proposal_cosupervised" class="form-control" type="number" name="research_proposal_cosupervised" required autofocus>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="irb_approval">{{ ('IRB Approval') }}</label>
                                    <input class="form-inline" id="irb_approval" class="form-control" type="number" name="irb_approval">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="research_presentation">{{ __('Research Presentation') }}</label>
                                    <input class="form-inline" id="research_presentation" class="form-control" type="number" name="research_presentation">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="publication">{{ __('Publication') }}</label>
                                    <input class="form-inline" id="publication" type="number" class="form-control" name="publication">
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="student_involvement">{{ __('No. of Student Involvement') }}</label>
                                    <input class="form-inline" id="student_involvement" type="number" class="form-control" name="student_involvement">
                                </div>
                            </div>

                        </fieldset>
                        <button type="submit" class="btn btn-primary">ADD</button>
                    </div>
                </form>
            </form>
        </div>
    </div>
</div>
@endsection