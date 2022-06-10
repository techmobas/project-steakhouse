<footer id="dk-footer" class="dk-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <div class="dk-footer-box-info">
                        <a href="index.html" class="footer-logo">
                            <!-- <img src="https://i.kym-cdn.com/entries/icons/original/000/029/929/Kira_decides_to_tail_Shigechi.png" width=100%> -->
                            Steakhouse
                        </a>
                        <p class="footer-info-text">
                        Kami adalah perusahaan Makanan yang berbasis di Jakarta Timur, kami menyediakan berbagai macam makanan Steak mulai dari beef steak, chicken steak, fish steak, pork steak, tempeh steak. Untuk mengetahui info reservasi, menu, dan lainnya silahkan untuk mengikuti kami di Social Media. 
                        </p>
                        <div class="footer-social-link">
                            <h3>Follow us</h3>
                            <ul>
                                <li>
                                    <a href="https://facebook.com" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://linkedin.com" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://instagram.com" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Social link -->
                    </div>
                    <!-- End Footer info -->
                </div>
                <!-- End Col -->
                <div class="col-md-12 col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-us">
                                <div class="contact-icon">
                                <i class="fa-solid fa-house"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>Jakarta</h3>
                                    <p>Jalan Pulomas Selatan Kav. 22</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                        <div class="col-md-6">
                            <div class="contact-us contact-us-last">
                                <div class="contact-icon">
                                    <i class="fa fa-volume-control-phone" aria-hidden="true"></i>
                                </div>
                                <!-- End contact Icon -->
                                <div class="contact-info">
                                    <h3>(021) 47883900</h3>
                                    <p>Give us a call</p>
                                </div>
                                <!-- End Contact Info -->
                            </div>
                            <!-- End Contact Us -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Contact Row -->
                    <div class="row">
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget footer-left-widget">
                                <div class="section-heading">
                                    <h3>Useful Links</h3>
                                    <span class="animate-border border-black"></span>
                                </div>
                                <ul>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="categories.php">Menu</a>
                                    </li>
                                    <li>
                                        <a href="order.php">Reservation</a>
                                    </li>
                                    <?php 
                                        $resultprofile = mysqli_query($conn, "SELECT * FROM tbl_customer");
                                        $profilerow = mysqli_fetch_array($resultprofile);

                                        if (isset($_SESSION["userdata"])) { ?>
                                        <li>
                                            <a href="profile.php"><?php echo $profilerow['full_name']; ?></a>
                                        </li>
                                        <li>
                                            <a href="logout.php?id=22" onclick="return confirm('Are you sure?')">Logout</a>
                                        </li> <?php }
                                    else { ?>
                                        <li>
                                            <a href="login.php">Login</a>
                                        </li>
                                        <li>
                                            <a href="signup.php">Sign Up</a>
                                        </li> <?php
                                        } ?>
                                </ul>
                            </div>
                            <!-- End Footer Widget -->
                        </div>
                        <!-- End col -->
                        <div class="col-md-12 col-lg-6">
                            <div class="footer-widget">
                            <div id="googleMap" style="width:100%;height:380px;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.6589505546713!2d106.87661417059937!3d-6.179479340250548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4e08e627af1%3A0x94a014042cad2fbf!2sKalbis%20Institute!5e0!3m2!1sen!2sid!4v1654802070724!5m2!1sen!2sid" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                                <!-- End form -->
                            </div>
                            <!-- End footer widget -->
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Widget Row -->
        </div>
        <!-- End Contact Container -->


        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <span>Copyright © 2022, All Right Reserved</span>
                    </div>
                </div>
                <!-- End Row -->
            </div>
            <!-- End Copyright Container -->
        </div>
</footer>
