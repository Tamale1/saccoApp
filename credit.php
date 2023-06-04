<?php include_once 'config/init.php';?>

<?php
$post = new post;
$template = new Template('templates/sacoApp/loans.php');
$template->page =$post->getFront();

echo $template;