<?php include 'inc/header.php' ?>

<div class="container">
    <div class="col-md-6 mx-auto">
      <div class="card card-body bg-light mt-5">
     <h2 class="page-header">Create  loan</h2>

         <form action="create.php" method="post">
            <div class="form-control">
                <label for="">title</label>
                <input type="text" class=" form-control" name="company">
            </div>

            <div class="form-control">
                <label for="">Category</label>
                <select class=" form-control" name="category">
                        
                <option value="0">Choose Category</option>
            <?php foreach($loans as $loan): ?>

         <option value="<?php echo $title->id; ?>"><?php echo $title->description; ?></option>        
                <?php endforeach; ?>

                </select>
            </div>

            <div class="form-control">
                <label for=""> Loan Title</label>
                <input type="text" class=" form-control" name="title">
            </div>

            <div class="form-control">
                <label for="">Description</label>
                <textarea class=" form-control" name="description"></textarea>
            </div>

           
            
            <input type="submit" class=" btn btn-secondary" value="Submit" name="submit">
         </form>
         </div>
         </div>
        
         

<?php include 'inc/footer.php' ?>