<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h3{
            color: #0D3B66;
        }

        /* body {
            display: flex;
        } */
        .container{
            margin-top: 100px;
            margin-bottom: 100px;
            margin-left:25%;
            position: relative;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            width: 500px;
        }

        .box-user img{
            width: 74px;
            height: 74px;
            border-radius: 50%;
            border: 5px solid #92d5e66e;
            align-items: center;
            margin-top: 30px;
        }

        .table{
            padding: 10px 0px;
        }

        a{
            background-color: #0D3B66;
            color: #F3B61F;
            padding: 8px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }

        .user-detail{
            margin-top: 15px;
        }

        .btn-revisor{
            margin-top: 50px;
        }


    </style>
    <title>Email di richiesta revisore</title>
</head>
<body>

    <div class="container">

        <h3>{{config('app.name')}}</h3>

        <h1>Hai una nuova richiesta.</h1>
        <p>Un untente ha richiesto di diventare <strong>Revisore</strong>. <br> Ecco i suoi dati personali:</p>

        <div class="box-user">
            <img src="https://demos.creative-tim.com/paper-kit-2-pro/assets/img/image_placeholder.jpg" class="image">
                <p class="user-detail"><strong>Nome</strong>: {{$user->name}}</p>
                <p class="user-detail"><strong>Telefono</strong>: {{$user->phone}}</p>
                <p class="user-detail"><strong>Email</strong>: {{$user->email}}</p>

        </div>

        <div class="btn-revisor">

            <a href="{{ route('make.revisor', compact('user')) }}">Rendi revisore</a>
        </div>

    </div>



</body>
</html>
