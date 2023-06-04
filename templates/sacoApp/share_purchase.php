<?php include 'inc/header.php';?>
        <!-- End Navbar Area -->
    <!-- Start Page Title Area -->
    <div class="page-title-area item-bg-1">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Share Purchase Form</h2>
                        <ul>
                            <li><a href="index-3.php">Home</a></li>
                            <li>Share Purchase</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Signup Area -->
    <div class="signup-area ptb-100">
        <div class="container">
            <div class="signup-form">
                <h3>APPLICATION FOR SHARE PURCHASE</h3>
                <form action="https://Newsacco.org/process_share_purchase.php" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="full_name" class="form-control" placeholder="Name" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="physical_address" class="form-control" placeholder="Physical Address" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="number" name="number_of_shares" class="form-control" placeholder="Number of Shares to Purchase" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="number" name="current_shares" class="form-control" maxlength="150" minlength="0" value="0" placeholder="Current Shares Owned" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <!--<input type="text" class="form-control" placeholder="Gender">-->
                                <select class="form-control" name="gender" required>
                                    <option selected class="form-control">Select your Gender</option>
                                    <option class="form-control" value="M">Male</option>
                                    <option class="form-control" value="F">Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12" style="margin-top:20px;">
                            <div class="form-group">
                                <input name="phone_number" type="text" id="phone" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <select class="form-control" name="identification_type" required>
                                    <option selected class="form-control">Select your Identification Type</option>
                                    <option class="form-control" value="National ID">Nation ID</option>
                                    <option class="form-control" value="Valid Passport">Valid Passport</option>
                                    <option class="form-control" value="Driving Permit">Driving Permit</option>
                                </select>
                            </div>
                        </div>
                        <br />
                        <div class="col-lg-12" style="margin-top:20px;">
                            <div class="form-group">
                                <label class="form-check-label" style="color:#6b6a6a !important;">Attach a JPG or PDF of the selected option above</label>
                                <input type="file" name="id_photo" required class="form-control" placeholder="">
                            </div>
                        </div><br>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="occupation" class="form-control" placeholder="Occupation" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="profession" class="form-control" placeholder="Profession" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <input type="text" name="work_address" class="form-control" placeholder="Work Address" required>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="checkme" required>
                                <label class="form-check-label" for="checkme">Agree to <a href="#" style="font-style:italic !important; color:#e73c3e !important; text-decoration:underline !important;"><strong>Terms & Conditions</strong></a></label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="send-btn">
                                <button type="submit" class="default-btn">
                                    Submit Now
                                    <span></span>
                                </button>
                            </div>
                            <br>
                            <!--<span>Already a registered user? <a href="sign-in.php">Signin!</a></span>-->
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End Signup Area -->


        
        <!-- Start Footer Area -->
        <?php include 'inc/footer.php';?>