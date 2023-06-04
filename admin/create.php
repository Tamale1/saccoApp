<?php include_once 'config/init.php';?>

<?php
$post = new Post;

if(isset($_POST['submit']))
{
   //create data array
   $data = array();
   $data['title'] = $_POST['title'];
  
   $data['description'] = $_POST['description'];
  

   if($post->create($data))
   {
      redirect('index.php', 'loan has been updated', 'success');
   }else
   {
    redirect('index.php', 'Something went wrong', 'error');
   }
}


$template = new Template('templates/admin/create.php');
echo $template;


