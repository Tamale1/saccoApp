
<?php include 'inc/header.php';?>
<?php include 'inc/sidebar.php';?>  

      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Team Members</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                        <form  action="addmember.php" method="post" enctype="multipart/form-data" >
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Name</label>
                              <div class="col-sm-10">
                              <input type="text" class="form-control" name="Mname">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Member Description</label>
                              <div class="col-sm-10">
                                 <textarea name="Mdesc" id="" cols="30" rows="10">

                                 </textarea>
                              </div>
                          </div>

                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">image</label>
                              <div class="col-sm-10">
                                  <input type="file" name="photo" ><br>
                              </div>
                          </div>
                          <input type="submit" name="addmember" value="Upload">
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
          	
          
      <!--footer start-->
      <?php include 'inc/footer.php';?>