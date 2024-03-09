<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Daniele Ercoli">
    <meta name="description" content="esercizio">
    <meta name="keyword" content="laravel, blade, scss">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css' integrity='sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==' crossorigin='anonymous'/>
    @vite('resources/js/app.js')
</head>
<body>
    {{-- header --}}
    @include('includes.header');
    <main>
        <h1>TV</h1>
    </main>
    {{-- footer --}}
    @include('includes.footer');
</body>
</html>