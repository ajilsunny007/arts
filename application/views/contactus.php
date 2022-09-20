<!DOCTYPE html>

<html lang="en">
<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/logo.png" />

    <!-- PAGE TITLE HERE -->
    <title>Architecture Studio</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/fontawesome/css/font-awesome.min.css" />
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/owl.carousel.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/loader.min.css">
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/flaticon.min.css">
    <!-- MAIN STYLE SHEET -->
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css">


    <!-- Color Theme Change Css -->
    <link rel="stylesheet" class="skin" type="text/css" href="<?php echo base_url()?>assets/css/skin/skin-1.css">
    <!-- Side Switcher Css-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/switcher.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;display=swap" rel="stylesheet">


</head>

<body id="bg">

    <div class="page-wraper">

        <!-- HEADER START -->
        <?php include('include/header.php') ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content">

            <!-- INNER PAGE BANNER -->
            <!-- <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(<?php echo base_url()?>assets/images/banner/9.jpg);">
            	<div class="overlay-main bg-black opacity-07"></div>
                <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                        		<h2 class="m-tb0">Contact Us Form</h2>
                                <p>The essence of interior design will always be about people and how they live. It is about the realities of what makes for an attractive, civilized.</p>
                            </div>
                        </div>

                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Contact us</li>
                                </ul>
                            </div>

                    </div>
                </div>
            </div> -->
            <!-- INNER PAGE BANNER END -->

            <!-- SECTION CONTENTG START -->
            <div class="section-full p-tb80 inner-page-padding">
                <!-- LOCATION BLOCK-->
                <div class="container">

                    <!-- GOOGLE MAP & CONTACT FORM -->
                    <div class="section-content">
                        <!-- CONTACT FORM-->
                        <div class="row">
                        	<div class="col-lg-8 col-md-12 col-sm-12">
                            	<form class="contact-form cons-contact-form bg-gray p-a30" method="post">
                                    <div class="contact-one">

                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="sx-separator-outer separator-left">
                                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(<?php echo base_url()?>assets/images/background/cross-line2.png)">
                                                    <h3 class="sep-line-one">Enquiry</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->

                                        <div class="form-group">
                                            <input name="name" type="text" required class="form-control" placeholder="Name">
                                        </div>

                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control" required placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <textarea name="message" rows="4" class="form-control " required placeholder="Message"></textarea>
                                        </div>

                                    	<div class="text-right">
                                            <button name="submit" type="submit" value="Submit" class="site-button btn-half"><span> submit</span>
                                            </button>
                                            <p class="msg"></p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                            	<div class="contact-info block-shadow bg-white bg-center p-a40" style="background-image:url(<?php echo base_url()?>assets/images/background/bg-map.png)">

                                    <div>
                                        <!-- TITLE START -->
                                        <div class="section-head">
                                            <div class="sx-separator-outer separator-left">
                                                <div class="sx-separator bg-white bg-moving bg-repeat-x" style="background-image:url(<?php echo base_url()?>assets/images/background/cross-line2.png)">
                                                    <h3 class="sep-line-one">Info</h3>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- TITLE END -->
                                        <div class="sx-icon-box-wraper left p-b30">
                                            <div class="icon-xs"><i class="fa fa-phone"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0">Phone number</h5>
                                                <b>Ar.Akhil Augustine </b>
                                                <p><a href="tel:+919400809077">+91 940 0809 077</a></p>
                                                <b>Ar.Albin Joseph  </b>
                                                <p><a href="tel:+918848727345">+91 884 8727 345</a></p>
                                            </div>
                                        </div>

                                        <div class="sx-icon-box-wraper left p-b30">
                                            <div class="icon-xs"><i class="fa fa-envelope"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0">Email address</h5>
                                                <p>akhilalbinarchitects@gmail.com</p>
                                            </div>
                                        </div>

                                        <div class="sx-icon-box-wraper left">
                                            <div class="icon-xs"><i class="fa fa-map-marker"></i></div>
                                            <div class="icon-content">
                                                <h5 class="m-t0">Address info</h5>
                                                <p>Akhil Albin Architects
Pallikunnu, kannur, Kerala 670004</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
           </div>
            <div class="gmap-outline">

                <!-- <div id="gmap_canvas2" class="google-map"></div> -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3904.16173477302!2d75.37030231481113!3d11.89382399156929!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0!2zMTHCsDUzJzM3LjgiTiA3NcKwMjInMjEuMCJF!5e0!3m2!1sen!2sin!4v1648186446038!5m2!1sen!2sin" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- SECTION CONTENT END -->

        </div>
        <!-- CONTENT END -->

        <!-- FOOTER START -->
        <?php include('include/footer.php') ?>
        <!-- FOOTER END -->

        <!-- BUTTON TOP START -->
		<button class="scroltop"><span class="fa fa-angle-up  relative" id="btn-vibrate"></span></button>

    </div>


<!-- LOADING AREA START ===== -->
<div class="loading-area">
    <div class="loading-box"></div>
    <div class="loading-pic">
        <div class="cssload-spinner">
            <div class="cssload-cube cssload-cube0"></div>
            <div class="cssload-cube cssload-cube1"></div>
            <div class="cssload-cube cssload-cube2"></div>
            <div class="cssload-cube cssload-cube3"></div>
            <div class="cssload-cube cssload-cube4"></div>
            <div class="cssload-cube cssload-cube5"></div>
            <div class="cssload-cube cssload-cube6"></div>
            <div class="cssload-cube cssload-cube7"></div>
            <div class="cssload-cube cssload-cube8"></div>
            <div class="cssload-cube cssload-cube9"></div>
            <div class="cssload-cube cssload-cube10"></div>
            <div class="cssload-cube cssload-cube11"></div>
            <div class="cssload-cube cssload-cube12"></div>
            <div class="cssload-cube cssload-cube13"></div>
            <div class="cssload-cube cssload-cube14"></div>
            <div class="cssload-cube cssload-cube15"></div>
        </div>
    </div>
</div>
<!-- LOADING AREA  END ====== -->

<!-- JAVASCRIPT  FILES ========================================= -->
<script  src="<?php echo base_url()?>assets/js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
<script  src="<?php echo base_url()?>assets/js/popper.min.js"></script><!-- POPPER.MIN JS -->
<script  src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script  src="<?php echo base_url()?>assets/js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->
<script  src="<?php echo base_url()?>assets/js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
<script  src="<?php echo base_url()?>assets/js/counterup.min.js"></script><!-- COUNTERUP JS -->
<script  src="<?php echo base_url()?>assets/js/waypoints-sticky.min.js"></script><!-- sticky header JS -->
<script  src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script><!-- MASONRY  -->
<script  src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->
<script src="<?php echo base_url()?>assets/js/jquery.owl-filter.js"></script>
<script  src="<?php echo base_url()?>assets/js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
<script  src="<?php echo base_url()?>assets/js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqwdZHU6gzIhPBEB2VNbIydp4coZmNPy0&amp;callback=initMap"  ></script><!-- GOOGLE MAP -->
<script  src="<?php echo base_url()?>assets/js/map.script.js"></script><!-- MAP FUCTIONS [ this file use with google map]  -->
<script  src="<?php echo base_url()?>assets/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script src="<?php echo base_url()?>assets/js/theia-sticky-sidebar.js"></script><!--sticky content-->
<script src="<?php echo base_url()?>assets/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->
<script>
    $('.contact-form').submit(function (event){
        event.preventDefault();
        var data=new FormData(this)
        $('.msg').html('Mail Send Successfull')
        $('.msg').css('color','green')
        $('.msg').fadeIn(10).fadeOut(4000)
        $('.form-control').val('')
        $.ajax({
          url:"<?php echo site_url('Send-Mail') ?>",
          type: "POST",
          data:data,
          contentType:false,
          cache:false,
          processData:false,
          success:function(result)
          {
            // alert(result)
          }
        });
        return false;
    })
</script>

</body>
</html>
