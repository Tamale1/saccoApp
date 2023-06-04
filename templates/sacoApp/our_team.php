<?php include 'inc/header.php';?>
        <!-- End Navbar Area -->
        <!-- Start Page Title Area -->
        <div class="page-title-area item-bg-2">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="page-title-content">
                            <h2>Our Team</h2>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li>Our Team</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title Area -->

        <!-- Start Team Area -->
        <section class="team-area bg-color pt-100 pb-70">
            <div class="container">
                <div class="section-title">
                    <!--<span>Directors</span>-->
                    <h2>Board of Directors Committee</h2>
                    <p>Our governing body, elected by members to set strategy and oversee management. The board typically meets at regular intervals.</p>
                </div>

                            <?php foreach($members as $member): ?>
                            <div class="content">
                               
                           

                           
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
                    

                </div>
                
                <!---->
            </div>
        </section>
        <!-- End Team Area -->
        
        <!-- Start Solution Area -->
        <section class="solution-area bg-top">
            <div class="container">
                <div class="solution-item">
                    <div class="row align-items-center">
                        <div class="col-lg-7">
                            <div class="content">
                                <h3>We are here to help your business. Call to discuss your Solution</h3>
                            </div>
                        </div>

                        <div class="col-lg-5">
                            <div class="solution-info">
                                <i class="flaticon-telephone"></i>
                                <h3>
                                    <a href="tel:+256200914286">+256 200914286</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Solution Area -->

        
     
        <!-- Start Footer Area -->
        <section class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <div class="logo">
                                <a href="#">
                                    <img src="assets/img/Logo%20Footer.png" alt="image">
                                </a>
                            </div>
                            <p>New' SACCO is the fastest growing financial institution in Uganda. An institution started by business men and women. It intends to extend its membership & services to all eligible Ugandans.</p>
                            <ul class="social">
                                <li>
                                    <b>Follow us:</b>
                                </li>
                                
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-twitter"></i>
                                    </a>
                                </li>
            
                                <li>
                                    <a href="#" target="_blank">
                                        <i class="flaticon-instagram"></i>
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

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Quick Links</h3>

                            <ul class="quick-links">
                                <li>
                                    <a href="about.php">About</a>
                                </li>
                                <li>
                                    <a href="#">Our Performance</a>
                                </li>
                                <li>
                                    <a href="faq.php">Help (FAQ)</a>
                                </li>
                                <li>
                                    <a href="#">Blog</a>
                                </li>
                                <li>
                                    <a href="contact.php">Contact</a>
                                </li>
                            </ul>
                        </div>    
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Other Resources</h3>

                            <ul class="quick-links">
                                <li>
                                    <a href="contact.php">Support</a>
                                </li>
                                <li>
                                    <a href="privacy_policy.php">Privacy Policy</a>
                                </li>
                                <li>
                                    <a href="download.php">Download Documents</a>
                                </li>
                                <li>
                                    <a href="#">Loans</a>
                                </li>
                                <li>
                                    <a href="#">Bronchures</a>
                                </li>
                            </ul>
                        </div>    
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="single-footer-widget">
                            <h3>Contact Us</h3>

                            <div class="info-contact">
                                <i class="flaticon-pin"></i>
                                <span>KAMPALA</span>
                            </div>

                            <div class="info-contact">
                                <i class="flaticon-mail"></i>
                                <span>
                                    <a href = "mailto: customercare@Newsacco.org"><span class="__cf_email__" data-cfemail="b4dcd1d8d8dbf4d2dddaddcc9ad7dbd9">customercare@Newsacco.org</span></a>
                                </span>
                                <span>
                                    <a href="https://twitter.com/Newsacco">Twitter: @Newsacco</a>
                                </span>
                            </div>

                            <div class="info-contact">
                                <i class="flaticon-telephone"></i>
                                <span>
                                    <a href="tel:0000000000">0000000000</a>
                                </span>
                                <span>
                                    <a href="tel:0000000000">0000000000</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </section>
        <!-- End Footer Area -->
<!-- Start Copy Right Area -->
<?php include 'inc/footer.php';?>