<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <h1>Users</h1>

    <table border="1">
        <thead>
            <tr>
                <th>NPM</th>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->npm }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->fullname }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
            @endforeach
        </tbody>
    {{-- <ul>
        @foreach ($users as $user)
            <li>{{ $user->panggilan }}</li>
        @endforeach
    </ul> --}}
</body>
</html>