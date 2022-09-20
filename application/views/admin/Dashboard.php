<?php
$CI=&get_instance();
$session_check=$CI->session_check(0);
if ($session_check==0) {
 ?>
<!DOCTYPE html>
<head>
<title>Architecture Studio</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="<?php echo base_url()?>assets/admin/css/style.css" rel='stylesheet' type='text/css' />
<link href="<?php echo base_url()?>assets/admin/css/style-responsive.css" rel="stylesheet"/>
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/lightbox.css">
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/font.css" type="text/css"/>
<link href="<?php echo base_url()?>assets/admin/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<script src="<?php echo base_url()?>assets/admin/js/jquery2.0.3.min.js"></script>
</head>
<body>
<section id="container">
<!--header start-->
<?php include('header.php') ?>
<!--header end-->
<!--sidebar start-->
<?php include('menubar.php') ?>
<!--sidebar end-->
<!--main content start-->
<section id="main-content">
	<section class="wrapper">
		<!-- gallery -->
		<!-- gallery -->
	<div class="gallery" style="min-height:440px">
    <select class="pull-right form-control category" style="width:150px" name="">
      <option value="">-- All Category --</option>
      <?php
      foreach ($category as $key) {
      ?>
      <option value="<?php echo $key->cat_id ?>"><?php echo $key->cat_name ?></option>
      <?php } ?>
    </select>
		<h2 class="w3ls_head">Projects</h2>
		<div class="gallery-grids">
				<div class="gallery-top-grids">
          <?php
          $i=0;
          foreach ($projects as $key) {
            $image=$CI->get_image($key->p_id);
            if($i%3==0)
            {
              echo '<div class="clearfix"> </div>';
            }
          ?>
          <div class="col-sm-4 gallery-grids-left img<?php echo $key->p_id ?>">
						<div class="gallery-grid">
                <button type="button" title="Delete Project" class="closeimg" onclick="deleteproject(<?php echo $key->p_id ?>)">X</button>
								<img src="<?php echo base_url('assets/projects/').$image ?>" alt="" />
								<div class="captn">
									<h4><?php echo $key->p_name ?></h4>
									<p><?php echo $key->p_caption ?></p>
                  <a href="<?php echo site_url('Project-View/').$key->p_id; ?>" class="btn btn-info">View</a>
                  <a href="<?php echo site_url('Edit-Project/').$key->p_id; ?>" class="btn btn-danger">Edit</a>
								</div>
						</div>
					</div>
        <?php

        $i++;  }
        ?>
				</div>
				<div class="clearfix"> </div>
				<script src="<?php echo base_url()?>assets/admin/js/lightbox-plus-jquery.min.js"> </script>

	</div>
	</div>
	<!-- //gallery -->

</section>
 <!-- footer -->
		  <?php include('footer.php') ?>
  <!-- / footer -->
</section>

<!--main content end-->
</section>
<script src="<?php echo base_url()?>assets/admin/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/scripts.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="<?php echo base_url()?>assets/admin/js/jquery.scrollTo.js"></script>
<!-- gallery -->
<script>
$('.category').change(function (){
  var val=$(this).val()
  $.ajax({
    url:"<?php echo site_url('Category-View') ?>",
    type: "POST",
    data:{val:val},
    success:function(result)
    {
      // alert(result)
      $('.gallery-top-grids').html(result)
    }
  });
})
function deleteproject(val){
  if(confirm('Are you sure delete Project?'))
  {
    $('.img'+val).hide()
    $.ajax({
      url:"<?php echo site_url('Delete-Project') ?>",
      type: "POST",
      data:{val:val},
      success:function(result)
      {}
    });
  }
  return false;
}
</script>
</body>
</html>
<?php
}
else
{
	redirect('','reload');
}
?>
