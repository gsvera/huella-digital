<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: 25px;
        }
        .card{
            border:solid 1px rgb(0, 0, 0 );
            box-shadow: 1px 0 3px 2px rgba(0, 0, 0, 0.8);
            border-radius: 10px;
            padding: 25px;
        }
        .title-msg{
            font-size: 1.5em;
            color: white;
            font-family: Helvetica, Arial, sans-serif;
            text-align: center;
            line-height:100px;
            margin:0;
        }
        .list-group-item{
            list-style: none;
            margin: 10px 0 10px 35px;
            font-family: Helvetica, Arial, sans-serif;
        }
        .list-group-flush{
            border-top: 1px solid gray;
            border-bottom: 1px solid gray;
            padding: 15px 0 15px 15px;
        }
        .text-secondary{
            color: #D90452;
            font-size:1.3em;
            font-family: Helvetica, Arial, sans-serif;
        }
        .card-body{
            margin:25px;
        }
        .card-head{
            background-color: #740646;
            width:100%;
            height: 100px;
            border-radius:10px;
        }
    </style>
</head>
<body>
    <div class="card" style="width: 350px;">
        <div class="card-head">
            <h4 class="title-msg">Solicitud de información</h4>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><strong class="text-secondary">Nombre: </strong><br>{{$item['nombre']}}</li>
            <li class="list-group-item"><strong class="text-secondary">Email: </strong><br>{{$item['email']}}</li>
            <li class="list-group-item"><strong class="text-secondary">Telefono: </strong><br>{{$item['celPhone']}}</li>
            <li class="list-group-item"><strong class="text-secondary">Servicio: </strong><br>{{$item['service']}}</li>
        </ul>
        <div class="card-body">
            <p><strong class="text-secondary">Mensaje</strong></p>
            <p>{{$item['message']}}</p>
        </div>
    </div>
</body>
</html>