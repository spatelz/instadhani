<!DOCTYPE html>
<html lang="zxx">

    <?php 
include('partials/head.php');
?>

    <body>


        <?php 
include('partials/header.php');
?>
        <!-- Page Title -->
        <div class="page-title-area">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="container">
                        <div class="title-content">
                            <h2>Contact</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    <span>Contact</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Page Title -->

        <!-- Contact Info -->
        <div class="contact-info-area pt-100 pb-70">
            <div class="container">
                <div class="row">

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <img src="assets/img/contact-info-shape.png" alt="Shape">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>

                            <h3>Office Location</h3>
                            <a href="#">222,223 1st Floor ,Raghuleela Mall,behind Poisar depot , off sv road,
                                Kandivali-West
                                Mumbai</a>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <div class="contact-info-item">
                            <img src="assets/img/contact-info-shape.png" alt="Shape">
                            <i class="fa fa-mobile" aria-hidden="true"></i>

                            <h3>Phone</h3>
                            <ul>
                                <li>
                                    <a href="tel:(+91)96993 24720">(+91)96993 24720</a>
                                </li>
                                <li>
                                    <a href="tel:(+91)98333 70984">(+91)98333 70984</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                        <div class="contact-info-item">
                            <img src="assets/img/contact-info-shape.png" alt="Shape">
                            <i class="fa fa-envelope" aria-hidden="true"></i>

                            <h3>Email</h3>
                            <a href="#">instadhani@gmail.com</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Contact Info -->

        <!-- Contact -->
        <div class="contact-area ptb-100">
            <div class="container">
                <form id="contactForm">
                    <div class="section-title">
                        <h2>Get In Touch For Free consultation</h2>
                    </div>
                    <div class="row">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name*"
                                    required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                    required data-error="Please enter your email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="phone_number" id="phone_number" placeholder="Phone" required
                                    data-error="Please enter your number" class="form-control">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" name="msg_subject" id="msg_subject" class="form-control"
                                    placeholder="Subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" class="form-control" id="message" cols="30" rows="8"
                                    placeholder="Write message" required data-error="Write your message"></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <button type="submit" class="btn common-btn">
                                Send Message
                                <span></span>
                            </button>
                            <div id="msgSubmit" class="h3 text-center hidden"></div>
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
        <!-- End Contact -->

        <!-- Map -->
        <div class="map-area">
            <div class="container-fluid p-0">
                <iframe id="map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779284!2d62.17507173408573!3d23.728204508550373!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1601881198928!5m2!1sen!2sbd"
                    allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
        <!-- End Map -->
        <?php 
include('partials/footer.php');
?>




    </body>

</html>