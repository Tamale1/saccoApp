<?php include_once 'config/init.php';?>

<?php
$post = new post;
$template = new Template('templates/sacoApp/our_team.php');
$template->page =$post->getFront();
$template->members =$post->getAllMembers();


echo $template;