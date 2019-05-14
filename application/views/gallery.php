<?php include 'header.php'; ?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Upload Foto ke Gallery</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Gallery</h6>
            </div>
            <div class="card-body"> <br><br>
              <div class="row">
                <div class="col-md-12">
                  <?php echo form_open_multipart('fasilitas/upGal') ?>
                     <div class="form-group">
                       <input type="text" name="caption" class="form-control" placeholder="Caption Gallery" >
                     </div>
                     <div class="form-group">
                      <input required="" onchange="check()" accept=".img, .png, .jpg, .jpeg" id="imgInp" type="file" name="files[]" multiple="">
                      <br><br>
                    </div>
                    <br><hr> 
                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                  </form>
                </div>
                <div class="col-md-12">
                  <table class="table table-bordered count" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Caption</th>
                        <th>Gambar </th>
                        <th>Hapus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach ($gallery as $r) { ?>
                      <tr>
                        <td></td>
                        <td><?php echo $r['gal_caption'] ?></td>
                        <td><center><img style="width: 150px" src="<?php echo base_url('uploads/gallery/'.$r['gal_img']) ?>"></center></td>
                        <td><center><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deleteBerita" data-id="<?php echo $r['gal_id'] ?>" data-page="gallery" data-where="gal_id" data-table="tb_gallery" data-judul="<?php echo $r['gal_id'] ?>" ><span class="fas fa-trash" ></span></a></center></td>
                      </tr>
                      <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
  <?php echo $this->session->flashdata('delSuccess') ?>
<script type="text/javascript">
  
  function check() {
    var x = document.getElementById('imgInp')
    var file = x.files[0];
    var size = Math.floor(file.size/1024)

    if (size>=5000) {
      $.notify("Ukuran file melebihi batas maksimal 5 MB", "warning")
      x.value = ''
    }
  }

</script>