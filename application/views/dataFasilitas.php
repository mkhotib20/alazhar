<?php include 'header.php'; ?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Data fasilitas</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Data fasilitas</h6>
            </div>
            <div class="card-body">
               <?php echo form_open_multipart('fasilitas/inputFasilitas') ?>
                  <div class="form-group row">
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input id="namaF" required="" autofocus="" type="text" class="form-control" placeholder="Nama fasilitas" name="namaF">
                      <input id="idF" type="text"  name="id" hidden="" >
                    </div>
                    <div class="col-sm-6 mb-3 mb-sm-0">
                      <input id="namaFEN" required="" autofocus="" type="text" class="form-control" placeholder="Nama fasilitas" name="namaFEN">
                    </div>
                  </div>
                  <div class="form-group">
                    <input required="" onchange="check()" accept=".jpg, .jpeg, .png, .gif" id="imgInp" type="file" class="form-control" placeholder="Nama fasilitas" name="gambar"> <br>
                    <center><img style="width: 350px" id="blah" src="" alt="Foto Fasilitas"></center>
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary float-right" value="Simpan">
                  <input type="reset" class="btn btn-dark float-right" value="Reset">
                </form>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Akun fasilitas</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabelget" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama fasilitas</th>
                      <th>Foto fasilitas</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($read as $r) { ?>
                    <tr>
                      <td><?php echo $r['fasilitas_nama'] ?></td>
                      <td><center><img style="width: 150px" src="<?php echo base_url('uploads/fasilitas/'.$r['fasilitas_img']) ?>"></center></td>
                      <td hidden="" ><?php echo $r['fasilitas_deskripsi'] ?></td>
                      <td hidden="" ><?php echo $r['fasilitas_id'] ?></td>
                      <td hidden="" ><?php echo $r['fasilitas_img'] ?></td>
                      <td hidden="" ><?php echo $r['fasilitas_nama_en'] ?></td>
                      <td><center><a href="#" id="edit" class="btn btn-warning" ><span class="fas fa-pencil-alt" ></span></a></center></td>
                      <td><center><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deleteBerita" data-id="<?php echo $r['fasilitas_id'] ?>" data-where="fasilitas_id" data-page="fasilitas" data-table="tb_fasilitas" data-judul="<?php echo $r['fasilitas_nama'] ?>" ><span class="fas fa-trash" ></span></a></center></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
  <?php echo $this->session->flashdata('delSuccess') ?>
<script type="text/javascript">
  $('#tabelget').on('click', '#edit', function(){
    var currentrow = $(this).closest('tr')
    var namaF = currentrow.find('td:eq(0)').text()
    var namaFEN = currentrow.find('td:eq(5)').text()
    var imgF = currentrow.find('td:eq(4)').text()
    var deskripsiF = currentrow.find('td:eq(2)').text()
    var id = currentrow.find('td:eq(3)').text()
    $('#namaF').val(namaF)
    $('#namaFEN').val(namaFEN)
    $('#blah').attr('src', '<?php echo base_url("uploads/fasilitas/") ?>'+imgF)
    $('#deskripsiF').val(deskripsiF)
    $('#idF').val(id)
    $('#imgInp').removeAttr('required')
    //$('#imgInp').removeAttr('required')
    /*$('#mytable #tahun').each(function()
    {

      alert($(this).html());
    });*/
  })
</script>
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