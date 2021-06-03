
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body>

<a href="{{route('providers.create')}}" class="btn btn-success float-right m-3">ADD PROVIDER</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>  
                <th>Email</th>
                <th>Phone</th>
                <th>Message</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($providers as $key => $provider)
            <tr>
                <td>{{ $key + $providers->firstItem()}}</td>
                <td>{{ $provider->name }}</td>
                <td>{{$provider->email}}</td>
                <td>{{$provider->phone}}</td>
                <td>{{ $provider->message }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>