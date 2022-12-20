<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap');

        body {
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            text-align: center;
            font-size: 40px;
            font-weight: bolder;
        }

        hr {
            background: #2E052D;
            outline-color: #2E052D;
            height: 30px;
        }

        .container {
            width: 70%;
            padding: 1.5% 10%;
        }
    </style>
</head>

<body>
    <div class=container>
        <h1> A Gateway to Open Access Legal Resources in the Philippines </h1>
        <hr>
        <br>
        <br>
        Name: {{ $name }}
        <br> <br>
        <hr> <br> <br>
        Password: {{ $password }}
        <br> <br> <br>
        <hr>
    </div>
</body>

</html>
