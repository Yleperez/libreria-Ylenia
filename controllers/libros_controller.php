<?php
class Libros_Controller
{
   function __construct()
   {
      //Creamos una instancia de nuestro mini motor de plantillas
      $this->view = new View();
   }

   public function libros_inicio(){
      $this->view->show('libros_inicio.html');
   }

   public function listar()
   {
      //Incluye el modelo que corresponde
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pedimos al modelo todos los libros
      $libros = $Libros_model->getLibros();

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libros'] = $libros;

      //Finalmente presentamos nuestra plantilla
      $this->view->show("libros_listar.php", $variables);
   }

   public function ver ()
   {
      if ( !isset ( $_GET [ 'id' ] ) )
         die("No has especificado un identificador de libro.");

      $id = $_GET [ 'id' ];

      //Incluimos el modelo correspondiente
      require 'models/Libros_Model.php';

      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();

      //Le pide al modelo el libro con id = $id
      $libro = $libros = $Libros_model->getLibro($id);

      if ($libro === null)
         die("Identificador de libro incorrecto");

      //Pasamos a la vista toda la información que se desea representar
      $variables = array();
      $variables['libro'] = $libro;

      //Pasamos a la vista toda la información que se desea representar
      $this->view->show('libros_ver.php', $variables);
   }

   function guardar(){

      $errores = [];

      if (empty($_POST['titulo'])) {
         $errores[] = 'El Título es obligatorio.' ;
      }

      if (empty($_POST['isbn'])) {
         $errores[] = 'El ISBN es obligatorio.' ;
      }

      if (!is_numeric($_POST['isbn']) && $_POST['isbn'] != "/^[0-9]+$/"){
         $errores[] = 'El campo del isbn solo puede contener números.';
      }

      if (empty($_POST['descripcion'])) {
         $errores[] = 'La descripción es obligatoria.' ;
      }

      if (empty($_POST['n_pags'])) {
         $errores[] = 'El número de páginas es obligatorio.' ;
      }

      if (empty($_POST['precio'])) {
         $errores[] = 'El precio es obligatorio.' ;
      }


      //Si hubo errores voy a una pantalla de error.
      //Si no hubo errores guardo El libro.

      if (count($errores)){
         $hayerrores = array();
         $hayerrores['hayerrores'] = $errores;

         //Finalmente presentamos nuestra pantalla
         $this->view->show("libros_error.php" , $hayerrores);
      }else{
         //guardar datos utilizando la función
         //savelibro($datos) del modelo

      require 'models/libros_model.php';
      //Creamos una instancia de nuestro "modelo"
      $Libros_model = new Libros_Model();
      //Tratar imagen
      $config = Config::getInstance();
      $path = $config->get('IMAGENES_FOLDER');

      if($_SERVER["REQUEST_METHOD"] == "POST"){
         $dest = (isset($_POST['isbn']) ? $_POST['isbn'] : null);
         $destino = $this->isbnSoloNumeros($dest);
         $datos = $_POST;
         $datos['foto'] = $destino;
         $destino = $path . $destino;
         //Sube la imagen
         $nombre_temp = $_FILES["file_upload"]["tmp_name"];
         if($nombre_temp =! ""){
            if(move_uploaded_file($nombre_temp, $destino)){
               $mensaje = "Archivo subido correctamente";
               echo $mensaje;
            }else{
               echo $_FILES['file_upload']['error'];
            }
         }
      }

      $Libros_model->guardarLibro($datos);
      header('location:index.php');
   
      }
   }

   //Función que elimina espacios en blanco, caracteres especiales y letras del campo isbn.

   function isbnSoloNumeros($cadena){
      $cadena = str_replace(' ', '', $cadena);
      $cadena = preg_replace('/[^0-9]/', '', $cadena) . ".jpg";
      return $cadena;
   }

   function eliminar()
   {
      if ( !isset ( $_GET [ 'id' ] ) )
         die("No has especificado un identificador de libro.");
      $id = $_GET [ 'id' ];
      //Incluimos el modelo correspondiente
      require 'models/Libros_Model.php';
      //Le pide al modelo el libro con id = $id
      $Libros_model = new Libros_Model();
      $libros = $Libros_model->deleteLibro($id);
      //Pasamos a la vista toda la información que se desea representar
      include('views/libros_eliminar.php');
   }

   function nuevo()
   {
      //Incluimos el modelo correspondiente
      require 'models/Libros_Model.php';
      require 'models/editoriales_model.php';
      $Editoriales_model = new Editoriales_Model();
      $libros = $Editoriales_model->getEditoriales();
      //Le pide al modelo el libro con id = $id
      //Pasamos a la vista toda la información que se desea representar
      include('views/libros_nuevo.php');
     
   }

   function editar()
   {
      $libroNombrado = $_REQUEST['id'];
      require 'models/Libros_Model.php';
      $Libros_model = new Libros_Model();
      $datoslibro = $Libros_model->getLibro($libroNombrado);
      require 'models/editoriales_model.php';
      $Editoriales_model = new Editoriales_Model();
      $datosEditorial = $Editoriales_model->getEditoriales();
      //guardarLibro($datos);
      include('views/libros_editar.php');
   }

}


?>