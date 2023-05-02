@extends('common.head')
@section('title')
    PASSFPO Services
@endsection
<style>
    table head tr {
        text-align:center;
    }
</style>
@section('content')
    <div class="container text-center">
        <h3><center>Contact Us</center></h3>
        <div class="row" >
            <div class="col-md-6">
                <div class="profile">
                    <img src="{{ asset('/img/avatar.png') }}" alt="{{ asset('/img/avatar.png') }}" width="200" height="200">
                    <h3>K.Perumal</h3>
                    <h>Indra Nagar,</h5>
                    <h6>Near veterinary hospital,</h6>
                    <h6>O.G.Halli,</h6>
                    <h6>Papparapatti.</h6>
                    <h6>Cell. 9994529674 </h6>
                </div>
            </div>
            <div class="col-md-6">
            <div class="profile">
                    <img src="{{ asset('/img/avatar.png') }}" alt="{{ asset('/img/avatar.png') }}" width="200" height="200">
                    <h3>K.Thenmozhi,</h3>
                    <h5>Near kasthuri theatre, </h5>
                    <h6>Papparapatti.</h6>
                    <h6>Cell. 9445430471 </h6>
                </div>
            </div>
        </div>
    </div>
@endsection