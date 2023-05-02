@extends('common.head')
@section('title')
    PASSFPO Add Member
@endsection

@section('content')
    <div class="container m-20">
        <h3><center>Farmer Group Registration</center></h3>
        <form action="{{route('member.save')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-20">
                    <div class="form-group">
                        <label for="name_of_group" class="form-label">Name of Group</label>
                        <input type="text" name="name_of_group" id="name_of_group" class="form-control" placeholder="Please Enter Name of Group">
                    </div>
                </div>
                <div class="col-md-6 mt-20">
                    <div class="form-group">
                        <label for="name_of_village" class="form-label">Name of Village</label>
                        <input type="text" name="name_of_village" id="name_of_village" class="form-control" placeholder="Please Enter Name of Village">
                    </div>
                </div>
                <div class="col-md-6 mt-20">
                    <div class="form-group">
                        <label for="name_of_cluster" class="form-label">Name of Cluster</label>
                        <input type="text" name="name_of_cluster" id="name_of_cluster" class="form-control" placeholder="Please Enter Name of Cluster">
                    </div>
                </div>
                <div class="col-md-6 mt-20">
                    <div class="form-group">
                        <label for="name_of_district" class="form-label">Name of District</label>
                        <input type="text" name="name_of_district" id="name_of_district" class="form-control" placeholder="Please Enter Name of District">
                    </div>
                </div>
                <div class="col-md-12 mt-20">
                    <div class="form-group text-center">
                        <a href="/member/add" class="btn btn-warning">Clear</a>
                        <input type="submit" class="btn btn-success" name="submit">
                    </div>
                </div>
        </form>
    </div>
@endsection