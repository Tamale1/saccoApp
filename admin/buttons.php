<?php include_once 'config/init.php';?>

<?php
$post = new Post;

$template = new Template('templates/admin/buttons.php');
//$template->page =$post->getFront();
// 
// $template->page =$post->getFront();

echo $template;