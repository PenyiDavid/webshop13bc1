<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Roles</h1>
    <ul>
    @foreach ($roles as $role)
        <li>{{ $role['role_name'] }}: 
            <ol> 
                @foreach ($role->users as $user)
                    <li>{{ $user['name'] }}</li>
                @endforeach
            </ol> 
        </li>
    @endforeach
    </ul>
</body>
</html>