<!DOCTYPE html>
<html lang="en">
<head>
    <!---<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>--->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' media='screen' href='miestilo.css'>
      <title>VISUALIZAR LIBROS</title>

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

        img {
            margin: 10px;
            border-radius: 8px;
        }


    </style>
    
</head>
<body>

    <h1>Bienvenidos! A nuestra librería</h1><br><br>

    <h2>Ver datos de un libro</h2><br><br>

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
    </p><br><br>

    <div class="container">
      <table class="table table-bordered" border="1">
         <tr>
            <th>FOTO</th>
            <th>TITULO</th>
            <th>PRECIO</th>
            <th>DESCRIPCIÓN</th>
            <th>N_PGAS</th>
            <th>EDITORIAL</th>
         </tr>
         <tr>
         <td><img src="./imagenes/<?php echo $libro['foto']?>" width="100" height="150"></td>
            <td><?php echo $libro['titulo'] ?></td>
            <td><?php echo number_format($libro['precio'],2)?></td>
            <td><?php echo $libro['descripcion'] ?></td>
            <td><?php echo number_format($libro['n_pags']) ?></td>
            <td><?php echo $libro['editorial'] ?></td>
         </tr>
      </table>
      </div>

</body>
</html>
