<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulario Datos</title>
        <style>
            form{
                text-align:center;
            }

            h1{
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

            input[type=hidden], select {
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

            div {
                border-radius: 5px;
                background-color: #f2f2f2;
                padding: 20px;
            }

        </style>
    </head>
    <body>
    
        <h1>EDITAMOS LIBROS</h1><br><br>

        <div>
        <form action="index.php?controller=libros&action=guardar" method="post" enctype="multipart/form-data">
            ID <input type="hidden" name="id" value="<?=$datoslibro['id']?>"><br><br>
            ISBN: <input type="text" name="isbn" value="<?=$datoslibro['isbn']?>"><br><br>
            TITULO: <input type="text" name="titulo" value="<?=$datoslibro['titulo']?>"><br><br>
            DESCRIPCION: <input type="text" name="descripcion" value="<?=$datoslibro['descripcion']?>"><br><br>
            N.PAGS: <input type="text" name="n_pags" value="<?=$datoslibro['n_pags']?>"><br><br>
            PRECIO: <input type="text" name="precio" value="<?=$datoslibro['precio']?>"><br><br>
            EDITORIAL: 

                        <select name="editorial" id="editorial">
                                <?php foreach ($datosEditorial as $clave => $valor) {
                                    if($datoslibro['editorial']==$valor['id']){
                                        ?><option value="<?= $valor ['id']; ?>" selected><?=$valor['nombre'];?></option>;
                                    <?php
                                    }else{
                                       ?> <option value="<?= $valor ['id']; ?>"><?=$valor['nombre'];?></option>;
                                    
                                    <?php }
                                    }
                            ?>
                        </select><br></br>

            FOTO <br><br>
                <img src="./imagenes/<?php echo $datoslibro['foto']?>" width="100" height="150"><br><br>
        
            <p>
                <label for="file">FOTO</label>
                <input type="hidden" name="MAX_FILE_SIZE" value="2000000">
                <input type="file" name="file_upload"><br><br>
            </p>
        
            <p>
                <input type="submit" value="Enviar" >
            </p>
    
        </form>
        </div>
        
    </body>
</html>