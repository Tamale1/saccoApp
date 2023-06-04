<?php include 'inc/header.php';?>
  <a href="<?php echo URLROOT; ?>/posts" class="btn btn-light"><i class="fa fa-backward"></i> Back</a>
  <div class="card card-body bg-light mt-5">
    <h2>Edit loan</h2>
    
    <form action="action" method="post">
      <div class="form-group">
        <label for="title">Title: <sup>*</sup></label>
        <input type="text" name="title" class="form-control form-control-lg  " value="<?php echo $create->title; ?>">
       
      </div>
      <div class="form-group">
        <label for="body">description: <sup>*</sup></label>
        <textarea name="body" class="form-control form-control-lg "><?php echo $create->description;?></textarea>
        <span class="invalid-feedback"></span>
      </div>
      <input type="submit" class="btn btn-success" value="Submit">
    </form>
  </div>
  <?php include 'inc/footer.php';?>