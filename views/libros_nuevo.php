<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO LIBRO</title>
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
            text-align:center;
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
            text-align:center;
        }

        input[type=submit]:hover {
            background-color: #45a049;
            text-align:center;
        }

        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
            text-align:center;
        }

        input[type=submit] , select{
            text-align:center;
        }

    </style>

</head>

<body>

        <h1>NUEVO LIBRO</h1>


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
        <li><a href="views/libros_libreria.php">LA LIBRERÍA</a></li>
        <li><a href="views/libros_eventos.php">EVENTOS</a></li>
        <li><a href="/libreria/index.php?controller=libros&action=listar">NOVEDADES</a></li>
        <li><a href="views/libros_contacto.php">CONTACTO</a></li>
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

    <h1>AÑADIMOS NUEVO LIBRO</h1><br>

    <div>
    <form action="index.php?controller=libros&action=guardar" method="post" enctype="multipart/form-data">
        ISBN: <input type="text" name="isbn" required><br>
        TITULO: <input type="text" name="titulo" maxlength="20" required><br>
        DESCRIPCION: <input type="text" name="descripcion" maxlength="40" required><br>
        N.PAGS: <input type="text" name="n.pags" required><br>
        PRECIO: <input type="text" name="precio" required><br>
        EDITORIAL: 
                            <select name="editorial" id="editorial">
                                    <option disabled select>---Seleccionar---</option>
                                        <?php foreach ($libros as $clave => $valor) {?>
                                            <option value="<?= $valor ['id']; ?>"><?=$valor['nombre'];?></option>
                                        <?php }
                                    ?>
                            </select><br>

        <div>
            <label for="file">FOTO</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
            <input type="file" name="file_upload"><br><br>
        </div>
        
        <div>
        <input type="submit" value="Enviar" >
        </div>
    
    </form>

    </div>

</body>

</html>