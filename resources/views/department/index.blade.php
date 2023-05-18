<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee</title>

    <ul>

        @foreach($department as $department)

        <li>{{ $department->department }} </li>

        @endforeach


    </ul>
</head>
<body>
    
</body>
</html>

