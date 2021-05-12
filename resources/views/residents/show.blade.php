@extends('layouts.app')

@section('content')
    
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           
            <a class="btn button btn-info" href="/residents">Back</a> <br><br>
            
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
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection