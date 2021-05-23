@extends('layouts.app')

@section('content')
<div class="container">
    <!--HEADER-->
    <h3 style="padding-left: 30px; font-weight:bold; color:#272a2d;">Resident Profile</h3>    
    <hr>
    <a class="btn button btn-light" href="/dashboard">Dashboard</a>
    <a class="btn button btn-light active" href="/residents">Resident Profiling</a>
    <a class="btn button btn-light" href="/transactions">Document Issuance</a>
    <a class="btn button btn-light" href="/residents-archive">Resident Archive</a>
    <a class="btn button btn-light" href="/transactions-archive">Document Issuance Archive</a>  <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <a class="btn button btn-primary" href="/residents/create">+ New Resident</a>
            <br><br>
            <form action="{{ route('search')}}" method="GET">
                    <input class="form-control col-md-3" placeholder="Search" type="text" name="search"/>
                    <button class="btn button btn-secondary" type="submit">Search</button>
            </form> <br>
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                            <tr class="justify-content-center">
                                <th> ID </th>
                                <th> Name </th>
                                <th> Address </th>
                                <th> Sex </th>
                                <th> Civil Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        <tbody>
                        @if($residents->isNotEmpty())
                            @foreach ($residents as $resident)
                            <tr>
                                <td> {{ $resident->id }} </td>
                                <td> {{ $resident->lastname }}, {{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->extname }}</td>
                                <td> {{ $resident->house_num }} {{ $resident->street }}, {{ $resident->barangay }}</td>
                                <td> {{ $resident->sex }}</td>
                                <td> {{ $resident->civil_status }}</td>
                                <td> 
                                    <a href="/residents/{{$resident->id}}" class="btn button btn-info"> View </a> 
                                    <a href="/residents/{{$resident->id}}/edit" class="btn button btn-warning"> Edit </a>
                                </td>
                                <td> 
                                    <form method="POST" action=" {{ route('residents.destroy', $resident->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn button btn-danger" style="margin-left: -60px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else 
                            <div>
                                <p>No resident/s found</p>
                            </div>
                        @endif
                        </tbody>
                    </table>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
