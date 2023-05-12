<?php
class Editoriales_Model
{
   protected $db;

   public function __construct() {
      $this->db = DBManager::getInstance()->getConnection();
   }
    
   
   function getEditoriales()
    {
        $result = $this->db->query('SELECT id, nombre, telefono FROM editoriales');
        $editoriales = $result->fetchall();
        return $editoriales;
    }

}

?>