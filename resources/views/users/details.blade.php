<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>USER DETAIL: {{$user -> user_name}}

    </h1>
    <ul class="list-group">
        <li>ID: {{$user -> user_id}}</li>
        <li>Full Name: {{$user -> user_name}}</li>
        <li>Email: {{$user -> user_email}}</li>
        <li>Phone Number: {{$user -> user_number}}</li>
        <li>
        @if($user ->user_level == 1)
            <span>Admin</span>
        @else
            <span>Member</span>
        @endif
        </li>
    </ul>
</body>
</html>