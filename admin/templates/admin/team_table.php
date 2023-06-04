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
				<div class="row">
				
	                

              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> Advanced Table</h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-bullhorn"></i> ID</th>
                                  <th><i class="fa fa-bullhorn"></i>  Name</th>
                                  <th><i class="fa fa-bullhorn"></i> Description</th>
                                  <th><i class="fa fa-bullhorn"></i> Image</th>
                                  
                                  
                                  <th><i class=" fa fa-edit"></i> Status</th>
                                  <th><i class="fa fa-bullhorn"></i> Action</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                                <?php foreach($members as $member): ?>
                              <tr>
                                  <td><a href="basic_table.html#"><?php echo $member->uid; ?></a></td>
                                  <td class="#"><?php echo $member->name; ?></td>
                                  <td><?php echo $member->description; ?> </td>
                                  <td><?php echo $member->image_url; ?></td>
                                  <td><span class="label label-info label-mini">Due</span></td>
                                  <td>
                                      <button class="btn btn-success btn-xs"><i class="fa fa-check"></i></button>
                                      <button class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></button>
                                      <button class="btn btn-danger btn-xs">
                                         <form style="display:inline;" action="delete_member.php" method="post">
                                         <button class="btn btn-danger btn-xs">
                                             <input type="hidden" name="del_id" value="<?php echo $member->uid; ?>"> 
                                     <i class="fa fa-trash-o "></i></button>
    </form>
                                  </td>
                              </tr>
                              <?php endforeach; ?>
                             
                             
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <?php include 'inc/footer.php';?>

      