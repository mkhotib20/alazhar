<?php include 'header.php'; 
?>

      <div class="container-fluid">
          <h1 id="coba" class="h3 mb-2 text-gray-800">Profile Guru</h1>
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Update Profile Guru</h6>
            </div>
            <div class="card-body">
               <?php echo form_open('guruManagement/prosesRiwayat') ?>
                  <input type="text" hidden="" value="f" name="type">
                  <div  style="margin-bottom: 30px;" id="pendidikan">
                    <a href="#" class="btn btn-info" id="add-more">Tambah Pendidikan Formal</a> <br> <br>
                    <?php if ($check->num_rows()>0) {
                      foreach ($check->result_array() as $ca) {
                        echo '<input type="text" hidden="" value="'.$ca['gp_id'].'" name="gp_id[]"><a style="color: red" href="'.base_url('guruManagement/hapusPendidikan/').$ca['gp_id'].'">hapus</a><div class="row" ><div class="col-md-4"><input type="text" placeholder="Nama Pendidikan" class="form-control" value="'.$ca['gp_nama'].'" name="pendidikan[]"></div><div class="col-md-4"><input type="text" placeholder="Tahun Masuk" class="form-control" value="'.$ca['gp_tahun'].'" name="tahun[]"></div><div class="col-md-4"><input type="text" placeholder="Tahun Keluar" class="form-control" value="'.$ca['gp_tahun2'].'" name="tahun2[]"></div></div><br>';
                      }
                      
                    } ?>
                  </div>
                  <input type="submit" class="btn btn-primary btn-block" value="Simpan" name="">
               </form>
            </div>
          </div>
        </div>

<?php include 'footer.php'; ?>
<script type="text/javascript">
    $(document).ready(function() {
      $("#add-more").click(function(){ 
          //var html = $("#copy").html();
          $("#pendidikan").append('<input type="text" hidden="" value="" name="gp_id[]"><div id="copy"><a id="remove" class="remove" style="color: red" href="#">hapus</a><div class="row" ><div class="col-md-4"><input type="text" placeholder="Nama Pendidikan" class="form-control" name="pendidikan[]"></div><div class="col-md-4"><input type="text" placeholder="Tahun Masuk" class="form-control" name="tahun[]"></div><div class="col-md-4"><input type="text" placeholder="Tahun Keluar" class="form-control" name="tahun2[]"></div></div></div>');
      });
      $('#pendidikan').on('click', '#remove', function(){
        $(this).parents('#copy').remove()
      })
    });
</script>
<?php echo $this->session->flashdata('delSuccess') ?>
