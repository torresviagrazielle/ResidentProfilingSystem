@extends('layouts.app')

@section('content')

<div class="container" onclick="window.print();">
    <!--HEADER-->
    <div>
        <div class="row justify-content-center">
            <h3>Republic of the Philippines</h3>       
        </div>
        <div class="row justify-content-center">
            <h3>City of Olongapo</h3>
        </div>
        <div class="row justify-content-center">
            <h3><b>Barangay Resident Profiling and</b></h3>
        </div>
        <div class="row justify-content-center">
            <h3><b>Document Issuance</b></h3>
        </div>
        <div class="row justify-content-center">
            <h3>barangay_system@gmail.com</h3>
        </div>
        <hr>
    </div>
    
            <!--DOCUMENT TYPE-->
            <div class="row justify-content-center" style="padding: 70px;">
                <h1><b><u>BARANGAY CLEARANCE</u></b></h1>
            </div>

            <!--DOCUMENT CONTENT-->
            <h3 style="padding: 20px;"><b>To Whom It May Concern:</b></h3>

            <h3 style="padding: 20px; text-indent: 5%; text-align:justify;">This is to certify that 
                <b><u>NAME</u></b>, <b><u>AGE</u></b> years old, and a resident of Barangay 
                <b><u>BARANGAY, CITY</u></b> is known to be of good moralcharacter and law-abiding citizen in the 
                community.To certify further, that he/she has no derogatory and/or criminal records filed in this barangay.
                ISSUED this <b><u>DATE</u></b> at Barangay upon request of the interested party for whatever legal purposes it may serve.</h3>

            <br><br>

            <div class="row justify-content-center" class="padding-top: 150px;">
                <p><b>*Not Valid without the Official Seal of the Barangay.</b></p>
            </div>
            <div class="row justify-content-center">
                <p><b>*This certificate/clearance is valid only for (60) Sixty days
                from the adte issued.</b></p>
            </div>
        


    <!--BARANGAY CAPTAIN-->
    <div style="float: right; padding-right:20px;">
        <div class="row justify-content-center">
            <h3 style="padding-top: 60px;"><u>JUAN DELA CRUZ</u></h3>
        </div>
        <div class="row justify-content-center">
            <h3><b>PUNONG BARANGAY</b></h3>
        </div>
    </div>

</div>
    
@endsection