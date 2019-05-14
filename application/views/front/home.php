<?php
 include 'header.php';
foreach ($pendaftar as $r) {
  $pendaftar = $r['pendaftar_jumlah'];
  $diterima = $r['pendaftar_diterima'];
  $current = $r['pendaftar_current'];
}
 ?>

	<section>
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="curriculum">
					<h1><?php echo $curriculum ?></h1>
					<p><?php echo $national ?></p>
					<h5><?php echo $mapelNasional ?></h5>
					<div class="line" ></div>
					<p>Al Azhar</p>
					<h5><?php echo $mapelLokal ?></h5>
					<div class="line" ></div>
					<p><?php echo $international ?></p>
					<h5><?php echo $mapelInter ?></h5>
					<div class="line" ></div>
				</div>
			</div>
			<div class="col-md-8">
				<div class="curriculum-right">
					<div class="row no-gutters">
						<div class="col-md-3">
							<a title="RELIGIOUS" href="<?php echo base_url('assets/front/img/r.jpg') ?>" class="image-link">
								<div class="img" style="background: linear-gradient(
							      rgba(0, 0, 0, 0.4), 
							      rgba(0, 0, 0, 0.4)
							),url('<?php echo base_url('assets/front/img/r.jpg') ?>') no-repeat center ; background-size: cover; " ><h1>R</h1></div>
							</a>
							<p>RELIGIOUS</p>
						</div>
						<div class="col-md-3">
							<a title="ENTERPRENEURSHIP" href="<?php echo base_url('assets/front/img/e.jpg') ?>" class="image-link">
							<div class="img" style="background: linear-gradient(
							      rgba(0, 0, 0, 0.4), 
							      rgba(0, 0, 0, 0.4)
							),url('<?php echo base_url('assets/front/img/e.jpg') ?>') no-repeat center ; background-size: cover; " ><h1>e</h1></div>
							</a>
							<p>ENTERPRENEURSHIP</p>
						</div>
						<div class="col-md-3">
							<a title="AWARE OF ENVIRONMENT" href="<?php echo base_url('assets/front/img/a.jpg') ?>" class="image-link">
							<div class="img" style="background: linear-gradient(
							      rgba(0, 0, 0, 0.4), 
							      rgba(0, 0, 0, 0.4)
							),url('<?php echo base_url('assets/front/img/a.jpg') ?>') no-repeat center ; background-size: cover; " ><h1>a</h1></div>
							</a>
							<p>AWARE OF ENVIRONMENT</p>
						</div>
						<div class="col-md-3">
							<a title="LEARNER" href="<?php echo base_url('assets/front/img/l.jpg') ?>" class="image-link">
							<div class="img" style="background: linear-gradient(
							      rgba(0, 0, 0, 0.4), 
							      rgba(0, 0, 0, 0.4)
							),url('<?php echo base_url('assets/front/img/l.jpg') ?>') no-repeat center ; background-size: cover; " ><h1>l</h1></div>
							</a>
							<p>LEARNER</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="head-section" >
		<div class="row no-gutters">
			<div class="col-md-10">
				<div class=" fact-page">	
					<div class="row">
						<div class="col-md-5">
							<div class="mp-fact top">
								<h1>smp islam</h1>
								<h1>Al Azhar 13</h1>
								<h1>Surabaya</h1>
								<br>
								<br>

							</div>
						</div>
						<div class="col-md-7">
							<div class="mp-fact right">
								<p><?php echo $cas ?></p>
							</div>
						</div>
						<div class="col-md-12">
							<div class="space-line">
								<div class="sline"></div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="mp-fact bottom">
								<img class="cas" src="<?php echo base_url('assets/front/img/cambridge.png') ?>">
							</div>
						</div>
						<div class="col-md-7">
							<div class="mp-fact right mx-auto">
								<a style="color: white" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><div class="label"><?php echo $iisVal ?></div></a>
								<a style="color: white" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><div class="label"><?php echo $TO ?></div></a>
								<a style="color: white" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><div class="label"><?php echo $SS ?></div></a>
								<a style="color: white" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><div class="label"><?php echo $LO ?></div></a>
								<a style="color: white" href="<?php echo base_url($langID.'/profile/sekolah') ?>"><div class="label"><?php echo $CA ?></div></a>
								
								
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-2">
				<div class="fact-right">
					<h1><?php echo $enrolment_fact ?></b></h1>
					<h2><?php echo $applications ?></h2>
					<h3><?php echo $pendaftar ?></h3>
					<h2><?php echo $accepted ?>	</h2>
					<h3><?php echo $diterima ?></h3>
					<h2><?php echo $current_student ?>	</h2>
					<h3><?php echo $current ?></h3>
				</div>
			</div>
		</div>
	</section>
	<section class="ekskul-section">
		<div class="row no-gutters">
			<div class="col-md-4">
				<div class="ekskul">
					<img style="width: 100px" src="<?php echo base_url('assets/img/icon.png') ?>">
					<h1><?php echo $ekskul ?></h1>
					<h3><?php echo $wajib ?></h3>
					<p><?php echo $pramuka ?></p>
					<br>
					<h3><?php echo $pilihan ?></h3>
					<?php for ($i=0; $i < count($ekskulPilihan); $i++) { 
						echo '<p>'.$ekskulPilihan[$i].'</p>';
					} ?>
					<br>
					<h3><?php echo $pembinaan ?></h3>
					<?php for ($i=0; $i < count($pp); $i++) { 
						echo '<p>'.$pp[$i].'</p>';
					} ?>
				</div>
			</div>
			<div class="col-md-8">
				<div class="curriculum-right">
					<h1><?php echo $trending ?></h1>
					<div class="row no-gutters">
						<?php foreach ($read as $r) { ?>
						<div class="col-md-6">
								<a href="<?php echo base_url($langID.'/article/detail/'.$r['berita_id'].'#detail') ?>">
									<div class="frame">
										<div class="img" style="background: url('<?php echo base_url('uploads/'.$r['berita_img']) ?>') no-repeat center ; background-size: cover; " >
										</div>
										<div class="capt">
											<h5><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?> </h5>  <span class="fas fa-tags" ></span> <?php echo $r['kb_name'] ?><br> 
										</div>
									</div>		
								</a>						
						</div>
						<?php } ?>
					</div>
					<a style="font-size: 25px" class="float-right" href="<?php echo base_url($langID.'/news') ?>">Read More >></a>
				</div>

			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
