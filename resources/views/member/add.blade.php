@extends('common.head')
@section('title')
    PASSFPO Add Member
@endsection

@section('content')
    <div class="container m-20">
        <h3><center>Farmer Member Registration</center></h3>
        <form action="{{route('member.save')}}" method="post" id="member-form">
            @csrf
            <div class="row">
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Please Enter Name">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="gender" class="form-label">Gender</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="mobile" class="form-label">Mobile</label>
                        <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Please Enter Mobile">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="aadhar" class="form-label">Aadhar Number</label>
                        <input type="text" name="aadhar" id="aadhar" class="form-control" placeholder="Please Enter Aadhar Number">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="village" class="form-label">Village</label>
                        <input type="text" name="village" id="village" class="form-control" placeholder="Please Enter Village Name">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="revenue_village" class="form-label">Revenue Villages</label>
                        <input type="text" name="revenue_village" id="revenue_village" class="form-control" placeholder="Please Enter Revenue Village">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="survey_number" class="form-label">Survey Number</label>
                        <input type="text" name="survey_number" id="survey_number" class="form-control" placeholder="Please Enter Survey Number">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="land_records_points" class="form-label">Land Records Points</label>
                        <input type="text" name="land_records_points" id="land_records_points" class="form-control" placeholder="Please Enter Land Records Points">
                    </div>
                </div>
           
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="bank_account_number" class="form-label">Bank Account Number</label>
                        <input type="text" name="bank_account_number" id="bank_account_number" class="form-control" placeholder="Please Enter Bank Account Number">
                    </div>
                </div>
                
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="bank_ifsc_code" class="form-label">Bank IFSC Code</label>
                        <input type="text" name="bank_ifsc_code" id="bank_ifsc_code" class="form-control" placeholder="Please Enter Bank IFSC Code">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="bank_branch_name" class="form-label">Bank Branch Name</label>
                        <input type="text" name="bank_branch_name" id="bank_branch_name" class="form-control" placeholder="Please Enter Bank Branch Name">
                    </div>
                </div>
                <div class="col-md-6 mt-30">
                    <div class="form-group">
                        <label for="bank_name" class="form-label">Bank Name</label>
                        <input type="text" name="bank_name" id="bank_name" class="form-control" placeholder="Please Enter Bank Name">
                    </div>
                </div>
                <div class="col-md-12 mt-30">
                    <div class="form-group text-center">
                        <a href="/member/add" class="btn btn-warning">Clear</a>
                        <input type="submit" class="btn btn-success" name="submit">
                    </div>
                </div>
        </form>
    </div>
<script>
    $( "#member-form" ).validate({
        rules: {
            name : { required: true, },
            gender : { required: true, },
            mobile : { required: true, },
            aadhar : { required: true, },
            village : { required: true, },
            revenue_village : { required: true, },
            survey_number : { required: true, },
            land_records_points : { required: true, },
            bank_account_number : { required: true, },
            bank_ifsc_code : { required: true, },
            bank_branch_name : { required: true, },
            bank_name : { required: true, },
        },
        messages : {
            name: {
                required: "Please Enter Valid Name"
            },
            gender : {
                required: "Please Select Gender"
            },
            mobile: {
                required: "Please Enter Valid Mobile Number"
            },
            aadhar: {
                required: "Please Enter Valid AAdhar Number"
            },
            survey_number: {
                required: "Please Enter Valid Survey Number"
            },
            village: {
                required: "Please Enter Valid Village Name"
            },
            
            revenue_village: {
                required: "Please Enter Valid Revenue Village Name"
            },
            land_records_points: {
                required: "Please Enter Valid Land Records Points"
            },
            bank_account_number: {
                required: "Please Enter Bank Account Number"
            },
            bank_ifsc_code: {
                required: "Please Enter Bank IFSC Code"
            },
            bank_branch_name: {
                required: "Please Enter Branch Name"
            },
            bank_name: {
                required: "Please Enter Bank Name"
            },
        }
});
</script>
@endsection
