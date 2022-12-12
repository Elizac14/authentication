<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<style>
.card {
    box-shadow: 8px 8px 8px 8px #888888;
}

.table {
    width: auto;
    border: 3px;
    border-style: double;
}
</style>
</head>

<body>


    <div class="container-sm pt-5">
    @if(session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
    @endif
        <div class="card pt-3 px-3">
            <div class="alert alert-success p-3 mb-2 bg-gradient-info text-white" role="alert">
                <h3 class="text-center text-secondary fw-bolder">Data<hr>
                </h3>
            </div>
            <table class="table table-primary table-striped table-hover table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Pilihan</th>
                    </tr>
                    @foreach($data as $key => $data)
                    <tr>    
                        <th class="text-center">{{$data->id}}</th>
                        <th>{{$data->title}}</th>
                        <th>{{$data->description}}</th>
                        <th class="text-center">                            
                            <a href="{{url('/edit/')}}/{{$data->id}}" class="btn btn-primary"> Edit </a> | 
                            <a href="{{url('/delete/')}}/{{$data->id}}" class="btn btn-danger"> Delete </a>
                        </th>
                    </tr>
                    @endforeach
            </table>
            <a href="{{url('/')}}">Insert Data</a>
</body>

</html>
