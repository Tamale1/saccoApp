<?php include_once 'config/init.php';?>

<?php
$post = new Post;

$template = new Template('templates/admin/basic_table.php');
$template->loans = $post->getAllLoans();

echo $template;