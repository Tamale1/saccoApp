<?php include 'inc/header.php';?>

        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-4">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Group Loans</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Group Loans</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Services Details Area -->
        <section class="services-details-area ptb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                        <aside class="widget-area" id="secondary">
                            <section class="widget widget_search">
                                <form class="search-form search-top">
                                    <label>
                                        <span class="screen-reader-text">Search for:</span>
                                        <input type="search" class="search-field" placeholder="Search Here">
                                    </label class="">
                                    <button type="submit">
                                        <i class='bx bx-search-alt'></i>
                                    </button>
                                </form>
                            </section>

                            <section class="widget widget_categories">
                                <h3 class="widget-title">Categories</h3>
                                <ul>
                                     <li>
                                        <a href="#">Business loan</a>
                                    </li>
                                    <li>
                                        <a href="#">Asset Acquisition loan</a>
                                    </li>
                                    <li>
                                        <a href="#">Emergency loan</a>
                                    </li>
                                    <li>
                                        <a href="#">School Fees loan</a>
                                    </li>
                                    <li>
                                        <a href="#">Trade Facilitation loan</a>
                                    </li>
                                    <li>
                                        <a href="#">Group / Club Loan</a>
                                    </li>
                                </ul>
                            </section>

                            <section class="widget widget_hours">
                                <h3 class="widget-title">Opening Hours</h3>
                                <ul>
                                    <li>
                                        Mon – Thurs
                                        <span>00:00 AM - 5:00 PM</span>
                                    </li>
                                    <li>
                                        Fri - Satur
                                        <span>00:00 AM - 3:00 PM</span>
                                    </li>
                                    <li>
                                        Sun
                                        <span>CLOSED</span>
                                    </li>
                                </ul>
                            </section>

                            <section class="widget widget_appointment">
                                <h3 class="widget-title">Book an Appointment</h3>
                                
                                <form id="contactForm">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
        
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
        
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <button type="submit" class="default-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </form>
                            </section>
                        </aside>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="services-details-desc">
                            <div class="image">
                                <img src="assets/img/services-details.jpg" alt="image">
                            </div>
                            <div class="content">
                                <h3>About Group/Club Loan and how does it work</h3>
                                <p><?php echo $group->description;?></p>
                                
                            </div>

                            <div class="services-details-features">
                                <div class="content">
                                    <h3>Key Features of business loan</h3>
                                    
                                </div>

                                <div class="row">
                                    

                                   
                                    
                                      <ul class="list" style=" list-style-type: none !important;">
                                        <li>
                                            <i class="flaticon-check"></i>
                                      Very low interest rates that favor group financial growth
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                        Quick loan processing i.e. 24 hours of loan processing
                                        </li>
                                       
                                        <li>
                                            <i class="flaticon-check"></i>
                                         Minimum loan amount of Ugx 1 million
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                           Maximum loan amount of Ugx 30 million
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                           Flexible loan repayment plans
                                        </li>
                                          <li>
                                            <i class="flaticon-check"></i>
                                           No hidden loan fees
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                          Loan applications are available to only members with active accounts with SACCO.
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                           Group must have opened up membership/account with Sacco
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                         Provide a security for loan applications exceeding Ugx 3 million
                                        </li>
                                         <li>
                                            <i class="flaticon-check"></i>
                                         Loan given to members with active businesses
                                        </li>
                                         <li>
                                            <i class="flaticon-check"></i>
                                       Group/Club members guarantee each other
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                        Up to 5 months’ repayment period for first time borrowers
                                        </li>
                                    </ul>
                                </div>
                            </div>

                           

                            <div class="deserve-item">
                                <h3>We usually follow 4 steps to get a better Group/Club loans.</h3>
    
                                <div class="deserve-content">
                                    <span>1</span>
                                    <h4>Apply for any of our loan products</h4>
                                    <p><a href="loan_application.php" style="font-style:italic !important; color:#e73c3e !important; text-decoration:underline !important;"><strong>Online Loan Application Form </strong></a> is available on our website and Mobile Phone
                                        Application. </p>
                                </div>
    
                                <div class="deserve-content">
                                    <span>2</span>
                                    <h4>Appraisal</h4>
                                    <p>TQuis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. At vero eos et accusam et justo duo dolores et ea rebum..</p>
                                </div>
    
                                <div class="deserve-content">
                                    <span>3</span>
                                    <h4>Credit Committee</h4>
                                    <p>AQuis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                </div>
    
                                <div class="deserve-content">
                                    <span>4</span>
                                    <h4>Disbursement/Decline</h4>
                                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis. At vero eos et accusam et justo duo dolores et ea rebum.</p>
                                </div>
    
                                <div class="deserve-btn">
                                    <a href="loan_application.php" class="default-btn">
                                        Apply now
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                            <div class="services-details-list">
                                <div class="content">
                                    <h3>Eligibility Criteria</h3>
                                    <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>-->

                                    <ul class="list">
                                 
                                        <li>
                                            <i class="flaticon-check"></i>
                                             Must have an active account with SACCO
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Group/Club sensitized about Sacco services
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                            Members must be having active business
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                           Must have proof of business ownership
                                        </li>
                                           <li>
                                            <i class="flaticon-check"></i>
                                          Must be legally registered and with democratically elected leadership
                                        </li>
                                           <li>
                                            <i class="flaticon-check"></i>
                                          Have a security for the application that exceeds 3 million
                                        </li>
                                          <li>
                                            <i class="flaticon-check"></i>
                                          Credit Bureau check/Report
                                        </li>
                                         <li>
                                            <i class="flaticon-check"></i>
                                         Members must be ready to guarantee each other
                                        </li>
                                        <li>
                                            <i class="flaticon-check"></i>
                                         Have a security for the application that exceeds 5million
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Services Details Area -->

    
         <!-- Start Footer Area -->
         <?php include 'inc/footer.php';?>