@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{-- create a new post for resident --}}
            <a class="btn button btn-primary" href="/residents/create">Create New</a>
            <br><br>
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Name </th>
                                <th> Address </th>
                                <th> Civil Status </th>
                                <th> Profession/Occupation</th>
                                <th> Tin No. </th>
                                <th> Period of Residence </th>
                                <th> Contact No.</th>
                                <th> Voter's Id No. </th>
                                <th> Precint Assignment No. </th>
                                <th> </th>
                                <th> Action </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($residents as $resident)
                            <tr>
                                <td> {{ $resident->id }} </td>
                                <td> {{ $resident->lastname }}, {{ $resident->firstname }} {{ $resident->middlename }} {{ $resident->extname }}</td>
                                <td> {{ $resident->house_num }} {{ $resident->street }}, {{ $resident->barangay }}</td>
                                <td> {{ $resident->civil_status }}</td>
                                <td> {{ $resident->occupation }} </td>
                                <td> {{ $resident->tin_num }}</td>
                                <td> {{ $resident->residence_period }}</td>
                                <td> {{ $resident->contact_num }} </td>
                                <td> {{ $resident->voters_id }}</td>
                                <td> {{ $resident->precint_num }}</td>
                                <td> <a href="/residents/{{$resident->id}}" class="btn btn-info"> View </a> </td>
                                <td> <a href="/residents/{{$resident->id}}/edit" class="btn btn-warning"> Edit </a> </td>
                                <td> 
                                    <form method="POST" action=" {{ route('residents.destroy', $resident->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
