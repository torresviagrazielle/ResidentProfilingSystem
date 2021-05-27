<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">  
                <div class="card-header">List of Request Document</div>   
                <div class="card-body">
                    <!--TABLE-->
                    <table class="table">
                        <thead>
                            <tr>
                                <th> ID </th>
                                <th> Type of Document </th>
                                <th> Purpose </th>
                                <th> Place Issued </th>
                                <th> Date Issued </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($transactions as $transaction)
                            <tr>
                                <td>{{$transaction->id}}</td>
                                <td>{{$transaction->document_id}}</td>
                                <td>{{$transaction->purpose}}</td>
                                <td>{{$transaction->place_issued}}</td>
                                <td>{{$transaction->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>