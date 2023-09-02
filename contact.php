<!-- Header Stared Here -->
<?php include('include/head-files.php'); ?>
<?php include('include/navbar.php'); ?>
<section class="page-header-section section-gap relative contact-banner">
    <div class="overlay"></div>
    <div class="container">
        <div class="row align-items-center relative">
            <div class="col-md-6">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</section>

<section class="contact-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="single-contact-details text-center">
                    <i class="icofont-envelope-open"></i>
                    <h4>Email Address</h4>

                    <a href="mailto:shramuk.overseas24@gmail.com">

                        <span class="__cf_email__">shramuk.overseas24@gmail.com</span>
                    </a>

                    <a href="mailto:management@shramukoverseas.com">

                        <span class="__cf_email__">management@shramukoverseas.com</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-contact-details text-center">
                    <i class="icofont-ui-dial-phone"></i>
                    <h4>Phone Number</h4>
                    <a href="tel: +918850923640"> +918850923640 </a>
                    <a href="tel: +919699622617"> +919699622617 </a>
                    <a href="tel: +919528470736"> +919528470736 </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-contact-details text-center">
                    <i class="icofont-ui-map"></i>
                    <h4>Office Address</h4>
                    <p>
                        LIG Building no.32, Tenament – 5,<br />
                       sector-10 ,Nerul Navi Mumbai<br /> (West) - 400705.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-section section-gap">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-12 contact-form-left">
                <h1>Get In Touch</h1>
                <p style="font-weight:600">Feel free to ask any question we are ready to help you <span class="text-color-green">24/7</span> we're here to assist and respond you might have. We look forward to listening from you. </p>
                <form class="row contact-form-wrap" id="contact-form" method="post" action="M_Contactus.php">
                    <div class="col-md-6">
                        <input name="name" id="name" class="form-control" type="text" placeholder="Name*"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Name*'" />
                    </div>
                    <div class="col-md-6">
                        <input name="email" id="email" class="form-control" type="email" placeholder="E-mail*"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Email*'" />
                    </div>
                    <div class="col-md-12">
                        <input name="subject" id="subject" class="form-control" type="text" placeholder="Subject*"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Subject*'" />
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" id="message" class="form-control" rows="8" placeholder="Message"
                            onfocus="this.placeholder=''" onblur="this.placeholder='Message*'"></textarea>
                        <button type="submit" class="primary-button accent-button" value="Send Message"
                            id="submit-message">Send Message</button>
                        <div id="msg" class="message"></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 contact-form-right">
                <iframe width="100%" height="440"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.559340051956!2d73.01405146421213!3d19.039129808079487!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c30f6f8bfea9%3A0x243a501c06e1a376!2sLIG%20Colony!5e0!3m2!1sen!2sin!4v1654628219223!5m2!1sen!2sin"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            </div>
        </div>
    </div>
</section>

<script>
$(".s_menu").removeClass("active");
$(".contact").addClass("active")
</script>
<?php include('include/footer.php'); ?>
<?php include('include/js-files.php'); ?>