<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Addresses</h1>
    @if(session('success'))
        <div class='alert alert-success'>{{session('success')}}</div>
    @endif
    <ul>
        @foreach ($addresses as $address)
            <li>{{$address['address'] }} - {{$address->user['name']}}</li>
        @endforeach
    </ul>
</body>
</html>