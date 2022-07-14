<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>

    <h1>TRENI:</h1>

    @foreach ($trains as $train)
        <h3>Company:{{$train['agenzia']}}</h3>
        <h3>Stazione di partenza:{{$train['stazione_di_partenza']}}</h3>
        <h3>Stazione di arrivo:{{$train['stazione_di_arrivo']}}</h3>
        <h3>parterza ore:{{$train['orario_di_partenza']}}</h3>
        <h3>arrivo ore:{{$train['orario_di_arrivo']}}</h3>
        <h3>train code:<a href="{{route('info', $train->id)}}">{{$train['codice_treno']}}</h3></a>
    @endforeach
   
</body>
</html>