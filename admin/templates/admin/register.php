
  <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/style.css">
  
  <link rel="stylesheet" href="assets/css/style.css">
  <title>New Sacco Admin</title>
</head>
<body>
<div id="signup-page">
  <div class="container"  >
  
  <div class="row">
   
     
        <h2>Create An Account</h2>
        <p>Please fill out this form to register an account</p>
        <form action="login.php"  method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="name">username: <sup>*</sup></label>
            <input type="text" name="name" class="form-control form-control-lg ">
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-group">
            <label for="email">Email: <sup>*</sup></label>
            <input type="email" name="email" class="form-control form-control-lg "type="text" required>
            <span class="invalid-feedback"></span>
          </div>
          <div class="form-group">
                                            <label class="mb-1 text-white"><strong></strong></label>
                                            <input type="password" class="form-control" value="Password" name="password">
                                        </div>
         
          <div class="form-group">
               <label class="mb-1 text-white"><strong> Image</strong></label>
                <input type="file" class="form-control" name="photo">
                  </div>

          <div class="row">
            <div class="col">
              <input type="submit" value="Register" class="btn btn-success btn-block"type="text" required>
            </div>
            <div class="col">
              <a href="login.php" class="btn btn-light btn-block">Have an account? Login</a>
           
          
        </form>
      </div>
    </div>
  </div>
  </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>
  
