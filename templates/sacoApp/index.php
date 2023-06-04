
       
       
        <?php include 'inc/header.php';?>
       
        <!-- Start Navbar Area -->
        <div class="navbar-area">
            <div class="main-responsive-nav">
                <div class="container">
                    <div class="main-responsive-menu">
                        <div class="logo">
                            <a href="index.php">
                               <!-- <img src="assets/img/logo-sticky.png" class="black-logo" alt="image">-->
                               <!-- <img src="assets/img/logo-sticky.png" class="black-logo" alt="image">-->
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-navbar">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.php">
                           <!-- <img src="assets/img/logo-sticky.png" class="black-logo" alt="image">-->
                            <img src="assets/img/logo-sticky.png" class="white-logo" alt="image">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="index.php" class="nav-link active">
                                        Home 
                                        <!--<i class='bx bx-chevron-down'></i>-->
                                    </a>
                                    
                                </li>

                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        Services 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.php" class="nav-link">
                                                Saving
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="loans.php" class="nav-link">
                                                Credit
                                            </a>
                                        </li>
                                         

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Agency Banking
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Mobile Banking
                                            </a>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#" class="nav-link">
                                                Financial Literancy
                                            </a>
                                        </li>

                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="loans.php" class="nav-link">
                                        Loans 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                
                                    <ul class="dropdown-menu">
                                        <?php foreach($loans as $loan): ?>
                                        <li class="nav-item">
                                            <a href="business_loan.php?id=<?php echo $loan->id; ?>" class="nav-link">
                                            <?php echo $loan->l_name; ?>    
                                            </a>
                                            </li>
                                          <?php endforeach; ?>
                                    </ul>
                                </li>
                                
                              <!--<li class="nav-item">
                                    <a href="shares.php" class="nav-link">
                                    Shares
                                    </a>
                                </li>-->

                                <li class="nav-item">
                                    <a href="about_us.php" class="nav-link">
                                        About-Us
                                    </a>
                                </li>

                                        <li class="nav-item">
                                    <a href="contact.php" class="nav-link">
                                        Contact-Us
                                    </a>
                                </li>
                                        <li class="nav-item">
                                    <a href="#" class="nav-link">
                                       Others 
                                        <i class='bx bx-chevron-down'></i>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="our_team.php" class="nav-link">
                                                Our Team
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="faq.php" class="nav-link">
                                                FAQs
                                            </a>
                                        </li>
                                        
                                         <li class="nav-item">
                                            <a href="gallery.php" class="nav-link">
                                                Gallery
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="privacy_policy.php" class="nav-link">
                                                Privacy Policy
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="assets/b1.pdf" class="nav-link">
                                               Brochures
                                            </a>
                                        </li>
                                         <li class="nav-item">
                                            <a href="downloads.php" class="nav-link">
                                               Download Documents
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                
                            </ul>

                            <div class="others-options d-flex align-items-center">
                                <div class="option-item">
                                    <i class="search-btn flaticon-magnifying-glass"></i>
                                    <i class="close-btn flaticon-close"></i>
                                    <div class="search-overlay search-popup">
                                        <div class='search-box'>
                                            <form class="search-form">
                                                <input class="search-input" name="search" placeholder="Search" type="text">

                                                <button class="search-button" type="submit">
                                                    <i class="flaticon-magnifying-glass"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <div class="info">
                                        <i class="flaticon-telephone"></i>
                                        <span>Call-Us Now</span>
                                        <p>
                                            <a href="tel:000000000">000000000</a>
                                        </p>
                                    </div>
                                </div>

                                <div class="option-item">
                                    <a href="appln2.php" class="default-btn">
                                        Open Up an Account Now
                                        <span></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar Area -->
        <!-- Start Main Banner Area -->
        <div class="main-banner-area bg-two">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container-fluid">
                        <div class="main-banner-content">
                            <!--<span style="font-size=30">Your Partner in Development</span>-->
                            <h3 style="color:#e73c3e !important;"><?php echo $page->title; ?></h3>
                            <p>Move an extra mile in business development with New Sacco Loan and Saving products, designed to fit your business needs. </p>
                            
                            <div class="banner-btn">
                                <a href="share_purchase.php" class="default-btn">
                                    Buy Shares
                                    <span></span>
                                </a>
                            </div>
                        </div>

                        <div class="banner-social-buttons">
                            <ul>
                                <li>
                                    <span>Follow us</span>
                                </li>
                                
                                <li>
                                    <a href="https://twitter.com/Newsacco" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
            
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-email"></i>
                                    </a>
                                </li>
            
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-facebook"></i>
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Banner Area -->

 
        <!-- Start Approvals Area -->
        <div class="approvals-area ptb-100 bg-color">
            <div class="container">
                <div class="approvals-item">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="approvals-content">
                                <div class="icon">
                                    <i class="flaticon-loan"></i>
                                </div>
                                <span>Share Price</span>
                                <p>UGX 100,000 each</p>
                            </div>
                        </div>

                       

                        <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                            <div class="approvals-content">
                                <div class="icon">
                                    <i class="flaticon-document"></i>
                                </div>
                                <span>No prepayment or</span>
                                <p>hidden fees</p>
                            </div>
                        </div>
                         <div class="col-lg-4 col-md-6">
                            <div class="approvals-content">
                                <div class="icon">
                                    <i class="flaticon-satisfaction"></i>
                                </div>
                                <span>UGX 100,000</span>
                                <p>Minimum Investment Amount</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Approvals Area -->

        <!-- Start Process Area -->
        <section class="process-area bg-color pb-70">
            <div class="container">
                <div class="section-title">
                    <br>
                    <span>Services We Offer</span>
                    <h2>Services we offer</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at, vehicula quis ante. Praesent aliquam enim nec mattis maximus. Mauris pharetra lobortis arcu id iaculis..</p>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="process-item-two">
                            <div class="text">
                                <div class="icon">
                                    <i class="flaticon-guarantee"></i>
                                </div>
                                <h3><a href="saving_service.php">Saving</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,</p>
                            </div>
                        </div>
                    </div>

                   
                    <div class="col-lg-3 col-md-6">
                        <div class="process-item-two">
                            <div class="text">
                                <div class="icon">
                                    <i class="flaticon-reliability"></i>
                                </div>
                                <h3><a href="loans.php">Loans</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,s</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="process-item-two">
                            <div class="text">
                                <div class="icon">
                                    <i class="flaticon-user-experience"></i>
                                </div>
                                <h3><a href="mobile_banking.php">Mobile Banking</a></h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="process-item-two">
                            <div class="text">
                                <div class="icon">
                                    <i class="flaticon-speed"></i>
                                </div>
                                <br>
                                <h5><a href="financial_service.php">Financial Literancy</a></h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at, </p>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
            
            <hr>
        </section>
        <!-- End Process Area -->

        <!-- Start About Area Area -->
        <section class="about-area bg-color pb-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-wrap">
                            <img src="assets/img/team3.jpg" alt="image">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-content">
                            <span>Message from the Chairman - BODC</span>
                            <h3>Suuna Karim</h3>
                            <!--<h3>We have been working very efficiently with loan and funding for 25 years.</h3>-->
                            <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at, vehicula quis ante. Praesent aliquam enim nec mattis maximus. Mauris pharetra lobortis arcu id iaculis. Proin vel magna quis justo viverra ornare. Aliquam maximus urna non tortor feugiat luctus. Pellentesque libero dolor, luctus sed vestibulum et, convallis vitae risus. Pellentesque ullamcorper, arcu id accumsan placerat, tortor velit suscipit lorem,</p>
                           <img src="assets/img/signature.png" width="200px" height="200px" />
                         <h6 style="font-style:italic;">CHAIRMAN - BODC</h6>
                        </div>
                    </div>
                </div>
            </div>
           
        </section>
        <!-- End About Area Area -->


        <!-- Start Fun Facts Area -->
        <section class="fun-facts-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="1825">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Members</p>
                        </div>
                    </div>
                   

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="2950">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Customers Served</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="551">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Loans Approved</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span class="odometer" data-count="19">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>Expert Employees</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Fun Facts Area -->

        <!-- Start Choose Area -->
        <section class="choose-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="choose-title">
                            <!--<span>Transparent process</span>-->
                            <h2>Why choose us</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,</p>
                        </div>

                        <div class="choose-image">
                            <img src="assets/img/intro-video.jpg" alt="image">

                            <a href="https://www.youtube.com/watch?v=lKPoDJtd7VE" class="video-btn popup-youtube">
                                <i class="flaticon-play-button"></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="process-item bg-top1">
                                    <div class="icon">
                                        <i class="flaticon-guarantee"></i>
                                    </div>
                                    <h3>Speed</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="process-item bg-top2">
                                    <div class="icon">
                                        <i class="flaticon-speed"></i>
                                    </div>
                                    <h3>Trust</h3>
                                    <p>WLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at,</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="process-item bg-top3">
                                    <div class="icon">
                                        <i class="flaticon-reliability"></i>
                                    </div>
                                    <h3>Professionalism</h3>
                                    <p>This is a core pillar in all our operations. We have a professional team that execute Sacco work professionally</p>
                                </div>
                            </div>
        
                            <div class="col-lg-6 col-md-6">
                                <div class="process-item bg-top4">
                                    <div class="icon">
                                        <i class="flaticon-user-experience"></i>
                                    </div>
                                    <h3>Guarantee</h3>
                                    <p>WLorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at, </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Choose Area -->

        <!-- Start Overview Area -->
        <section class="overview-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <span>What’s the process?</span>
                    <h2>The basic Loan Process</h2>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="overview-item">
                            <div class="number">
                                <span>Apply</span>
                                <strong>1</strong>
                            </div>
                            <h3>Fill in the<br> Loan Application Form</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="overview-item">
                            <div class="number">
                                <span>Process</span>
                                <strong>2</strong>
                            </div>
                            <h3>Appraisal & Verification <br> process</h3>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="overview-item">
                            <div class="number">
                                <span>Committee</span>
                                <strong>3</strong>
                            </div>
                            <h3>Loan approval, disbursal <br> or decline with facts</h3>
                        </div>
                    </div>
                </div>
               
               
            </div>

            <div class="overview-shape">
                <div class="shape">
                    <img src="assets/img/works-shape.png" alt="image">
                </div>
                <div class="shape2">
                    <img src="assets/img/works-shape2.png" alt="image">
                </div>
            </div>
        </section>
        <!-- End Overview Area -->

        <!-- Start Solution Area -->
        <section class="solution-area">
            <div class="container">
                <div class="solution-item">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="content">
                                <h3>We are here to serve you, Please Call Us and we discuss business</h3>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="solution-info">
                                <i class="flaticon-telephone"></i>
                                <h3>
                                    <a href="tel:000000000000">000000000000</a>
                                    
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Solution Area -->


        <!-- Start Team Area -->
        <section class="team-area pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <!--<span>Directors</span>-->
                    <h2>Board of Directors Committee</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nisl erat, gravida malesuada eleifend at, vehicula quis ante. Praesent aliquam enim nec mattis maximus.</p>
                </div>
                <?php foreach($members as $member): ?>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="team-item">
                            <div class="image">
                                <img src="admin/<?php echo $member->image_url; ?>">
                                

                                <ul class="social">
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" target="_blank">
                                            <i class="bx bxl-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="content">
                                <h3><?php echo $member->name; ?></h3>
                                <span><?php echo $member->description; ?></span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                           
                           
                            
                        
                    
                </div>
            </div>
        </section>
        <!-- End Team Area -->
        <?php include 'inc/footer.php';?>

     
       