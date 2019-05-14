<?php include 'header.php'; 
foreach ($read as $r) {
  $id = $r['berita_id'];
  $berita_judul = $r['berita_judul'];
  $berita_konten = $r['berita_konten'];
  $berita_judul_en = $r['berita_judul_en'];
  $berita_konten_en = $r['berita_konten_en'];
  $berita_kat = $r['berita_kat'];
  $berita_img = $r['berita_img'];
}
?>
      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Edit Konten</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Halaman Edit</h6>
            </div>
            <div class="card-body">
               <?php echo form_open_multipart('berita/updateBerita') ?>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input value="<?php echo $berita_judul ?>" autofocus="" type="text" class="form-control" placeholder="Judul Berita" name="judul">
                      <input type="text" hidden="" value="<?php echo $id ?>" name="id">
                      <input type="text" hidden="" value="<?php echo $berita_kat ?>" name="kategori">
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input value="<?php echo $berita_judul_en ?>" autofocus="" type="text" class="form-control" placeholder="Tittle (English)" name="judulEn">
                    </div>
                  </div>
                  <div class="form-group">
                    <input accept=".img, .png, .jpg, .jpeg" id="imgInp" type="file" name="gambar" >
                    <br>
                    <center><img src="<?php echo base_url('uploads/'.$berita_img) ?>" alt="Cover Berita" id="blah"></center>
                  </div>
                  <div class="form-group row" >
                     <div class="col-sm-6 mb-3 mb-sm-0">
                        <textarea class="summernote" name="konten"><?php echo $berita_konten ?></textarea>                       
                     </div>
                     <div class="col-sm-6 mb-3 mb-sm-0">
                        <textarea class="summernote" name="kontenEn"><?php echo $berita_konten_en ?></textarea>                       
                     </div>
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan Berita">
                </form>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
