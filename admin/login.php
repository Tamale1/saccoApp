<?php

include_once 'config/init.php';

?>

<?php

$user = new User();

$template = new Template('templates/admin/login.php');
$template->user = $user->getlogin();

 if(isset($_POST['submit'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  if(!empty($_POST['email'])){
    if(!empty($_POST['password'])){
      if($admin->validateAdmin($email, $password)){

      
      $_SESSION['email'] = $email;
     redirect('index', 'login sucess','success');
  
    }else {
      redirect('login.php', 'User not found','error');
    }
  }else{
    redirect('login.php', 'password field required','error');
  }
}else{
  redirect('login.php', 'email field required','error');
}
 }


$template->title = "yusuf";
echo $template;