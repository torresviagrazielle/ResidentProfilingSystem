@extends('layouts.app')

@section('content')
    
<div class="container">
    <a class="btn button btn-light" style="font-size: 20px; font-weight:bold;" href="/residents"><</a>
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">View Resident Record</h3>    
    <hr>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">       
                <div class="card-body">
                    Lastname : {{ $resident->lastname }} <br>
                    Firstname : {{ $resident->firstname }} <br>
                    Middlename : {{ $resident->middlename }} <br>
                    Extname : {{ $resident->extname }} <br>
                    House No. : {{ $resident->house_num }} <br>
                    Street : {{ $resident->street }} <br>
                    Barangay : {{ $resident->barangay }} <br>
                    City : {{ $resident->city }} <br>
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
                    Created At : {{ $resident->created_at }} <br>
                    Resident Image: 
                        @if ($resident->img)
                            <img src="{{ URL::asset('/storage/img/'.$resident->img) }}" alt="{{ $resident->img }}" style="width:100px; height:100px;"/>
                        @else
                            No image available
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection