<?php include 'header.php'; 
foreach ($read as $r) {
  $nama = $r['guru_nama'];
  $user = $r['guru_account'];
  $pass = $r['user_password'];
  $alamat = $r['guru_alamat'];
  $yb = $r['guru_yb'];
  $img = $r['guru_img'];
  $id = $r['guru_id'];
  $jb = $r['guru_jabatan'];
  $email = $r['guru_email'];
}
?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Profile Guru</h1>
          <div class="card sha
          dow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update Profile Guru</h6>
            </div>
            <div class="card-body">
               <?php echo form_open_multipart('guruManagement/update') ?>
                  <div class="form-group row">
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input id="namaguru" type="text" class="form-control" value="<?php echo $nama ?>" placeholder="Nama Guru" name="nama">
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input type="email" class="form-control" value="<?php echo $email ?>" placeholder="Email" name="email">
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input id="usernameguru"  type="text" class="form-control" value="<?php echo $user ?>" placeholder="Username" name="username">
                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                      <input id="passguru" type="password" class="form-control" value="<?php echo $pass ?>" placeholder="Passowrd" name="password">
                      <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" class="form-control" value="<?php echo $alamat ?>" placeholder="Alamat" name="alamat">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input type="text" class="form-control" value="<?php echo $yb ?>" placeholder="Link YukBlajar" name="yb">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <select name="jabatan" class="form-control">
                        <option selected="" disabled="" >--pilih jabatan--</option>
                        <?php foreach ($jabatan as $j) { ?>
                        <option <?php if ($jb==$j['gj_id']) {echo 'selected';  } ?> value="<?php echo $j['gj_id'] ?>" ><?php echo $j['gj_nama'] ?></option>
                        <?php } ?>
                      </select>                     
                    </div>
                  </div>
                  <input id="imgInp" type="file" name="img" accept=".jpg, .png,.gif">
                  <div class="col-md-6 offset-md-3">
                    <center><img id="blah" style="width: 100%" src="<?php echo base_url('uploads/guru/'.$img) ?>" alt="profile img"></center>
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary float-right" value="Simpan">
                </form>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
<script type="text/javascript">$.notify("Ukuran foto maksimal 5 MB dan resolusi Maksimal 2000px", "info")</script>
<?php echo $this->session->flashdata('delSuccess') ?>
