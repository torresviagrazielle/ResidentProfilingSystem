@extends('layouts.app') <!--NAVBAR UI located at resources>views>layouts>app.blade.php-->

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--ADD BUTTON AND SEARCH BAR IN LINE-->
            <div class="row">
                <div class="col">
                    <a class="btn button btn-primary" href="/residents/create">+ New Resident</a>
                </div>
                <div class="col">
                    <form class="form-inline" action="{{ route('search')}}" method="GET" style="float:right;">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="searchResident" class="sr-only">Search</label>
                            <input type="test" class="form-control" id="searchResident" placeholder="Search" name="search">
                        </div>
                        <button type="submit" class="btn btn-secondary mb-2">Search</button>
                    </form>            
                </div>
            </div>            
            <br>

            <div class="card">
                <div class="card-body">
                    <!--TABLE-->
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
                                    <a href="/residents/{{$resident->id}}" class="btn button btn-primary"> View </a> 
                                    <a href="/residents/{{$resident->id}}/edit" class="btn button btn-info"> Edit </a>
                                </td>
                                <td> 
                                    <form method="POST" action=" {{ route('residents.destroy', $resident->id)}}">
                                        @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn button btn-danger" style="margin-left: -80px;">Archive</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <!--TOTAL COUNT OF RESIDENT AND PRINT CSV BTN IN LINE-->
                    <hr>
                    <div class="row">
                        <div class="col" style="margin-left:25px; font-weight:bold;">
                            Total # of Resident  {{ $count }}
                        </div>
                        <div class="col">
                            <span data-href="/print" id="export" class="btn button btn-success" onclick="exportResidents(event.target);" style="float:right;margin-right:25px;">Print CSV</span>
                        </div>
                    </div>                          
                </div>
            </div> 
        </div>
    </div>
</div>

<!--CSV SCRIPT FUNCTION-->
<script>
   function exportResidents(_this) {
      let _url = $(_this).data('href');
      window.location.href = _url;
   }
</script>

@endsection
