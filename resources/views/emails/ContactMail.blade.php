<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Mail</title>
</head>

<body>
    <h2>Enviado desde:</h2>
    <p>{{ $details['from'] }}</p>
    <h2>Nombre del cliente</h2>
    <p>{{ $details['name'] }} </p>
    <h2>Email de cliente:</h2>
    <p>{{ $details['email'] }} </p>
    <h2>Mensaje:</h2>
    <p>{{ $details['message'] }}</p>
</body>

</html>
