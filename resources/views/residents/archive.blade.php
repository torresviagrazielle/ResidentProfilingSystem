@extends('layouts.app')


@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            
            @if(session('message'))
              <div class="alert alert-success">
                    {{ session('message') }}
              </div>
            @endif

            <a class="btn button btn-info" href="/residents">Back</a>
            <br><br>
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