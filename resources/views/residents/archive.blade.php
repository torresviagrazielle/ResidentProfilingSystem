@extends('layouts.app')


@section('content')



<div class="container">
    <!--HEADER-->
    <a class="btn button btn-light" style="font-size: 20px; font-weight:bold;" href="/residents"><</a>
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Resident Archive</h3>    
    <hr>
    <div class="row justify-content-center">
        <a class="btn button btn-light" href="/dashboard">Dashboard</a>
        <a class="btn button btn-light " href="/residents">Resident Profiling</a>
        <a class="btn button btn-light" href="/transactions">Document Issuance</a>
        <a class="btn button btn-light active" href="/residents-archive">Resident Archive</a>
        <a class="btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>
    </div>
    <hr>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-10">
            
            @if(session('message'))
              <div class="alert alert-success">
                    {{ session('message') }}
              </div>
            @endif
            <div class="card">       
                <div class="card-body">
                    <table class="table">
                        <thead>
                                <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Address </th>
                                <th> Sex </th>
                                <th> Civil Status </th>
                                <th> Action </th>
                                </tr>
                        </thead>
                        <tbody>
                            @foreach ($residents as $resident)
                            <tr>
                                <td> {{ $resident->id }} </td>
                                <td> {{ $resident->lastname }}, {{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->extname }}</td>
                                <td> {{ $resident->house_num }} {{ $resident->street }}, {{ $resident->barangay }}</td>
                                <td> {{ $resident->sex }}</td>
                                <td> {{ $resident->civil_status }}</td>
                                <td> 
                                    <a href="/residents/{{$resident->id}}/restore" class="btn btn-info"> Restore </a>
                                    <!--<a href="/residents/{{$resident->id}}/edit" class="btn btn-warning"> Edit </a>-->
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection