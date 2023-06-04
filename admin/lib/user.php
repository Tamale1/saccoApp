<?php
class User extends Database
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    // Regsiter user
    
    public function register($fileName, $data){
      $this->db->query('INSERT INTO users (name, email, title, image, password) VALUES(:name, :email,:title, :image,  :password)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':title', $data['title']);
      $this->db->bind(':password', $data['password']);
      $this->db->bind(':admin_img', $fileName);
    
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
    }
    public function getlogin(){
      

      $this->db->query("SELECT * FROM `users`");

      // $results = $this->db->resultSet();
      // return $results;


     /*assign row*/
     $row = $this->db->single();
     return $row;

    }

}







    