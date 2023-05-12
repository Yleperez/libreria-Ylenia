<?php
//Incluimos el FrontController
require 'core/FrontController.php';

try
{
   //Lo iniciamos con su método estático main.
   FrontController::main();
}
catch (Exception $e)
{
   echo $e->getMessage();
}

?>

<!------Ylenia Pérez Pulido con fecha del día 12 de mayo de 2023. Adjunto el proyecto del curso llamado libreria.
        Curso llamado IFCD0210 Desenvolvemento de Aplicacións con tecnoloxías Web------------>