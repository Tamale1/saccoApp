<?php include_once 'config/init.php';?>

<?php
$post = new Post;

$template = new Template('templates/sacoApp/index.php');
$template->page =$post->getFront();
$template->loans =$post->getAllLoans();
$template->loans =$post->getAllLoans();
$template->members =$post->getAllMembers();




// 


echo $template;
?>