<!-- Header Stared Here -->
<?php include('include/head-files.php'); ?>
<?php include('include/navbar.php'); ?>
<style>
.f-style{
    font-style: italic;
    padding-left: 1.5rem;
}    
.certificate1 {
    height: 400px;
    margin-bottom: 20px;
}

.certificate2 {
    width: 100%;
    padding: 4px;
    border: 1px solid lightgrey;
   object-fit: contain;
}
.certificate1 img{
    border: 1px solid lightgrey;
    height: 100%;
    object-fit: contain;
    padding:  4px;
}
@media (max-width: 600px){
    .certificate1 img{
        width: 100%;
        border: none;
    }
    .certificate2{
        border: none;
    }
}
</style>
<section class="page-header-section section-gap relative">
    <div class="overlay"></div>
    <div class="container">
        <div class="row align-items-center relative">
            <div class="col-md-6 col-12">
                <h1>About</h1>
            </div>
        </div>
    </div>
</section>
<section class="info-section section-gap ">
    <div class="container">

        <div class="row no-margin-l-r">
            <div class="col-lg-4 col-md-12 col-sm-12 text-center">
                 <img src="./assets/img/team/tradmark.jpeg" height="100%" class="no-pad">
                       
            </div>
            <div class="col-lg-8 col-md-12 info-right founder-content-box">
                <div class="founder-stmt">
                    <p class="f-style">Shramuk overseas  your gateway to world & your one stop shop for all your needs. & your  Trusted partners for International Needs.We are committed to providing our customers with the best possible services at the most competitive prices</p>

                </div>
                <p class="f-style mb-0">Founder Desk,</p>
                <p class="founder-name"><b>SHASHIKANT K. UNAVANE</b> (FOUNDER & M.D.)</p>
            </div>
        </div>
        
    </div>
</section>
<section class="info-section section-gap offwhite-bg">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-lg-6 col-md-12 info-right" data-aos="fade-right" data-aos-duration="1500">
                <h1>Supply The Best organic Products Since 2022</h1>
                <p class="text-justify">
                    Shramuk Overseas is working in the areas of merchant import and export in India. Though there is no
                    limitation for what we trade. Our main aim is to bring all Indian specialities, cultuer, taste,
                    tradtion to the international market. Over the centuries, India is famous for certain specialities
                    like Dry Fruits, Spices, Textile, hadicrafts, and other agricultural products and many more things.
                    We are bringing all of them to our International customers.
                </p>

                <ul class="p-list text-justify">
                    <li>
                        <i class="icofont-tick-boxed"></i>
                        Apart from Exports, “SHRAMUK OVERSEAS” is also engaged in import business where we import the
                        goods
                        from overseas countries to India.
                    </li>
                    <li>
                        <i class="icofont-tick-boxed"></i>
                        We are committed to our customers and suppliers for best quality and timely services with
                        transparency during business transactions.
                    </li>

                </ul>
            </div>
            <div class="col-lg-6 col-md-12 info-left" data-aos="zoom-in-left" data-aos-duration="1500">
                <img class="about-us-img img-fluid w-100" src="assets/img/about/about-us.jpg" alt="" />
            </div>
        </div>
    </div>
</section>

<section class="faq-section section-gap white-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-out-up">
                <div class="vision-mission-box">
                    <h1>Our Vision</h1>
                    <p>Our vision is to use the right blend of knowledge and expertise to create unbreakable relation with worldeide importers. We are committed to meet customer needs and offer best quality products with competitive prices on prompt delivery and complete satisfaction at all the time.</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-out-up">
                <div class="vision-mission-box">
                    <h1>Our Mission</h1>
                    <p>To become the benchmark manufacture export company providing world class products and excellent customer satisfaction through continuous improovement driven by the integrity, teamwork and creativity. Mission of our company is to treat all our clients equally. All our clients are precious to us. To recognize as the India's most famous trading company of peanuts. </p>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section-padding section-gap offwhite-bg">
    <div class="container">
    <div class="row">
            <div class="col-md-12 section-title-wrap">
                <h1 class="animated-twin-lines">Certificates</h1>
                    
                </div>
            </div>
            
    <div class="row no-margin-l-r ">
  
            <div class="col-lg-4 col-md-12 col-sm-12 text-center certificate1">
                <img src="./assets/img/certificates/certificate1.jpg" >
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center certificate1">
                <img src="./assets/img/certificates/certificate2.jpg" >
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 text-center certificate1">
                <img src="./assets/img/certificates/certificate3.jpg" >
            </div>
        </div>
    </div>
    <div class="row no-margin-l-r ">
    <div class="offset-lg-3 col-lg-6 col-md-12 col-sm-12 text-center">
    <img src="./assets/img/certificates/p7.jpg" class="certificate2">
    </div>
    </div>
    
</section>
<script>
$(".about").addClass("active")
</script>
<?php include('include/footer.php'); ?>
<?php include('include/js-files.php'); ?>