<?php include 'header.php'; ?>
<?php 
?>
      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Background Setting</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">BG</h6>
            </div>
            <div class="card-body"> <br><br>
              <div class="col-md-12">
                <?php echo form_open_multipart('pendaftar/upBG') ?>
                   <div class="row" id="bg">
                     <div class="col-md-4 form-group">
                        <input disabled="" required="" onchange="check()" accept=".img, .png, .jpg, .jpeg" id="imgInp" type="file" name="gambar">
                        <input type="text" id="id" name="id" hidden="">
                        <br><br>
                        <img src="" alt="Cover Berita" id="blah"><br>
                      </div>
                   </div>
                  <br><hr> 
                  <input type="submit" id="save" disabled="" class="btn btn-primary btn-user btn-block" value="Simpan">
                </form>
              </div><br><br>
              <table id="tabelget" class="table table-bordered count" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Gambar</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($bg as $r) { ?>
                    <tr>
                      <td></td>
                      <td hidden="" ><?php echo $r['bg_img'] ?></td>
                      <td hidden="" ><?php echo $r['bg_id'] ?></td>
                      <td><center><img style="width: 250px" src="<?php echo base_url('uploads/bg/'.$r['bg_img']) ?>"></center></td>
                      <td><center><a id="edit" href="#" class="btn btn-warning" ><span class="fas fa-pencil-alt" ></span></a></center></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
  <?php echo $this->session->flashdata('delSuccess') ?>
<script type="text/javascript">
  $.notify("Untuk mengganti Background slider silahkan klik edit masing - masing gambar", "info")
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

  $('#imgInp').click(function(){

  })

  $('#tabelget').on('click', '#edit', function(){
    var currentrow = $(this).closest('tr')  
    var imgF = currentrow.find('td:eq(1)').text()
    var id = currentrow.find('td:eq(2)').text()
     $('#imgInp').removeAttr('required')
     $('#imgInp').removeAttr('disabled')
     $('#save').removeAttr('disabled')
     $('#blah').attr('src', '<?php echo base_url("uploads/bg/") ?>'+imgF)
     $('#id').val(id)
  })  

</script>