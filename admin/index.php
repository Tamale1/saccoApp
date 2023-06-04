<?php include_once 'config/init.php';?>

<?php
$post = new Post;

$template = new Template('templates/admin/index.php');
//$template->page =$post->getFront();
// 


echo $template;
