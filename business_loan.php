<?php include_once 'config/init.php';?>

<?php
$post = new post;


$template = new Template('templates/sacoApp/business_loan.php');
$loan_id = isset($_GET['id']) ? $_GET['id'] : null;
$template->lon = $post->getSingleLoan($loan_id);
echo $template;