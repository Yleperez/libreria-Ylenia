<?php
class Libros_Model
{
   protected $db;

   public function __construct() {
      $this->db = DBManager::getInstance()->getConnection();
   }

   function getLibros()  {
      $result = $this->db->query('SELECT *  FROM libros');
      $libros = array();
      $libros = $result->fetchall();
      return $libros;
   }

   function getLibro($id) {
      $query = 'SELECT * FROM libros WHERE id = ?';
      $stmt = $this->db->prepare($query);
      $stmt->execute(array($id));
      $libro = $stmt->fetch();
      return $libro;
   }

   function getSesion($id){
      $query = ('SELECT * FROM users');
      $stm = $this->db->prepare($query);
      $stm = execute(array($id));
      $users = $result->fetchall();

      session_start();
         if (isset($_POST['login'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = $connection->prepare("SELECT * FROM users WHERE USERNAME=:username");
            $query->bindParam("username", $username, PDO::PARAM_STR);
            $query->execute();
            $result = $query->fetch(PDO::FETCH_ASSOC);
            if (!$result) {
               echo '<p class="error">Error al introducir el nombre y la contraseña!</p>';
            } else {
               if (password_verify($password, $result['PASSWORD'])) {
                     $_SESSION['user_id'] = $result['ID'];
                     echo '<p class="success">Congratulations, has iniciado sesión correctamente!</p>';
               } else {
                     echo '<p class="error">Error al introducir el nombre y la contraseña!</p>';
               }
            }
         }
   }

   function deleteLibro($id)
   {
      $query = 'DELETE FROM libros WHERE id = ?';
      $stmt = $this->db->prepare($query);
      $stmt->execute(array($id));
   }

   function nuevoLibro()
   {
      $query = 'INSERT INTO libros (id, isbn, titulo, descripcion , editorial, n_pags, precio, foto VALUES :id, :isbn, :titulo, :descripcion, :editorial, :n_pags, :precio, :foto)';
      $stmt = $this->db->prepare($query);
      $stmt->execute();
   }

   function guardarLibro($datos)
   {
        if(!isset($datos['id'])){
        $stmt = $this->db->prepare('INSERT INTO libros (isbn, titulo, descripcion , n_pags, precio, editorial, foto) VALUES (:isbn, :titulo, :descripcion, :n_pags, :precio, :editorial, :foto)');
        //$stmt = $db->prepare($query);
        $stmt->execute(
            [
                'isbn' => $datos['isbn'],
                'titulo' => $datos['titulo'],
                'descripcion' => $datos['descripcion'],
                'n_pags' => $datos['n_pags'],
                'precio' => $datos['precio'],
                'editorial' => $datos['editorial'],
                'foto' => $datos['foto']
            ]
        );
        
    }else{
        
        $stmt = $this->db->prepare('UPDATE libros SET isbn = :isbn, titulo = :titulo, descripcion = :descripcion, n_pags = :n_pags, precio = :precio, editorial = :editorial, foto = :foto  
                                    WHERE id = :id');
  
        $stmt->execute(
           [
              'id' => $datos['id'],
              'isbn' => $datos['isbn'],
              'titulo' => $datos['titulo'],
              'descripcion' => $datos['descripcion'],
              'n_pags' => $datos['n_pags'],
              'precio' => $datos['precio'],
              'editorial' => $datos['editorial'],
              'foto' => $datos['foto']
           ]
        );

    }

    }

}

?>