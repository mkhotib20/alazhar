<?php include $lang; ?>
<!DOCTYPE html>
<html lang="en">
<?php 
$bg = $this->data->read('tb_bg')->result_array();

$uri = $this->uri->segment(2);
?>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/img/icon.png') ?>"/>

  <meta name="description" content="">
  <meta name="author" content="">

  <title>SMP Al Azhar 13 Surabaya | <?php if ($uri == '') {echo ucfirst('home');}else{echo ucfirst($uri);} ?></title>

  <link href="<?php echo base_url('assets/front/css/bootstrap.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/css/bootstrap-grid.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/front/css/style.css') ?>" rel="stylesheet"> 
  <link href="<?php echo base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
 
	<link rel="stylesheet" href="<?php echo base_url('assets/front/css/') ?>magnific.min.css">
  <style type="text/css">
  /* .dropleft:hover>.dropdown-menu {
      display: block;
    }
	*/
</style>

</head>
<body>
	<section class="head-section" >
		<div class="row no-gutters">
			<div class="col-md-10">
				<div id="demo" class="carousel slide" data-ride="carousel">
					  <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					  </ul>
					  <div class="cpt-bg">
							<img class="head-icon" src="<?php echo base_url('assets/img/icon.png') ?>">
							<a href="<?php echo base_url('id') ?>"><img class="lang-icon <?php if($langID!='id'){echo 'grayscale';} ?> float-right" src="<?php echo base_url('assets/front/img/id.png') ?>"></a>
							<a href="<?php echo base_url('en') ?>"><img class="lang-icon <?php if($langID!='en'){echo 'grayscale';} ?> float-right" src="<?php echo base_url('assets/front//img/en.png') ?>"></a>
							<div class="mp-title">
								<h1>SMP Islam</h1>
								<h1>Al Azhar 13</h1>
								<h1>Surabaya</h1>
								<br>
								<img class="cas" src="<?php echo base_url('assets/front/img/cambridge.png') ?>">
							</div>
						</div>
					  <div class="carousel-inner">
					    <?php for ($i=0; $i < count($bg); $i++) { ?>
					    <div class="carousel-item <?php if($i==0){echo('active');} ?>">
							<div style="background: linear-gradient(
						      rgba(0,0,0, 0.5), 
						      rgba(0,0,0, 0.5)
						    ), url('<?php echo base_url("uploads/bg/".$bg[$i]['bg_img']) ?>') no-repeat center ;
							background-size: cover;" class="main-page"></div>
					    </div>
						<?php } ?>
					  </div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="navigation ">
					<span style="font-size: 20px" class="fas fa-times" ></span>
					<ul class="nav-list" >
						<li <?php if ($uri=='') {echo 'class="aktif"'; } ?> ><a class="a" href="<?php echo base_url($langID) ?>"><?php echo $home ?></a> </li>
						<li  class="dropleft <?php if ($uri=='profile') {echo 'aktif'; } ?>">
				          <a href="#" class="a" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $profile ?></a>
				          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				            <a class="dropdown-item" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><?php echo $school ?></a>
				            <a class="dropdown-item" href="<?php echo base_url($langID.'/profile/guru') ?>"><?php echo $guruHead ?></a>
				          </ul>
				        </li>
						<li <?php if ($uri=='news' || $uri == 'article') {echo 'class="aktif"'; } ?>><a class="a" href="<?php echo base_url($langID.'/news') ?>"><?php echo $news ?></a></li>
						<li <?php if ($uri=='info') {echo 'class="aktif"'; } ?>><a class="a" href="<?php echo base_url($langID.'/info') ?>"><?php echo $info ?></a></li>
						<?php 
							if (!$this->session->has_userdata('username')) {
					            include 'notLogged.php';
					        }else{
					            if ($this->session->userdata('level')=='1') {
					                include 'notLogged.php';
					            }
					            else{
					            	include 'logged.php';
					            }
					        }
						 ?>
						
					</ul>
				</div>
			</div>
		</div>
	</section>
