<?php include 'header.php'; ?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Data Civitas Akademik</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Add Data Civitas</h6>
            </div>
            <div class="card-body">
               <?php echo form_open('guru/inputGuru') ?>
                  <div class="form-group row">
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input id="namaguru" autofocus="" type="text" class="form-control" placeholder="Nama Guru" name="namaGuru">
                      <input type="text" hidden="" id="idGuru"  name="idGuru">
                      <input type="text" hidden="" id="idGac" name="idGac">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input id="usernameguru" autofocus="" type="text" class="form-control" placeholder="Username" name="usernameGuru">
                    </div>
                    <div class="col-sm-4 mb-3 mb-sm-0">
                      <input id="passguru" autofocus="" type="password" class="form-control" placeholder="Passowrd" name="passwordGuru">
                    </div>
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary float-right" value="Simpan">
                      <input type="reset" class="btn btn-dark float-right" value="Reset">
                </form>
            </div>
          </div>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Akun Civitas Akademik</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table id="tabelget" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Nama Guru</th>
                      <th>Foto Guru</th>
                      <th>Username</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($read as $r) { ?>
                    <tr>
                      <td><?php echo $r['guru_nama'] ?></td>
                      <td><center><img style="width: 150px" src="<?php echo base_url('uploads/guru/'.$r['guru_img']) ?>"></center></td>
                      <td><?php echo $r['user_name'] ?></td>
                      <td hidden="" ><?php echo $r['user_id'] ?></td>
                      <td hidden="" ><?php echo $r['guru_id'] ?></td>
                      <td hidden="" ><?php echo $r['user_password'] ?></td>
                      <td><center><a id="edit" href="#" class="btn btn-warning" ><span class="fas fa-pencil-alt" ></span></a></center></td>
                      <td><center><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deleteGuru" data-id="<?php echo $r['user_id'] ?>" data-guru="<?php echo $r['guru_id'] ?>" data-judul="<?php echo $r['guru_nama'] ?>" ><span class="fas fa-trash" ></span></a></center></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>

  <div class="modal fade" id="deleteGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi hapus</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Yakin akan menghapus
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
          <a href="#" id="yes" class="btn btn-danger">Iya, hapus</a>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
    $('#deleteGuru').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var judul = button.data('judul')
      var id = button.data('id')
      var idGuru = button.data('guru') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-body').html('Yakin ingin menghapus berita <b>' + judul+' </b> ?')
      modal.find('#yes').attr('href', '<?php echo base_url("guru/delete/") ?>'+id+'/'+idGuru)


    })

  </script>

  <?php echo $this->session->flashdata('delSuccess') ?>
  <script type="text/javascript">
    $('#tabelget').on('click', '#edit', function(){
      var currentrow = $(this).closest('tr')
      var namaguru = currentrow.find('td:eq(0)').text()
      var usernameguru = currentrow.find('td:eq(2)').text()
      var passguru = currentrow.find('td:eq(5)').text()
      var idGac = currentrow.find('td:eq(3)').text()
      var idGuru = currentrow.find('td:eq(4)').text()
      $('#namaguru').val(namaguru)
      $('#usernameguru').val(usernameguru)
      $('#passguru').val(passguru)
      $('#idGac').val(idGac)
      $('#idGuru').val(idGuru)


      /*$('#mytable #tahun').each(function()
      {

        alert($(this).html());
      });*/
    })
  </script>