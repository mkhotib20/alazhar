<?php

 include 'header.php';
 foreach ($read as $r) {
 	$img = $r['guru_img'];
 	$guru_nama = $r['guru_nama'];
 	$alamat = $r['guru_alamat'];
 	$account = $r['guru_account'];
 	$yb = $r['guru_yb'];
 	$jabatan = $r['gj_nama'];
 	$email = $r['guru_email'];
 }
$readGPF = $this->data->readPendidikan($account, 'f')->result_array();
$readGPNF = $this->data->readPendidikan($account, 'nf')->result_array();
$readArticle = $this->data->read('tb_berita', 'berita_author', $account, null, 'berita_timestamp', 'DESC')->result_array();

 ?>
	<section id="isi">
		<div  id="detail" class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p class="aktif-profile" id="prfBtn">Profile</p>
					<p id="artBtn" >Article</p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div id="profile-teacher">
						<h2>Teacher | Profile</h2>
						<p>by Administrator</p>
						<br>
						<div class="row">
							<div class="col-md-4">
								<div class="img" style="background: url('<?php echo base_url('uploads/guru/'.$img) ?>') no-repeat center ; background-size: cover; " >
								</div>
							</div>
							<div class="col-md-8">
								<h1><?php echo $guru_nama ?></h1>
								<br>
								<div class="row">
									<div class="col-md-4 depan">
										<h5>Alamat  </h5>
									</div>
									<div class="col-md-8">
										<h5><?php echo $alamat ?></h5>
									</div>
									<div class="col-md-4 depan">
										<h5>Jabatan  </h5>
									</div>
									<div class="col-md-8">
										<h5><?php echo $jabatan ?></h5>
									</div>
									<div class="col-md-4 depan">
										<h5>Email  </h5>
									</div>
									<div class="col-md-8">
										<h5><?php echo $email ?></h5>
									</div>
								</div> <br>
									<a href="<?php echo $yb ?>" target="_blank" class="btn btn-primary" >YukBlajar</a>
							</div>
						</div>
						<br>
						<h1>Riwayat Pendidikan</h1>
						<div class="riwayat">
							<h5>Formal</h5>
							<div class="riwayat-line"></div>
							<div class="row">
								<?php foreach ($readGPF as $f) { ?>
								<div class="col-md-3">
									<p><?php echo $f['gp_tahun'] ?> - <?php echo $f['gp_tahun2'] ?></p>
								</div>
								<div class="col-md-9">
									<p><?php echo $f['gp_nama'] ?></p>
								</div>
								<?php } ?>
							</div>
						</div>
						<div class="riwayat">
							<h5>Non - Formal</h5>
							<div class="riwayat-line"></div>
							<div class="row">
								<?php foreach ($readGPNF as $f) { ?>
								<div class="col-md-3">
									<p><?php echo $f['gp_tahun'] ?></p>
								</div>
								<div class="col-md-9">
									<p><?php echo $f['gp_nama'] ?></p>
								</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div id="article-teacher">
						<h1>Artikel Oleh <?php echo $guru_nama ?></h1>
						<br>
						<div class="row no-gutters">
								<?php foreach ($readArticle as $ra) { ?>
							<div class="col-md-4">
								<a href="<?php echo base_url($langID.'/article/detail/'.$ra['berita_id'].'#detail') ?>">
									<div class="frame">
										<div class="img" style="background: url('<?php echo base_url('uploads/'.$ra['berita_img']) ?>') no-repeat center ; background-size: cover; " >
										</div>
										<div class="capt guru">
											<h5><?php echo $ra['berita_judul'] ?></h5>
										</div>
									</div>		
								</a>	
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
		$('#article-teacher').hide();
		$('#prfBtn').attr("class", "aktif-profile");
	})
	$('#prfBtn').click(function(){
		$('#article-teacher').hide()
		$('#profile-teacher').show()
		$(this).attr("class", "aktif-profile")
		$('#artBtn').removeClass('aktif-profile')
	})
	$('#artBtn').click(function(){
		$('#profile-teacher').hide()
		$('#article-teacher').show()
		$(this).attr("class", "aktif-profile")
		$('#prfBtn').removeClass('aktif-profile')
	})
</script>