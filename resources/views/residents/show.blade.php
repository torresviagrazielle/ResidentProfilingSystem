@extends('layouts.app')

@section('content')
<style>
    span {
        color: red;
    }

    .card-header {
        color: white;
        background-color: gray;
    }
</style>
    
<div class="container">
    <!--HEADER-->
    <div class="form-inline">
        <a class="btn button btn-light mb-3" style="font-size: 20px; font-weight:bold;" href="/residents">
        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-arrow-left-short" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/></svg>  
        </a>
        <div class="form-group mb-2">
            <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">View Resident Record</h3>    
        </div>
    </div> <hr style="margin-top:-5px;">

    <div class="row justify-content-center">
        <div class="col-md-3 justify-content-center">
            <div class="card">       
                <div class="card-body"> 
                        @if ($resident->img)
                            <img src="{{ URL::asset('/storage/img/'.$resident->img) }}" alt="{{ $resident->img }}" style="width:190px; height:190px; position:flex; "/>
                        @else
                            No image available
                        @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">  
                <div class="card-header">Personal Information</div>   

                <div class="card-body">
                    Name : {{ $resident->lastname }}, {{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->extname }}<br>
                    Address : {{ $resident->house_num }} {{ $resident->street }}, {{ $resident->barangay }}, {{ $resident->city }}<br>
                    Citizenship : {{ $resident->citizenship }} <br>
                    Religion : {{ $resident->religion }} <br>
                    Sex : {{ $resident->sex }} <br>
                    Date of Birth : {{ $resident->birth_date }} <br>
                    Birth Place : {{ $resident->birth_place }} <br>
                    Age : {{ $resident->age }} <br>
                    Civil Status : {{ $resident->civil_status }} <br>
                    Profession/Occupation : {{ $resident->occupation }} <br>
                    Tin No. : {{ $resident->tin_num }} <br>
                    Period of Residence : {{ $resident->residence_period }} <br>
                    Contact No. : {{ $resident->contact_num }} <br>
                    Voter's ID No. : {{ $resident->voters_id }} <br>
                    Precint Assignment No. : {{ $resident->precint_num }} <br>
                    Created At : {{ $resident->created_at }}
                </div>
            </div>
        </div>
    </div>
    @include('/residents/transactions')
</div> 

    
@endsection