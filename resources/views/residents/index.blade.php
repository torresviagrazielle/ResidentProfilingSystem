@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn button btn-primary" href="/residents">Resident Profiling</a>
    <a class="btn button btn-primary" href="/transactions">Document Issuance</a>
    <a class="btn button btn-primary" href="/residents-archive">Resident Archive</a>
    <a class="btn button btn-primary" href="/transactions-archive">Document Issuance Archive</a>  <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- create a new post for resident --}}
            <a class="btn button btn-primary" href="/residents/create">Create New</a>
            <br><br>
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
                            @foreach ($residents as $resident)
                            <tr>
                                <td> {{ $resident->id }} </td>
                                <td> {{ $resident->lastname }}, {{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->extname }}</td>
                                <td> {{ $resident->house_num }} {{ $resident->street }}, {{ $resident->barangay }}</td>
                                <td> {{ $resident->sex }}</td>
                                <td> {{ $resident->civil_status }}</td>
                                <td> 
                                    <a href="/residents/{{$resident->id}}" class="btn btn-info"> View </a> 
                                    <a href="/residents/{{$resident->id}}/edit" class="btn btn-warning"> Edit </a>
                                </td>
                                <td> 
                                    <form method="POST" action=" {{ route('residents.destroy', $resident->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger" style="margin-left: -56px;">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    Total # of Resident  {{ $count }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
