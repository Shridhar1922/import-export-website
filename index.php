<!-- Header Stared Here -->
<?php include('include/head-files.php'); ?>
<?php include('include/navbar.php'); ?>
<style>
.carousel-item {
    height: 85vh;

}

.carousel-item .slide-box {
    height: 100%;
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    overflow: hidden;
    position: relative;

    background-size: cover;


}

.carousel-item .slide-box.s1 {
    background-image: url(./assets/img/about/about-banner.jpg);
}

.carousel-item .slide-box.s2 {
    background-image: url(./assets/img/banner-img/farm.jpg);
}

.carousel-item .bg {
    padding: 2rem;
    background-color: rgba(0, 0, 0, 0.2);
    width: 60%;
    transform: skewX(7deg);
    position: absolute;
    height: 100%;
    left: -10%;
    padding-left: 20rem;
    transform-origin: 0 100%;
}

.carousel-item .bg::before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    left: 0;
    top: 0;
    background-color: inherit;
    pointer-events: none;
    transform: skewX(10deg);
}

.carousel-item .illustration {
    grid-column: 2/-1;
    grid-row: 1/-1;
    justify-self: center;
}

.carousel-item .illustration .inner {
    background-image: url(./assets/img/products/food-stuff.jpg);
    background-size: cover;
}

.carousel-item .illustration div {
    height: 25rem;
    width: 18rem;
    border-radius: 3rem;
    background-color: #FF0077;
    position: relative;
    transform: skewX(-10deg);
}

.carousel-item .illustration .inner::after,
.carousel-item .illustration .inner::before {
    background-color: rgba(128, 0, 255, 0.4);
}

.carousel-item .illustration div::before {
    transform: translate(2rem, -2rem);
}

.carousel-item .illustration div::after {
    transform: translate(4rem, -1rem);
}

.carousel-item .illustration div::after,
.carousel-item .illustration div::before {
    content: "";
    position: absolute;
    height: 100%;
    width: 100%;
    border-radius: 3rem;
    top: 0;
    left: 0;
}

.carousel-item .details {
    padding: 5rem;
    padding-left: 10rem;
    z-index: 100;
    grid-column: 1/span 1;
    grid-row: 1/-1;
}

.carousel-item .details h1 {
    font-size: 3.5rem;
    font-weight: 600;
    margin-bottom: 0.5rem;
    color: #fff;
}

.carousel-item .details p {
    display: inline-block;
    font-size: 1rem;
    color: #ffffff;
    margin-bottom: 2rem;
}

@media only screen and (max-width: 650px) {
    .carousel-item .details {
        padding: 5rem 0rem 0rem 3.5rem !important;
        grid-column: 1/span 2;
    
    }
}
</style>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="slide-box s1">
                <div class="overlay"></div>
                <div class="bg"></div>
                <div class="details">
                    <h1 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="800"><span
                            class="welcome-text">Welcome To</span></br>
                        SHRAMUK OVERSEAS</h1>
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                        <span class="tag-line"><i class="icofont-globe-alt "></i> We connecting peoples, cultures & business. </span>
                        <p style="opacity: 1;">
                            The Name itself describe belived in hard work, loyal.
                        </p>
                    </div>

                </div>

            </div>
        </div>
        <div class="carousel-item ">
            <div class="slide-box s2">
                <div class="overlay"></div>
                <div class="bg"></div>
                <div class="details">
                <h1 data-aos="fade-right" data-aos-easing="linear" data-aos-duration="800"><span
                            class="welcome-text"> Shramuk Overseas Private Limited</span></br>Small Farms.</br>
                    Big Ideas.</h1>
                    <div data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1000">
                   
                    <p style="opacity: 1;">
                    Shramuk overseas is a company that specializes in exporting agricultural products from
developing countries to developed ones. We help farmers in less-developed nations sell
their crops, and we provide these farmers with the tools they need to grow and harvest
more efficiently.
                    </p>
                    </div>
                </div>
               
            </div>
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- <section class="services-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-wrap">
                <h1 class="animated-twin-lines">Our Services</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt Lorem
                    ipsum dolor sit amet, consectetur adipiscing elit.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="500">
                <div class="single-service">
                    <img class="service-shape" src="assets/img/service-shape.svg" alt="">
                    <img class="service-shape-bottom" src="assets/img/service-shape.svg" alt="">
                    <div class="icon-wrap">
                        <img src="assets/img/s4.svg" alt="">
                    </div>
                    <h4>Service-1</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <a href="#">Read more <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                <div class="single-service">
                    <img class="service-shape" src="assets/img/service-shape.svg" alt="">
                    <img class="service-shape-bottom" src="assets/img/service-shape.svg" alt="">
                    <div class="icon-wrap">
                        <img src="assets/img/s4.svg" alt="">
                    </div>
                    <h4>Service-2</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <a href="#">Read more <i class="icofont-double-right"></i></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 " data-aos="fade-up" data-aos-duration="1500">
                <div class="single-service">
                    <img class="service-shape" src="assets/img/service-shape.svg" alt="">
                    <img class="service-shape-bottom" src="assets/img/service-shape.svg" alt="">
                    <div class="icon-wrap">
                        <img src="assets/img/s4.svg" alt="">
                    </div>
                    <h4>Service-3</h4>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.
                    </p>
                    <a href="#">Read more <i class="icofont-double-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="about-section section-gap offwhite-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 about-section-left" data-aos="fade-right" data-aos-offset="100"
                data-aos-easing="ease-in-sine">
                <img src="assets/img/realistic-import-export-infographic.webp" alt="">
                <!-- <div class="bottom-txt d-flex">
                     <span>38+</span>
                     <h4>Years of <br>
                     Experience</h4>
                     </div> -->
            </div>
            <div class="col-lg-6 col-md-12 about-section-right " data-aos="fade-left" data-aos-offset="100"
                data-aos-easing="ease-in-sine">
                <h6>About Us</h6>
                <h1>We Provide Good Quality Products & Services For You</h1>
                <p class="text-justify mb-40">
                    Shramuk Overseas is working in the areas of merchant import and export in India. Though there is no
                    limitation for what we trade. Our main aim is to bring all Indian specialities, cultuer, taste,
                    tradtion to the international market. Over the centuries, India is famous for certain specialities
                    like Dry Fruits, Spices, Textile, hadicrafts, and other agricultural products and many more things.
                    We are bringing all of them to our International customers.</p>
                <a href="about" class="dt-sc-button   medium   filled fully-rounded-corner  filled with-shadow">
                    Read More
                    <i class="icofont-double-right"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="product-section section-gap">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-wrap">
                <h1 class="animated-twin-lines">Our Products</h1>

            </div>
        </div>
        <div class="row" data-aos="fade-up" data-aos-anchor-placement="top-bottom" data-aos-duration="1000">
            <div class="product-list item  col-lg-3 col-sm-6 ">
                <div class="product-box">
                    <a href="products#spices" class="photo">
                        <img src="./assets/img/products/spices.jpg" height="100%" class="no-pad">
                        <h4 class="header">Spices </span></h4>
                    </a>
                </div>

            </div>
            <div class="product-list item  col-lg-3 col-sm-6 ">
                <div class="product-box">
                    <a href="products#dry-fruits" class="photo">
                        <img src="./assets/img/banner-img/banner.jpg" height="100%">
                        <h4 class="header">Dry Fruits </span></h4>
                    </a>
                </div>

            </div>
            <div class="product-list item  col-lg-3 col-sm-6 ">
                <div class="product-box">
                    <a href="products#food-stuff" class="photo">
                        <img src="./assets/img/products/food-stuff.jpg" height="100%" class="no-pad">
                        <h4 class="header">Food Stuff </span></h4>
                    </a>
                </div>

            </div>
            <div class="product-list item  col-lg-3 col-sm-6 ">
                <div class="product-box">
                    <a href="products#pluses" class="photo">
                        <img src="./assets/img/products/pluses.jpg" height="100%" class="no-pad">
                        <h4 class="header">Pulses </span></h4>
                    </a>
                </div>

            </div>
        </div>
        <div class="text-center" data-aos="zoom-out-up">
            <a href="products" class="dt-sc-button   medium   filled fully-rounded-corner  filled with-shadow">
                View More
                <i class="icofont-double-right"></i>
            </a>
        </div>
</section>

<div class="section-padding section-gap offwhite-bg">
        <div class="container">
            <div class="row">
            <div class="col-md-12 section-title-wrap">
                <h1 class="animated-twin-lines">What People Says</h1>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel testmonial-carousel-wrapper client-testimonial-carousel">
                        <div class="single-testimonial-item">
                            <p>We would like to acknowledge your professionalism in our recent dealings with
you. You responded promptly and arrived on time. You were honest in your
appraisal of the job, even though this meant no work for you. We thank you for

this.</p>
                            <h3>Anna Cynthia</h3>
                        </div>
                        <div class="single-testimonial-item">
                            <p>I&#39;ve been using Shramuk Overseas for some time now and I&#39;m very happy with
the Products. They have a wide variety of products that make my life much
easier when it comes to farming. The prices are also great so you can&#39;t go wrong

when you choose to start Business here.</p>
                            <h3>Nikita</h3>
                        </div>
                        <div class="single-testimonial-item">
                            <p>The products&#39; quality is excellent, and the service is excellent with a humble
gesture in addition to meeting the client&#39;s needs to the fullest extent possible.

Really genuine.</p>
                            <h3>Margaret Suzanne</h3>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

   

<section class="logos-section relative section-gap">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 relative">
                <div class="logo-carousel owl-carousel owl-theme">
                    <div class="single-logo-item">
                        <img src="assets/img/patners/MSME-Logo.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/patners/apeda.png" alt="">
                    </div>
                    <div class="single-logo-item">
                        <img src="assets/img/patners/make-in-india.png" alt="">
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<script>
$(".s_menu").removeClass("active");
$(".home").addClass("active")
</script>
<?php include('include/footer.php'); ?>
<?php include('include/js-files.php'); ?>