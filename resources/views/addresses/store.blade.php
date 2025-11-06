<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>New address</h1>

    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{route('address.store')}}" method="post">
        @csrf
        Address:
        <input type="text" name="address" id="address">
        User:
        <!-- Bejelentkezett felhasználó id-je -->
        <select name="user_id" id="user_id">
            @foreach($users as $user)
                <option value="{{$user['id']}}">{{$user['name']}}</option>
            @endforeach
        </select>
        <input type="submit" value="Save address">
    </form>
</body>
</html>