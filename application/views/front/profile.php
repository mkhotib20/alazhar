<?php
 include 'header.php'?>
	<section id="isi">
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p id="sejarahBtn"><?php echo $sejarah ?></p>
					<p id="visiBtn" ><?php echo $vision ?></p>
					<p id="aboutBtn" ><?php echo $tentangS ?></p>
					<p id="aktivBtn" ><?php echo $kelas ?></p>
					<p id="fasilitasBtn" ><?php echo $fasilitas ?></p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div id="sejarah">
						<h1><?php echo $sejarah ?></h1>
						<div class="row">
							<div class="col-md-12">
								<center><img class="sekolah-img" src="<?php echo base_url('assets/front/img/sejarah.jpg') ?>"></center> <br>
								<p><?php echo $history ?></p>
							</div>
						</div>
					</div>
					<div id="about">
						<h1><?php echo $tentangS ?></h1>
						<div class="row">
							<div class="col-md-12">
								<center><img class="sekolah-img" src="<?php echo base_url('assets/front/img/gedung-sekolah.jpg') ?>"></center> <br>
								<p><?php echo $tentangDetail ?></p>
							</div>
						</div>
					</div>
					<div id="aktiv">
						<h1><?php echo $kelas ?></h1>
						<div class="row">
							<div class="col-md-12">
								<p><?php echo $kelasC ?></p>
							</div>
							<div class="col-12 col-md-12">
								<a title="Kelas VII" class="image-link" href="<?php echo base_url('assets/front/img/bg.jpg') ?>">
									<div class="frame">
										<div class="img" style="background: url('<?php echo base_url('assets/front/img/bg.jpg') ?>') no-repeat center ; background-size: cover; " >
										</div>
									</div>		
								</a>
							</div>
						</div>
					</div>
					<div id="fasilitas">
						<h1><?php echo $fasilitas ?></h1>
						<div class="row no-gutters">
							<?php foreach ($read as $r) { ?>
							<div class="col-md-4">
								<div>
									<a title="<?php echo $r['fasilitas_nama'] ?>" class="image-link" href="<?php echo base_url('uploads/fasilitas/'.$r['fasilitas_img']) ?>">
										<div class="frame">
											<div class="img" style="background: url('<?php echo base_url('uploads/fasilitas/'.$r['fasilitas_img']) ?>') no-repeat center ; background-size: cover; " >
											</div>
											<div class="capt">
												<p><?php if ($langID == 'id') {echo $r['fasilitas_nama'];} else{echo $r['fasilitas_nama_en'];}  ?></p>
											</div>
										</div>		
									</a>						
								</div>
							</div>
							<?php } ?>
						</div>
					</div>
					<div id="visi">
						<h1><?php echo $vision ?></h1>
						<div class="row">
							<div class="col-md-12">
								<center><img class="sekolah-img" src="<?php echo base_url('assets/front/img/visi-misi.jpg') ?>"></center> <br>
								<p><?php echo $visi ?></p>
								<p><?php echo $misi ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#visi').hide();
			$('#aktiv').hide();
			$('#about').hide();
			$('#fasilitas').hide();
			$('#sejarahBtn').attr("class", "aktif-profile");
		})

		$('#sejarahBtn').click(function(){
			$('#sejarah').show();
			
			$('#sejarahBtn').attr("class", "aktif-profile");
			$('#visiBtn').removeAttr("class");
			$('#aktivBtn').removeAttr("class");
			$('#fasilitasBtn').removeAttr("class");
			$('#aboutBtn').removeAttr("class");

			$('#visi').hide();
			$('#aktiv').hide();
			$('#fasilitas').hide();
		})
		$('#aboutBtn').click(function(){
			$('#about').show();
			
			$(this).attr("class", "aktif-profile");
			$('#visiBtn').removeAttr("class");
			$('#aktivBtn').removeAttr("class");
			$('#fasilitasBtn').removeAttr("class");
			$('#sejarahBtn').removeAttr("class");

			$('#visi').hide();
			$('#aktiv').hide();
			$('#sejarah').hide();
			$('#fasilitas').hide();
		})
		$('#visiBtn').click(function(){
			$('#visi').show();
			
			$('#visiBtn').attr("class", "aktif-profile");
			$('#sejarahBtn').removeAttr("class");
			$('#aktivBtn').removeAttr("class");
			$('#fasilitasBtn').removeAttr("class");
			$('#aboutBtn').removeAttr("class");
			
			$('#sejarah').hide();
			$('#aktiv').hide();
			$('#fasilitas').hide();
			$('#about').hide();
		})
		$('#aktivBtn').click(function(){
			$('#aktiv').show();
			
			$('#aktivBtn').attr("class", "aktif-profile");
			$('#sejarahBtn').removeAttr("class");
			$('#visiBtn').removeAttr("class");
			$('#fasilitasBtn').removeAttr("class");
			$('#aboutBtn').removeAttr("class");
			
			$('#sejarah').hide();
			$('#visi').hide();
			$('#fasilitas').hide();
			$('#about').hide();
		})
		$('#fasilitasBtn').click(function(){
			$('#fasilitas').show();
			
			$('#fasilitasBtn').attr("class", "aktif-profile");
			$('#sejarahBtn').removeAttr("class");
			$('#visiBtn').removeAttr("class");
			$('#aktivBtn').removeAttr("class");
			$('#aboutBtn').removeAttr("class");

			$('#sejarah').hide();
			$('#visi').hide();
			$('#aktiv').hide();
			$('#about').hide();
		})
	</script>