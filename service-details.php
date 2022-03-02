<!DOCTYPE html>
<html lang="zxx">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Mean Menu CSS -->
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <!-- Box Icons CSS -->
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <!-- Owl Carousel JS -->
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <!-- Flat Icons CSS -->
        <link rel="stylesheet" href="assets/fonts/flaticon.css">
        <!-- Odometer CSS -->
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <!-- Nice Select CSS -->
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <!-- Popup CSS -->
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <!-- Style CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
    
        <link rel=”stylesheet” href=”https://cdn-uicons.flaticon.com/uicons-regular-rounded/css/uicons-regular-rounded.css”>
            <!-- Responsive CSS -->
        <link rel="stylesheet" href="assets/css/responsive.css">
    
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/font-awesome/fonts/fontawesome-webfont.eot">
        <link rel="stylesheet" href="assets/font-awesome/fonts/fontawesome-webfont.svg">
        <link rel="stylesheet" href="assets/font-awesome/fonts/fontawesome-webfont.ttf">
        <link rel="stylesheet" href="assets/font-awesome/fonts/fontawesome-webfont.woff">
        <link rel="stylesheet" href="assets/font-awesome/fonts/fontawesome-webfont.woff2">
        <link rel="stylesheet" href="assets/font-awesome/fonts/FontAwesome.otf">
        <link rel="stylesheet" href="assets/font-awesome/less/animated.less">
        <link rel="stylesheet" href="assets/font-awesome/less/bordered-pulled.less">
        <link rel="stylesheet" href="assets/font-awesome/less/core.less">
        <link rel="stylesheet" href="assets/font-awesome/less/fixed-width.less">
        <link rel="stylesheet" href="assets/font-awesome/less/font-awesome.less">
        <link rel="stylesheet" href="assets/font-awesome/less/larger.less">
        <link rel="stylesheet" href="assets/font-awesome/less/icons.less">
        <link rel="stylesheet" href="assets/font-awesome/less/list.less">
        <link rel="stylesheet" href="assets/font-awesome/less/mixins.less">
        <link rel="stylesheet" href="assets/font-awesome/less/path.less">
        <link rel="stylesheet" href="assets/font-awesome/less/rotated-flipped.less">
        <link rel="stylesheet" href="assets/font-awesome/less/screen-reader.less">
        <link rel="stylesheet" href="assets/font-awesome/less/stacked.less">
        <link rel="stylesheet" href="assets/font-awesome/less/variables.less">
        <link rel="stylesheet" href="assets/font-awesome/scss/_animated.scss">
        <link rel="stylesheet" href="assets/font-awesome/scss/_bordered-pulled.scss">
        <link rel="stylesheet" href="assets/font-awesome/scss/_core.scss">
        <link rel="stylesheet" href="assets/font-awesome/scss/_fixed-width.scss">
    
        <title>InstaDhani </title>
    
        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    
        <style>
            h1 {
                text-align: center;
            }
    
            input {
                padding: 10px;
                width: 100%;
                font-size: 17px;
                font-family: Raleway;
                border: 1px solid #aaaaaa;
            }
    
            /* Mark input boxes that gets an error on validation: */
            input.invalid {
                background-color: #ffdddd;
            }
    
            /* Hide all steps by default: */
            .tab {
                display: none;
            }
    
            button {
                background-color: #04AA6D;
                color: #ffffff;
                border: none;
                padding: 10px 20px;
                font-size: 17px;
                font-family: Raleway;
                cursor: pointer;
            }
    
            button:hover {
                opacity: 0.8;
            }
    
            #prevBtn {
                background-color: #bbbbbb;
            }
    
            /* Make circles that indicate the steps of the form: */
            .step {
                height: 15px;
                width: 15px;
                margin: 0 2px;
                background-color: #bbbbbb;
                border: none;
                border-radius: 50%;
                display: inline-block;
                opacity: 0.5;
            }
    
            .step.active {
                opacity: 1;
            }
    
            /* Mark the steps that are finished and valid: */
            .step.finish {
                background-color: #04AA6D;
            }
        </style>
    </head>
    <body>
        <!-- Preloader -->
        <div class="loader">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="spinner">
                        <div class="double-bounce1"></div>
                        <div class="double-bounce2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Preloader -->
        
        <!-- Navbar -->
        <div class="navbar-area sticky-top">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="index.html" class="logo">
                    <img src="assets/img/logo-two.png" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <div class="container">
                    <nav class="navbar navbar-expand-md navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" alt="Logo">
                        </a>
                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Home <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link">Home Demo One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-2.html" class="nav-link">Home Demo Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index-3.html" class="nav-link">Home Demo Three</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Pages <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link dropdown-toggle">Users <i class="bx bx-chevron-down"></i></a>
                                            <ul class="dropdown-menu">
                                                <li class="nav-item">
                                                    <a href="sign-in.html" class="nav-link">Sign In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="sign-up.html" class="nav-link">Sign Up</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="loan.html" class="nav-link">Loan</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apply.html" class="nav-link">Apply Now</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="testimonials.html" class="nav-link">Testimonials</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="team.html" class="nav-link">Team</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="faq.html" class="nav-link">FAQ</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="404.html" class="nav-link">404 Error Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="coming-soon.html" class="nav-link">Coming Soon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="terms-conditions.html" class="nav-link">Terms & Conditions</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="about.html" class="nav-link">About</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle active">Services <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="services.html" class="nav-link">Services Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="services-2.html" class="nav-link">Services Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="service-details.html" class="nav-link active">Service Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Projects <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="projects.html" class="nav-link">Projects Style One</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="projects-2.html" class="nav-link">Projects Style Two</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="project-details.html" class="nav-link">Project Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link dropdown-toggle">Blog <i class="bx bx-chevron-down"></i></a>
                                    <ul class="dropdown-menu">
                                        <li class="nav-item">
                                            <a href="blog.html" class="nav-link">Blog</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="blog-details.html" class="nav-link">Blog Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a href="contact.html" class="nav-link">Contact</a>
                                </li>
                            </ul>
                            <div class="side-nav">
                                <div class="language">
                                    <select>
                                        <option>English</option>
                                        <option>العربيّة</option>
                                        <option>Deutsch</option>
                                        <option>Português</option>
                                    </select>
                                </div>
                                <a class="consultant-btn" href="#">
                                    Free Consultant
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- End Navbar -->

        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-content">
                            <h2>Service Details</h2>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>
                                    <span>Service Details</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Service details -->
        <div class="service-details-area ptb-100">
            <div class="container">
                <div class="row">

                    <div class="col-lg-8">
                        <div class="details-item">

                            <div class="details-img">
                                <img src="assets/img/services/service-details1.jpg" alt="Details">
                                <h2>Financial Planning</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy.</p>
                            </div>

                            <div class="details-business">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="img">
                                            <img src="assets/img/services/service-details2.jpg" alt="Details">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-lg-6">
                                        <div class="img">
                                            <img src="assets/img/services/service-details3.jpg" alt="Details">
                                        </div>
                                    </div>
                                </div>
                                <h3>How To Grow Your Business</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo</p>
                                <ul>
                                    <li>Complete Guide To Mechanical</li>
                                    <li>Business & Consulting Agency</li>
                                    <li>Award Wining Business</li>
                                </ul>
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin. Mliterature from 45 BC, making it over 2000 years old. Lorealintock The Extremes of Good and dummy Eviyr. The standard chunk of Lorem Ipsum used sfertyui ince the 1500s is reproduced below for those interested. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dom, totam rem ape Donec ornare unde omnis iste natus.</p>
                            </div>

                            <div class="details-faq">
                                <div class="section-title">
                                    <span class="sub-title">Finon FAQ</span>
                                    <h2>Frequently Asked Questions</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                </div>
                                <div class="faq-item">
                                    <ul class="accordion">
                                        <li>
                                            <a>
                                                What kind of financial consultancy you need
                                                <i class='bx bx-plus'></i>
                                                <i class="bx bx-minus two"></i>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                        </li>
                                        <li>
                                            <a>
                                                How we help you for your business
                                                <i class='bx bx-plus'></i>
                                                <i class="bx bx-minus two"></i>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                        </li>
                                        <li>
                                            <a>
                                                What is Firewall and why it is used?
                                                <i class='bx bx-plus'></i>
                                                <i class="bx bx-minus two"></i>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                        </li>
                                        <li>
                                            <a>
                                                What steps will you take to remove risk of finance
                                                <i class='bx bx-plus'></i>
                                                <i class="bx bx-minus two"></i>
                                            </a>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ultrices grad </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="widget-area">

                            <div class="services widget-item">
                                <h3>Services List</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            Cash Investment
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Personal Insurance
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Education Loan
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Financial Planning
                                            <i class='bx bx-right-arrow-alt'></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="download widget-item">
                                <h3>Download</h3>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class='bx bxs-file-pdf'></i>
                                            Presentation pdf
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class='bx bx-notepad'></i>
                                            Wordfile.doc
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="contact widget-item">
                                <h3>Contact</h3>
                                <form>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your email">
                                    </div>
                                    <div class="form-group">
                                        <textarea id="your-message" rows="8" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <button type="submit" class="btn common-btn">
                                        Send Message
                                        <span></span>
                                    </button>
                                </form>
                            </div>

                            <div class="consultation">
                                <img src="assets/img/services/service-details4.jpg" alt="Details">
                                <div class="inner">
                                    <h3>Need Any Consultation</h3>
                                    <a class="common-btn" href="contact.html">
                                        Send Message
                                        <span></span>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Service details -->

        <!-- Footer -->
        <footer class="footer-area pt-100 pb-70">
            <div class="container">
                <div class="row">
                    
                    <div class="col-sm-6 col-lg-4">
                        <div class="footer-item">
                            <div class="footer-logo">
                                <a class="logo" href="index.html">
                                    <img src="assets/img/logo-two.png" alt="Logo">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices </p>
                                <ul>
                                    <li>
                                        <i class='bx bx-phone-call'></i>
                                        <span>Phone:</span>
                                        <a href="tel:882569756">882-569-756</a>
                                    </li>
                                    <li>
                                        <i class='bx bx-mail-send'></i>
                                        <span>Email:</span>
                                        <a href="/cdn-cgi/l/email-protection#90f8f5fcfcffd0f6f9fefffebef3fffd"><span class="__cf_email__" data-cfemail="f49c9198989bb4929d9a9b9ada979b99">[email&#160;protected]</span></a>
                                    </li>
                                    <li>
                                        <i class='bx bx-current-location'></i>
                                        <span>Address:</span>
                                        <a href="#">4578 Marmora Road, UK</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-2">
                        <div class="footer-item">
                            <div class="footer-links">
                                <h3>Quick Links</h3>
                                <ul>
                                    <li>
                                        <a href="about.html">About</a>
                                    </li>
                                    <li>
                                        <a href="services.html">Services</a>
                                    </li>
                                    <li>
                                        <a href="projects.html">Projects</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Blog</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">Privacy Policy</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <h3>Newsletter</h3>
                            <div class="footer-newsletter">
                                <p>Accusamus et iusto odio quas molestias except.</p>
                                <form class="newsletter-form" data-toggle="validator">
                                    <input type="email" class="form-control" placeholder="Enter email address" name="EMAIL" required autocomplete="off">
            
                                    <button class="btn common-btn" type="submit">
                                        Subscribe
                                        <span></span>
                                    </button>
                                    <div id="validator-newsletter" class="form-result"></div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="footer-item">
                            <div class="footer-links">
                                <h3>What We Do</h3>
                                <ul>
                                    <li>
                                        <a href="about.html">Financial Advice</a>
                                    </li>
                                    <li>
                                        <a href="services.html">Planning Strategies</a>
                                    </li>
                                    <li>
                                        <a href="projects.html">Investment Trending</a>
                                    </li>
                                    <li>
                                        <a href="faq.html">Wealth Commitment</a>
                                    </li>
                                    <li>
                                        <a href="blog.html">Our Services</a>
                                    </li>
                                    <li>
                                        <a href="privacy-policy.html">States Element</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Copyright -->
        <div class="copyright-area">
            <div class="container">
                <div class="copyright-item">
                    <p>Copyright ©2021 Finon. Designed By <a href="https://envytheme.com/" target="_blank">EnvyTheme</a></p>
                </div>
            </div>
        </div>
        <!-- End Copyright -->

        <!-- Go Top -->
        <div class="go-top">
            <i class='bx bxs-up-arrow'></i>
            <i class='bx bxs-up-arrow'></i>
        </div>
        <!-- End Go Top -->


        <!-- Essential JS -->
        <script data-cfasync="false" src="templates.envytheme.com/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery-3.5.1.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Form Validator JS -->
        <script src="assets/js/form-validator.min.js"></script>
        <!-- Contact JS -->
        <script src="assets/js/contact-form-script.js"></script>
        <!-- Ajax Chip JS -->
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <!-- Mean Menu JS -->
        <script src="assets/js/jquery.meanmenu.js"></script>
        <!-- Owl Carousel JS -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Wow JS -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Odometer JS -->
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/jquery.appear.min.js"></script>
        <!-- Nice Select JS -->
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <!-- Popup JS -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- Custom JS -->
        <script src="assets/js/custom.js"></script>
    </body>
</html>
