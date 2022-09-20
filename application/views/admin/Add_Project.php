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
    <div class="col-lg-12">
        <section class="panel" style="min-height:430px">
          <form class="formsub" action="<?php echo site_url('Upload-Project') ?>" method="post" enctype="multipart/form-data">
            <div class="panel-body">
              <h3>Add Projects</h3><br>
              <div class="col-md-6">
                <h5>Project Title</h5><br>
                <input type="text" class="form-control" name="name" value="" required>
              </div>
              <div class="col-md-6">
                <h5>Caption</h5><br>
                <input type="text" class="form-control" name="caption" value="">
              </div>
              <div class="col-md-6">
                <br><h5>Category</h5><br>
                <select class="form-control" name="category" required>
                  <option value="">--Select--</option>
                  <?php
                  foreach ($category as $value) {
                  ?>
                  <option value="<?php echo $value->cat_id ?>"><?php echo $value->cat_name ?></option>
                  <?php } ?>
                </select>
              </div>
              <div class="col-md-6">
                <br>
                <h5>Image Select</h5><br>
                <input type="file" class="form-control" id="images" name="images[]" onchange="preview_images();" multiple required/>
              </div>
              <div class="col-md-12">
                <div class="row" id="image_preview"></div>
              </div>
              <div class="col-md-12">
                <br>
                <button type="submit" class="btn btn-primary pull-right add">Add & Save</button>
                <div class="loader pull-right" style="display:none"></div>
              </div>
            </div>
          </form>
        </section>
    </div>
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
$('.formsub').submit(function (){
  $('.loader').show()
  $('.add').hide()
})
function preview_images()
{
 var total_file=document.getElementById("images").files.length;
 var html="";
 for(var i=0;i<total_file;i++)
 {
   if(i%4==0)
   {
     html+='<div class="clearfix"> </div>';
   }
  html+="<div class='col-md-3' style='margin-top:10px'><img class='img-responsive' src='"+URL.createObjectURL(event.target.files[i])+"'></div>";

 }
 $('#image_preview').html(html)
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
