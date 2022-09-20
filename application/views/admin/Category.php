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
	<div class="gallery">
    <button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target=".bd-example-modal-sm">Add Category</button>
		<h2 class="w3ls_head">Category</h2>
    <table class="table">
      <thead class="thead-light">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Category Name</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody class="catbody">
        <?php
        $i=1;
        foreach ($category as $value)
        {
        ?>
        <tr>
          <th scope="row"><?php echo $i ?></th>
          <td><?php echo $value->cat_name ?></td>
          <td><button type="button" onclick="deletecat(<?php echo $value->cat_id ?>)" class="btn-link"><i class="fa fa-times"></i></button></td>
        </tr>
        <?php
          $i++;
        }
         ?>
      </tbody>
    </table>
	</div>
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
      </div>
      <div class="modal-body">
        <h5>Category Name</h5><br>
        <input type="text" class="form-control category">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary savecat">Save</button>
      </div>
    </div>
  </div>
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
function deletecat(val)
{
  if(confirm('Are you sure delete category?'))
  {
    $.ajax({
      url:"<?php echo site_url('Delete-Category') ?>",
      type: "POST",
      data:{val:val},
      success:function(result)
      {
        $('.catbody').html(result)
      }
    });
  }
}
$('.savecat').click(function (){
  var cat=$('.category').val()
  if(cat!='')
  {
    $('.category').val('')
    $.ajax({
      url:"<?php echo site_url('Add-Category') ?>",
      type: "POST",
      data:{cat:cat},
      success:function(result)
      {
        $('.catbody').html(result)
        $('.modal').modal('hide')
      }
    });
  }
})
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
