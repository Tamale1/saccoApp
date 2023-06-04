<?php include_once 'config/init.php';?>

<?php
$post = new Post;
$uid = isset($_GET['uid']) ? $_GET['uid'] : null;

if(isset($_POST['del_id']))
{
    $del_id = $_POST['del_id'];
    if($post->delete($del_id))
    {
        redirect('index.php', 'Member Deleted', 'success');
    }else {
        redirect('index.php', 'member Not Deleted', 'error');
    }
}

$template = new Template('templates/team_table.php');





$template->job = $job->getJob($job_id);

echo $template;