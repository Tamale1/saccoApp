<?php
class Post{
    private $db;
    public function __construct(){
        $this->db = new Database;;
    }
   
   
    public function getFront()
  {
 $this->db->query("SELECT * FROM front ");

//Assign Result Set
     $row = $this->db->single();
     return $row;

  }
 

  public function getbusinessloan()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id= 1 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}
public function getassetloan()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id = 2 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}
public function getschool()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id = 3 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}
public function getemergency()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id = 4 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}
public function gettrade()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id = 5 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}
public function getgroup()
{
$this->db->query("SELECT * FROM loan_categories WHERE  id = 6 ");

//Assign Result Set
$row = $this->db->single();
return $row;

}

public function getAllLoans()
{
$this->db->query("SELECT * FROM `loan_categories`");

//Assign Result Set
$results = $this->db->resultSet();
return $results;


}
public function getAllMembers()
{
$this->db->query("SELECT * FROM `team`");

//Assign Result Set
$results = $this->db->resultSet();
return $results;


}
public function getSingleLoan($id)
{
$this->db->query("SELECT * FROM `loan_categories` WHERE `id` = $id");

//Assign Result Set
$results = $this->db->single();
return $results;


}

}
 
