<!DOCTYPE html>
<html lang="en">
<head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel='stylesheet' type='text/css' media='screen' href='css/miestilo.css'>
    
    <title>INICIAR SESIÓN</title>

    <style>
        
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        h1 {
            font-family: 'Passion One';
            font-size: 4rem;
            text-transform: uppercase;
            text-align:center;
        }
        label {
            width: 150px;
            display: inline-block;
            text-align: left;
            font-size: 1.5rem;
            font-family: 'Lato';
        }
        input {
            border: 2px solid #ccc;
            font-size: 1.5rem;
            font-weight: 100;
            font-family: 'Lato';
            padding: 10px;
        }
        form {
            margin: 25px auto;
            padding: 20px;
            border: 5px solid #ccc;
            width: 500px;
            background: #eee;
            text-align:center;
        }
        div.form-element {
            margin: 20px 0;
        }
        button {
            padding: 10px;
            font-size: 1.5rem;
            font-family: 'Lato';
            font-weight: 100;
            background: yellowgreen;
            color: white;
            border: none;
        }
        p.success,
        p.error {
            color: white;
            font-family: lato;
            background: yellowgreen;
            display: inline-block;
            padding: 2px 10px;
        }
        p.error {
            background: orangered;
        }

        p{
            text-align: center;
        }
        
        p{
            text-align: center;
            padding: 20px;
            font-size: 30px;
        }

        p{
            text-align: right;
            padding: 20px;
            font-size: 30px;
        }

    </style>
</head>

<body>

    <h1>LIBRERÍA CENTRAL</h1><br><br>
    
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
            </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/libreria/">INICIO</a></li>
                    <li><a href="libros_libreria.php">LA LIBRERÍA</a></li>
                    <li><a href="libros_eventos.php">EVENTOS</a></li>
                    <li><a href="/libreria/index.php?controller=libros&action=listar">NOVEDADES</a></li>
                    <li><a href="libros_contacto.php">CONTACTO</a></li>
                    <li><a href="libros_sesion.php">INICIAR SESIÓN</a></li>
                </ul>
            </div>
        </nav>

        <p>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-youtube"></a>
            <a href="#" class="fa fa-instagram"></a>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-android"></a>
        </p>
  
    <h1>INICIO DE SESIÓN</h1><br><br>

            <form method="post" action="sesion.php" name="signin-form">
                <div class="form-element">
                <label for="fname">NOMBRE</label><br><br>
                    <input type="text" name="username" pattern="[a-zA-Z0-9]+" required />
                </div>
                <div class="form-element">
                <label for="fname">CONTRASEÑA</label><br><br>
                    <input type="password" name="password" required />
                </div>
                <button type="submit" name="login" value="login">ACCEDER</button>
            </form>

</body>

</html>
