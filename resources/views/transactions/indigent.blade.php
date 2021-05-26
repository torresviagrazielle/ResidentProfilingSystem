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
        <h1><b><u>CERTIFICATION</u></b></h1>
    </div>

    <!--DOCUMENT CONTENT-->
    <h3 style="padding: 20px;"><b>To Whom It May Concern:</b></h3>

    
    <h3 style="padding: 20px; text-indent: 5%; text-align:justify;">This is to certify that as per records of Barangay Inhabitants kept in this office, 
    the person whose name appears below is a bonfire resident of this Barangay who 
    belongs to the <b><u>INDIGENT MEMBERS OF THIS COMMUNITY</u></b> with postal address and 
    other details described in the table below:</h3>

    <!--IMAGE AND TABLE IN LINE-->
    <div class="row justify-content-center" style="padding:20px;">
    @foreach ($residents as $transact)
        <div class="col-md-3 justify-content-center">
            @if ($transact->img)
                <img src="{{ URL::asset('/storage/img/'.$transact->img) }}" alt="{{ $transact->img }}" style="width:190px; height:190px; position:flex; "/>
            @else
                No image available
            @endif
        </div>
        <div class="col-md-8">
            <div class="card">  
                <!--TABLE-->
                
                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{$transact->lastname}}, {{$transact->firstname}} {{$transact->middlename}} {{$transact->extname}}</td>
                            <td>{{$transact->house_num}} {{$transact->street}}, {{$transact->barangay}}, {{$transact->city}}</td>
                            <td>{{$transact->age}}</td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
        </div>
        @endforeach
    </div>

    <h3 style="padding: 20px; text-indent: 5%; text-align:justify;">This certification is being issued
    upon the request of <b><u>@foreach($residents as $transact) {{$transact->lastname}}, {{$transact->firstname}} {{$transact->middlename}} {{$transact->extname}} @endforeach</u></b> who is the <b><u>N/A</u></b> of the above mentioned for:
    <b><u>@foreach($transactions as $purpose){{$purpose->purpose}}@endforeach</u></b>
    </h3>

    <div class="row justify-content-center">
        <p>Issued this <b><u>@foreach($transactions as $date){{$date->created_at}}@endforeach</u></b></p>
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