<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<main>
    <h1>Aprendendo Laravel</h1>

    @if ($name)
        <p>O nome informado foi {{ $name }}</p>
    @endif

    @if ($email)
        <p>O email informado foi {{ $email }}</p>
    @endif
</main>
    
</body>
</html>