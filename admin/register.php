<?php include_once 'config/init.php';?>

<?php
$user = new User;

$template = new Template('templates/admin/register.php');



   
  
        if(isset($_POST['submit'])){
          // echo '<script>alert("Button clicked");</script>';
           //create data array
         $data = array();
         $data['name'] = $_POST['name'];
         $data['email'] = $_POST['email'];
         $data['title'] = $_POST['title'];
         $data['password'] = $_POST['password'];
        
         $photo = $_FILES['photo'];   
         $photoname = $_FILES['photo']['name'];
         $photoTmpname = $_FILES['photo']['tmp_name'];
         $photoSize = $_FILES['photo']['size'];
         $photoError = $_FILES['photo']['error'];
         $photoType = $_FILES['photo']['type'];
      
      
         $photoExt = explode('.',$photoname);
         $photoActExt = strtolower(end($photoExt));
      
         $allowed = array('png','jpg','jpeg','gif','pdf');
      
            
            if(in_array($photoActExt, $allowed)) {
            
                  if($photoError === 0){
                  $photoNameNew = uniqid('',true).".".$photoActExt;
      
                  $photoDest = 'uploads/'.$photoNameNew;
                     move_uploaded_file($photoTmpname,$photoDest);
      
              if($admin->create($photoDest, $data))
              {   
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['title'] = $_POST['title'];
                $_SESSION['photo'] = $photo;
      
                  redirect('login.php', 'New user added', 'success');
              }else
              {
                redirect('index.php', 'Something went wrong', 'error');
              }
              }else {
                echo "error ";
            }
      
            }else {
      
            echo "error in uploading";
            }
      
            }
      
            $template->title = "Register";
            echo $template;