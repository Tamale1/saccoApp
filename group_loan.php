<?php include_once 'config/init.php';?>

<?php
$post = new post;

$template = new Template('templates/sacoApp/group_loan.php');
$template->group =$post->getgroup();


echo $template;