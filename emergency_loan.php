<?php include_once 'config/init.php';?>

<?php
$post = new post;

$template = new Template('templates/sacoApp/emergency_loan.php');
$template->emergency =$post->getemergency();


echo $template;