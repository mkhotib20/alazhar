<?php include 'header.php'?>
	<section id="isi">
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p id="evtBtn" class="aktif-profile" ><?php echo 'Event' ?></p>
					<p id="psbBtn" ><?php echo $psb ?></p>
					<p id="prestasiBtn" ><?php echo $prestasiT ?></p>
					<?php 
						if ($this->session->has_userdata('username')) {
				            if ($this->session->userdata('level')=='2') {
				                echo "<p id='pengumumanBtn' > ".$pengumumanTit." </p>";
				            }
				        }
					 ?>
					<p id="galBtn"><?php echo $gallery ?></p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div id="gal">
							<h3><?php echo $galleryCt ?></h3> <br>
						<div class="row no-gutters">
							<?php foreach ($read as $r) { ?>
							<div class="col-md-6">
								<a title="<?php echo $r['gal_caption'] ?>" style="cursor: zoom-in;" class="image-link" href="<?php echo base_url('uploads/gallery/'.$r['gal_img']) ?>">
									<div class="frame">
										<div class="img" style="background: url('<?php echo base_url('uploads/gallery/'.$r['gal_img']) ?>') no-repeat center ; background-size: cover; " >
										</div>
										<div class="capt guru">
											<p><?php echo $r['gal_caption'];  ?></p>
										</div>
									</div>		
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
					<div id="psb">
						<div class="row">
							<h3><?php echo $psbCt ?></h3>
							<div class="col-md-12">
								<p><?php echo $psbLink ?></p>
							</div>
						</div>
					</div>
					<div id="pengumuman">
						<h3><?php echo $pengumumanCt ?></h3>
						<div class="row no-gutters">
							<?php foreach ($pengumuman as $r) { ?>
							<div class="col-md-6">
								<div>
									<a href="<?php echo base_url($langID.'/article/detail/'.$r['berita_id'].'#detail') ?>">
										<div class="frame">
											<div class="img" style="background: url('<?php echo base_url('uploads/'.$r['berita_img']) ?>') no-repeat center ; background-size: cover; " >
											</div>
											<div class="capt">
												<p><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?></p>
											</div>
										</div>		
									</a>						
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div id="prestasi">
							<h3><?php echo $acv ?></h3> <br>
						<div class="row no-gutters">
							<?php foreach ($prestasi as $r) { ?>
							<div class="col-md-6">
								<div>
									<a href="<?php echo base_url($langID.'/article/detail/'.$r['berita_id'].'#detail') ?>">
										<div class="frame">
											<div class="img" style="background: url('<?php echo base_url('uploads/'.$r['berita_img']) ?>') no-repeat center ; background-size: cover; " >
											</div>
											<div class="capt">
												<p><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?></p>
											</div>
										</div>		
									</a>						
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div id="evt">
							<h3><?php echo $evtCt ?></h3> <br>
						<div class="row no-gutters">
							<?php foreach ($event as $r) { ?>
							<div class="col-md-6">
								<div>
									<a href="<?php echo base_url($langID.'/article/detail/'.$r['berita_id'].'#detail') ?>">
										<div class="frame">
											<div class="img" style="background: url('<?php echo base_url('uploads/'.$r['berita_img']) ?>') no-repeat center ; background-size: cover; " >
											</div>
											<div class="capt">
												<p><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?></p>
											</div>
										</div>		
									</a>						
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>

	<script>
		$(document).ready(function(){
			$('#evt').show()
			$('#prestasi').hide()
			$('#gal').hide();
			$('#psb').hide();
			$('#pengumuman').hide();
		})
		$('#galBtn').click(function(){
			$('#gal').show();
			$(this).attr("class", "aktif-profile");

			$('#psbBtn').removeAttr("class");
			$('#prestasiBtn').removeAttr("class");
			$('#evtBtn').removeAttr("class");
			$('#pengumumanBtn').removeAttr("class");
			
			$('#psb').hide();
			$('#prestasi').hide()
			$('#evt').hide();
			$('#pengumuman').hide();
		})
		$('#pengumumanBtn').click(function(){
			$('#pengumuman').show();
			$(this).attr("class", "aktif-profile");

			$('#psbBtn').removeAttr("class");
			$('#prestasiBtn').removeAttr("class");
			$('#evtBtn').removeAttr("class");
			$('#galBtn').removeAttr("class");
			
			$('#psb').hide();
			$('#prestasi').hide()
			$('#evt').hide();
			$('#gal').hide();
		})
		$('#psbBtn').click(function(){
			$('#psb').show();
			$(this).attr("class", "aktif-profile");

			$('#galBtn').removeAttr("class");
			$('#prestasiBtn').removeAttr("class");
			$('#evtBtn').removeAttr("class");
			$('#pengumumanBtn').removeAttr("class");
			
			$('#gal').hide();
			$('#prestasi').hide()
			$('#evt').hide();
			$('#pengumuman').hide();
		})
		$('#prestasiBtn').click(function(){
			$('#prestasi').show();
			$(this).attr("class", "aktif-profile");

			$('#galBtn').removeAttr("class");
			$('#psbBtn').removeAttr("class");
			$('#evtBtn').removeAttr("class");
			$('#pengumumanBtn').removeAttr("class");
			
			$('#gal').hide();
			$('#psb').hide();
			$('#evt').hide();
			$('#pengumuman').hide();
		})
		$('#evtBtn').click(function(){
			$('#evt').show();
			$(this).attr("class", "aktif-profile");

			$('#galBtn').removeAttr("class");
			$('#psbBtn').removeAttr("class");
			$('#pengumumanBtn').removeAttr("class");
			$('#prestasiBtn').removeAttr("class");
			
			$('#gal').hide();
			$('#psb').hide();
			$('#prestasi').hide()
			$('#pengumuman').hide();
		})
	</script>