<?php
class Sesion_Model
{
   protected $db;

   public function __construct() {
      $this->db = DBManager::getInstance()->getConnection();
   }
    
   
   function getUsers()
    {
        $result = $this->db->query('SELECT id, username, password, email FROM users');
        $users = $result->fetchall();
        return $users;
    }

}

?>