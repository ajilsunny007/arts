<?php $CI=&get_instance(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Akhil Albin Architects is an architectural firm working in the field of architecture and urbanism. Our company guarantees unique architectural design with attention to detail.">
    <meta name="keywords" content="Architecture Studio,Architecture,Akhil and Albin,Akhil Albin Architects">
    <meta property="og:image" content="<?php echo base_url()?>assets/images/logo.png" />
    
    <!-- FAVICONS ICON -->
    <link rel="icon" href="<?php echo base_url()?>assets/images/logo.png" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url()?>assets/images/logo.png" />

    <!-- PAGE TITLE HERE -->
    <title>Akhil Albin Architects - Project Details</title>

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

<body>

	<div class="page-wraper">

        <!-- HEADER START -->
        <?php include('include/header.php') ?>
        <!-- HEADER END -->

        <!-- CONTENT START -->
        <div class="page-content" >
            <!-- INNER PAGE BANNER -->
            <?php
            foreach($projects as $key){
                $image=$CI->get_image($key->p_id);
                $name=$key->p_name;
                $caption=$key->p_caption;
            }
            ?>
            <!-- <div class="sx-bnr-inr overlay-wraper bg-parallax bg-top-center"  data-stellar-background-ratio="0.5"  style="background-image:url(<?php echo base_url('assets/projects/').$image?>);"> -->
            	<div class="overlay-main bg-black opacity-07"></div>
                <!-- <div class="container">
                    <div class="sx-bnr-inr-entry">
                    	<div class="banner-title-outer">
                        	<div class="banner-title-name">
                            		<h2 class="m-tb0"><?php echo $name ?></h2>
                                    <p>
                                    <?php echo $caption ?>
                                    </p>
                            </div>
                        </div>

                            <div>
                                <ul class="sx-breadcrumb breadcrumb-style-2">
                                    <li><a href="javascript:void(0);">Home</a></li>
                                    <li>Projects-Details</li>
                                </ul>
                            </div>

                    </div>
                </div> -->
            </div>
            <!-- INNER PAGE BANNER END -->

			<!-- SECTION CONTENT START -->
            <div class="section-full p-tb80 column-grid-4 inner-page-padding" >
            	<div class="container text-center" style="margin-top: 100px !important">
                    <p class="sx-tilte" style="color: darkgray;font-size: 24px;align-content:center"><?php echo strtoupper($name) ?></p>
                    <!-- GALLERY CONTENT START -->
                     <ul  class="masonry-outer mfp-gallery row work-grid clearfix list-unstyled">

                        <?php
                        foreach($images as $key){
                        ?>
                        <li class="masonry-item cat-1 col-xl-3  col-lg-4 col-md-6 col-sm-12 m-b30">
                            <div class="sx-box   image-hover-block">
                                <div class="sx-thum-bx">
                                    <img src="<?php echo base_url('assets/projects/').$key->image?>" alt="">
                                </div>
                                <a class="mfp-link" href="<?php echo base_url('assets/projects/').$key->image?>">
                                    <i class="fa fa-arrows-alt"></i>
                                </a>
                           </div>
                        </li>
                        <?php } ?>
                     </ul>
                    <!-- GALLERY CONTENT END -->
            	</div>


            </div>
            <!-- SECTION CONTENT END  -->

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
<script  src="<?php echo base_url()?>assets/js/jquery.bgscroll.js"></script><!-- BACKGROUND SCROLL -->
<script src="<?php echo base_url()?>assets/js/theia-sticky-sidebar.js"></script><!--sticky content-->
<script src="<?php echo base_url()?>assets/js/switcher.js"></script><!-- SWITCHER FUCTIONS  -->


</body>


<!-- Mirrored from 7xtheme.com/inteshape/project-grid-4-columns.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Aug 2020 05:18:35 GMT -->
</html>
