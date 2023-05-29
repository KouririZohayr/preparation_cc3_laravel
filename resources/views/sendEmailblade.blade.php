<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1> bonjour :{{ Auth::user()->name }}</h1>
<h3> votre Article : {{ $title }}  crée </h3>
<p> contenu  :  {{ $contenu }} </p>

</body>
</html>
