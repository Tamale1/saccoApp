<?php include_once 'config/init.php';?>

<?php
$post = new Post;

$template = new Template('templates/sacoApp/index.php');


if(isset($_POST['addmember'])){
 

    //create data array
    $data = array();
    $data['Mname'] = $_POST['Mname'];
    $data['Mdesc'] = $_POST['Mdesc'];
   
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
                // if ($fil+eSize < 1000000) {
                   // if(move_uploaded_file($fileTmpName,"uploads/".$fileName)){
                      
                         if($post->createMember($photoDest, $data))
                      {  
                      
                      redirect('index.php', 'New Product has been added', 'success');

                   }else
                      {
                      redirect('addmember.php', 'Something went wrong', 'error');
                      }

                // } else {
                //     echo "Not save in folder";
                // }

          }else {
                echo "error ";
          }

       }else {
       
       echo "error in uploading";
       }



      
       
}



echo $template;
