<?php include 'header.php'?>
	<section id="isi" >
		<div class="row no-gutters">
			<div style="border-right: 2px solid grey;" class="col-md-4">
				<div class="profile">
					<p id="teacherBtn"><?php echo $guru ?></p>
					<p id="dirBtn" ><?php echo $direktur ?></p>
					<p id="staffBtn" ><?php echo $staffTit ?></p>
				</div>
			</div>
			<div class="col-md-8">
				<div class="profile-right">
					<div class="row no-gutters">
						<?php foreach ($read as $r) { ?>
						<div class="col-md-3 <?php echo $r['guru_jabatan'] ?>">
							<a href="<?php echo base_url($langID.'/profile/guru/'.$r['guru_id'].'#detail') ?>">
								<div class="frame">
									<div class="img" style="background: url('<?php echo base_url('uploads/guru/'.$r['guru_img']) ?>') no-repeat center ; background-size: cover; " >
									</div>
									<div class="capt guru">
										<p><?php echo $r['guru_nama'] ?> <br> <?php echo $r['gj_nama'] ?></p>
									</div>
								</div>		
							</a>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.2').hide();
			$('.3').hide();
			$('#teacherBtn').attr("class", "aktif-profile");
		})
		$('#teacherBtn').click(function(){
			$('.1').show();
			$(this).attr("class", "aktif-profile");

			$('#staffBtn').removeAttr("class");
			$('#dirBtn').removeAttr("class");
			
			$('.3').hide();
			$('.2').hide();
		})
		$('#staffBtn').click(function(){
			$('.3').show();
			$(this).attr("class", "aktif-profile");

			$('#teacherBtn').removeAttr("class");
			$('#dirBtn').removeAttr("class");
			
			$('.1').hide();
			$('.2').hide();
		})
		$('#dirBtn').click(function(){
			$('.2').show();
			$(this).attr("class", "aktif-profile");

			$('#teacherBtn').removeAttr("class");
			$('#staffBtn').removeAttr("class");
			
			$('.1').hide();
			$('.3').hide();
		})

	</script>