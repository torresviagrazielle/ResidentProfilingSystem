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

    <!--DOCUMENT CONTENT-->
    <h3 style="padding: 20px;"><b>To Whom It May Concern:</b></h3>

    <h3 style="padding: 20px; text-align:justify;">This is to certify that the person whose name, picture, and signature appear hereon has requested for:</h3>
    
    <!--DOCUMENT TYPE-->
    <div class="row justify-content-center" style="padding: 10px;">
        <h1><b><u>BARANGAY CERTIFICATION</u></b></h1>
    </div>

    <h3 style="padding: 20px; text-align:justify;">from this office and result are listed below:</h3>

    <div style="padding-left: 20px;">
        <h3>Name : <b>Via</b></h3> <br>
        <h3>Address : <b>Caron</b></h3> <br>
        <h3>Date of Birth : <b>july 22</b></h3> <br>
        <h3>Place of Birth : <b>Olongapo</b></h3> <br>
        <h3>Purpose : <b>Enrollement</b></h3>
    </div>

    <!--IMAGE AND TABLE IN LINE-->
    <div class="row justify-content-center" style="padding:20px;">
        <div class="col-md-3 justify-content-center">
            <div class="card">
                <svg style="margin-left:50px;" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                </svg>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card"> 
                <svg style="margin-left:50px; color: white;" xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                </svg>
            </div>
        </div>
    </div>

    <div class="row justify-content-center" style="padding:20px;">
        <div class="col-md-4 justify-content-center">
            <div style="padding-left: 20px;">
                <h3><b>Applicant Signature</b></h3>
            </div>
        </div>
        <div class="col-md-3">
        </div>
    </div>

    
    <div class="row justify-content-center">
        <p>Issued this <b><u>DATE</u></b></p>
    </div>
    <div class="row justify-content-center" class="margin-top: -100px;">
        <p><b>*Not Valid without the Official Seal of the Barangay.</b></p>
    </div>
    <div class="row justify-content-center">
        <p><b>*This certificate/clearance is valid only for (60) Sixty days
        from the adte issued.</b></p>
    </div>

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