<?php 
  include 'header.php';
?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800"><?php echo $km ?></h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add <?php echo $km ?></h6>
            </div>
            <div class="card-body">
               <?php echo form_open_multipart('guruManagement/uploadberita') ?>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input required="" autofocus="" type="text" class="form-control " placeholder="Judul Artikel (Indonesia)" name="judul">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input required="" autofocus="" type="text" class="form-control " placeholder="Tittle (englis))" name="judulEn">
                    </div>
                      <input type="text" hidden="" value="<?php echo $kat ?>" name="kategori">
                  </div>
                  <div class="form-group">
                    <input required=""  onchange="check()" accept=".img, .png, .jpg, .jpeg" id="imgInp" type="file" name="gambar">
                    <br>
                    <center><img src="" alt="Cover Berita" id="blah"></center>
                  </div>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Konten Bahasa Indonesia</label>
                      <textarea required=""  class="summernote" name="konten"></textarea>
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <label>Content in English</label>
                      <textarea  required="" class="summernote" name="kontenEn"></textarea>
                    </div>
                   
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan Berita">
                </form>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
  
  function check() {
    var x = document.getElementById('imgInp')
    var img = document.getElementById('blah')
    var file = x.files[0];
    var size = Math.floor(file.size/1024)

    if (size>=5000) {
      $.notify("Ukuran file melebihi batas maksimal 5 MB", "warning")
      x.value = ''
      img.setAttribute('src','')
    }
  }

</script>
