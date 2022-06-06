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
                   
                                <a  href="mailto:info@shramukoverseas.net">
                                   
                                    <span class="__cf_email__">info@shramukoverseas.net</span>
                                </a>
                               
                            <a  href="mailto:shrikant@shramukoverseas.net">
                                   
                                    <span class="__cf_email__">shrikant@shramukoverseas.net</span>
                                </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-contact-details text-center">
                    <i class="icofont-ui-dial-phone"></i>
                    <h4>Phone Number</h4>
                    <a href="tel: +918850923640"> +918850923640 </a>
                    <a href="tel: +66910286410"> +66910286410 </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="single-contact-details text-center">
                    <i class="icofont-ui-map"></i>
                    <h4>Office Address</h4>
                    <p>
                    LIG building no 32, Tenament 5,<br />
                    sector 10 Nerul Navi Mumbai,<br/> West Maharashtra India 400706.
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
                            id="submit-message" >Send Message</button>
                        <div id="msg" class="message"></div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 col-md-12 contact-form-right">
                <iframe width="100%" height="440"
                    src="https://maps.google.com/maps?width=700&amp;height=440&amp;hl=en&amp;q=27%20Division%20St%2C%20New%20York%2C%20NY%2010002%2C%20USA+(Title)&amp;ie=UTF8&amp;t=&amp;z=10&amp;iwloc=B&amp;output=embed"
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