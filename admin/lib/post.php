<?php
class Post{
    private $db;
    public function __construct(){
        $this->db = new Database;
    }
   
    public function create($data)
    {
      //insert query
      $this->db->query("INSERT INTO `loan_categories`(`title`,
       `description`,) VALUES ( :title,  :description, )");
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':description', $data['descrition']);
        if($this->db->execute())
        {
          return true;
        }else{
          return false;
        }
}
 
  //create job
  public function createLoan($fileName, $data)
  {
  
    //insert query
    $this->db->query("INSERT INTO `loan_categories`( `l_name`, `l_desc`, `l_image`) VALUES
     (:pname, :pdesc, :pimg )");
  //bind data
  $this->db->bind(':pname', $data['lname']);
  $this->db->bind(':pdesc', $data['ldesc']);
  $this->db->bind(':pimg', $fileName);

// execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
  }

  //end create product
  public function getAllLoans()
{
$this->db->query("SELECT * FROM `loan_categories`");

//Assign Result Set
$results = $this->db->resultSet();
return $results;


}






//create job
public function createMember($fileName, $data)
{

//insert query
$this->db->query("INSERT INTO `team`( `name`, `descriPtion`, `image_url`) VALUES
 (:tname, :tdesc, :timg )");
//bind data
$this->db->bind(':tname', $data['Mname']);
$this->db->bind(':tdesc', $data['Mdesc']);
$this->db->bind(':timg', $fileName);

// execute
if($this->db->execute())
{
  return true;
}else{
  return false;
}
}
public function getAllMembers()
{
$this->db->query("SELECT * FROM `team`");

//Assign Result Set
$results = $this->db->resultSet();
return $results;


}
public function delete($uid)
     {
        //insert query
    $this->db->query("DELETE FROM team WHERE uid = $uid");
      // execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
     }


}