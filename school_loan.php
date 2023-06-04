<?php include_once 'config/init.php';?>

<?php
$post = new post;

$template = new Template('templates/sacoApp/school_loan.php');
$template->school =$post->getschool();


echo $template;