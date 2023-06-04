<?php include_once 'config/init.php';


$post = new post;

$template = new Template('templates/sacoApp/loans.php');
$template->loans =$post->getbusinessloan();
$template->loans =$post->getassetloan();





echo $template;
?>
