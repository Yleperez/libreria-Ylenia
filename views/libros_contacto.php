<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA LIBRERÍA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel='stylesheet' type='text/css' media='screen' href='miestilo.css'>

  <style>
        h1{
            text-align:center;
        }

        p{
            text-align: center;
        }
        
        p{
            text-align: right;
            padding: 20px;
            font-size: 30px;
        }

        h2{
            text-align: center;
            font-size: 8px;
        }

        form{
            text-align:center;
        }

        input[type=text], select {
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 3px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=number], select {
            width: 60%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 3px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            width: 60%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }


    </style>

</head>
<body>
    
    <h1>LIBRERÍA CENTRAL</h1><br>

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

    <h1>PUEDES CONTACTAR CON NOSOTROS</h1><br><br>
    
    <div>
    <form action="">
        <label for="fname">NOMBRE</label><br>
        <input type="text" name="nombre" maxlength="40" required/><br><br>
        <label for="lname">EMAIL</label><br>
        <input type="text" name="email" required/><br><br>
        <label for="lname">TELÉFONO</label><br>
        <input type="number" name="telefono" maxlength="10" pattern= "/^[0-9]{3}\-[0-9]{3}\-[0-9]{3}$/" required/><br><br>
        <label for="lname">MENSAJE</label><br>
        <input type="text" name="mensaje" minlength="5" maxlength="40" required/><br><br>
        <input type="submit" value="Enviar">
    </form>
    </div>

</body>
</html>