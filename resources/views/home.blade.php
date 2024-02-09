<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
</head>
<body><div class="container">
    <div class="row">
        <div class="col-12 mt-5">
             <ul class="list-unstyled ">
        <li class="list-item mt-3">
            <a href="{{ route('tecniche') }}" class="btn btn-primary">Tecniche</a>
        </li>
        <li class="list-item mt-3">Qualità</li>
        <li class="list-item mt-3">
            <a href="{{ route('magia_bianca') }}" class="btn btn-primary">Magia Bianca</a>
        </li>
        <li class="list-item mt-3"> <a href="{{ route('magia_nera') }}" class="btn btn-primary">Magia Nera</a></li>
        <li class="list-item mt-3">Invocazioni</li>
    </ul>
   {{ $text }}
        </div>
    </div>
</div>

</body>
</html>
