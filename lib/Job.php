<?php
class Job extends Database
{
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }
    //Get all jobs
  public function getAllJobs()
  {
 $this->db->query("SELECT jobs.*, categories.category_name	
 AS cname
   FROM jobs INNER JOIN categories ON 
    jobs.category_id = categories.category_id 
    ORDER BY post_date DESC");

//Assign Result Set
    $results = $this->db->resultSet();
    return $results;

  }

//   public function getFront()
//   {
//  $this->db->query("SELECT * FROM front ");

// //Assign Result Set
//      $row = $this->db->single();
//      return $row;

//   }
  //get categories
  public function getCategories()
  {
    $this->db->query("SELECT * FROM categories");

//Assign Result Set
    $results = $this->db->resultSet();
    return $results;

  }
// Get jobs by category
  public function getByCategory($category)
  {
    $this->db->query("SELECT jobs.*, categories.category_name AS cname
    FROM jobs INNER JOIN categories ON 
    jobs.category_id = categories.category_id WHERE jobs.category_id = $category
    ORDER BY post_date DESC");
   
 
//Assign Result Set
    $results = $this->db->resultSet();
    return $results;

  }

  //Get category
  public function getCategory($category_id)
  {
     $this->db->query("SELECT * FROM categories WHERE category_id = :category_id");
     $this->db->bind(':category_id', $category_id);
     //assign row
     $row = $this->db->single();
     return $row;
  }

  //Get job
  public function getJob($id)
  {
     $this->db->query("SELECT * FROM jobs WHERE job_id = :id");
     $this->db->bind(':id', $id);
     //assign row
     $row = $this->db->single();
     return $row;
  }
  //create job
  public function create($data)
  {
    //insert query
    $this->db->query("INSERT INTO `jobs`(`category_id`, `job_title`,
    `company`, `job_desc`, `job_loc`,`salary`,
    `contact_user`, `contact_email`) VALUES (:category_id, :job_title, :company, :description, :location, :salary, :contact_user, :contact_email)");
  //bind data
  $this->db->bind(':category_id', $data['category_id']);
  $this->db->bind(':job_title', $data['job_title']);
  $this->db->bind(':company', $data['company']);
  $this->db->bind(':description', $data['description']);
  $this->db->bind(':location', $data['location']);
  $this->db->bind(':salary', $data['salary']);
  $this->db->bind(':contact_user', $data['contact_user']);
  $this->db->bind(':contact_email', $data['contact_email']);

// execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
  }

  public function create_cat($data)
  {
    //insert query
    $this->db->query("INSERT INTO `categories`(`category_name`) VALUES (:category_name)");
  //bind data
  $this->db->bind(':category_name', $data['category_name']);
 
// execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
  }

     //delete job
     public function delete($id)
     {
        //insert query
    $this->db->query("DELETE FROM jobs WHERE job_id = $id");
      // execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
     }
	 
	 //Update job
  public function update($id, $data)
  {
    //insert query
    
	$this->db->query("UPDATE `jobs` SET
	   'category_id' = :category_id,
	   'job_title' = :job_title,
	   'company' = :company,
	   'job_desc' = :description,
	   'job_loc'  = :location,
	   'salary' = :salary,
	   'contact_user' = :contact_user,
	   'contact_email' = :contact_email
	   WHERE job_id = $id");
  //bind data
  $this->db->bind(':category_id', $data['category_id']);
  $this->db->bind(':job_title', $data['job_title']);
  $this->db->bind(':company', $data['company']);
  $this->db->bind(':description', $data['description']);
  $this->db->bind(':location', $data['location']);
  $this->db->bind(':salary', $data['salary']);
  $this->db->bind(':contact_user', $data['contact_user']);
  $this->db->bind(':contact_email', $data['contact_email']);

// execute
    if($this->db->execute())
    {
      return true;
    }else{
      return false;
    }
  }
}