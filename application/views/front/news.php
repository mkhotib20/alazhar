<?php include 'header.php'?>
	<section id="isi">
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p id="trendingBTN" class="aktif-profile"><?php echo $trending ?></p>
					<p id="pengBTN" ><?php echo $pengumumanTit ?></p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div id="trending">
						<div class="row no-gutters">
							<?php foreach ($read as $r) { ?>
							<div class="col-md-6">
								<a href="<?php echo base_url($langID.'/article/detail/'.$r['berita_id'].'#detail') ?>">
									<div class="frame">
										<div class="img" style="background: url('<?php echo base_url('uploads/'.$r['berita_img']) ?>') no-repeat center ; background-size: cover; " >
										</div>
										<div class="capt guru">
											<p><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?></p>
										</div>
									</div>		
								</a>
							</div>
							<?php } ?>
						</div>
					</div>
					<div id="peng">
						<h1><?php echo $pengumumanEx ?></h1>
						<div class="row">
							<?php foreach ($readPengumuman as $r) { ?>
							<div class="col-md-12">
								<div class="list-pengumuman">
									<a download="<?php echo $r['berita_img'] ?>" title="ImageName" href="<?php echo base_url('uploads/'.$r['berita_img']) ?>" class="judul-pengumuman"><?php if ($langID == 'id') {echo $r['berita_judul'];} else{echo $r['berita_judul_en'];}  ?> <span class="fas fa-download" ></span></a>
									<p><?php if ($langID == 'id') {echo $r['berita_konten'];} else{echo $r['berita_konten_en'];}  ?></p>
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
	<script type="text/javascript">
		$(document).ready(function(){
			$('#peng').hide()
		})
		$('#pengBTN').click(function(){
			$(this).attr("class", "aktif-profile");
			$('#trendingBTN').removeAttr("class");
			$('#trending').hide()
			$('#peng').show()
		})
		$('#trendingBTN').click(function(){
			$(this).attr("class", "aktif-profile");
			$('#pengBTN').removeAttr("class");
			$('#trending').show()
			$('#peng').hide	()
		})
	</script>