<?php include_once 'config/init.php';?>

<?php
$post = new Post;
$id = isset($_GET['id']) ? $_GET['id'] : null;

if(isset($_POST['submit']))
{
    //create data array
    $data = array();
    $data['title'] = $_POST['title'];
    $data['description'] = $_POST['descrition'];
    if($post->update($id, $data))
    {
        redirect('index.php', 'Your job has been Updated', 'success');
     }else
     {
      redirect('index.php', 'Something went wrong', 'error');
     }
  }

$template = new Template('templates/admin/edit.php');
$template->page =$post->create();
// 
// $template->page =$post->getFront();

echo $template;