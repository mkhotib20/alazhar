<?php
 include 'header.php';
foreach ($read as $r) {
	$judul = $r['berita_judul'];
	$judulEn = $r['berita_judul_en'];
	$berita_timestamp = $r['berita_timestamp'];
	$img = $r['berita_img'];
	$konten = $r['berita_konten'];
	$kontenEn = $r['berita_konten_en'];
	$author = $r['berita_author'];
}
 ?>
	<section id="isi">
		<div  id="detail" class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p class="aktif-profile">Detail Article</p>
					<p id="back">Back</p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div class="row">
						<div class="col-md-12">
							<div class="img" style="background: url('<?php echo base_url('uploads/'.$img) ?>') no-repeat center ; background-size: cover; " >
							</div>
						</div>
						<div style="margin-top: 40px" class="col-md-12">
							<h2><?php if ($langID == 'id') {echo $judul;} else{echo $judulEn;}  ?></h2>
							<p>by <?php echo $author ?> <br> Uploaded at <?php echo date('l, d/M/Y', $berita_timestamp) ?></p>
							<br>
							<?php if ($langID == 'id') {echo $konten;} else{echo $kontenEn;}  ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
