<?php include_once 'config/init.php';?>

<?php
$post = new post;

$template = new Template('templates/sacoApp/asset_loan.php');

$template->asset =$post->getassetloan();
echo $template;