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
                                <th> Lastname </th>
                                <th> Firstname </th>
                                <th> Middlename </th>
                                <th> Address </th>
                                <th> </th>
                                <th> Action </th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($residents as $resident)
                            <tr>
                                <td> {{ $resident->id }} </td>
                                <td> {{ $resident->lastname }} </td>
                                <td> {{ $resident->firstname }} </td>
                                <td> {{ $resident->middlename }} </td>
                                <td> {{ $resident->barangay }}</td>
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
