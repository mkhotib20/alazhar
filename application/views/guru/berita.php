<?php include 'header.php'; ?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Berita</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
            </div>
            <div class="card-body">
              <a href="<?php echo base_url('guru/article/tambah/2') ?>" class="btn btn-success" ><span class="fas fa-plus"></span> Berita</a><br><br>
              <div class="table-responsive">
                <table class="table table-bordered count" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Judul Berita</th>
                      <th>Gambar Berita</th>
                      <th>Diterbitkan Tanggal</th>
                      <th>Edit</th>
                      <th>Hapus</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($read as $r) { ?>
                    <tr>
                      <td></td>
                      <td><?php echo $r['berita_judul'] ?></td>
                      <td><center><img style="width: 150px" src="<?php echo base_url('uploads/'.$r['berita_img']) ?>"></center></td>
                      <td><?php echo date('d M Y ', $r['berita_timestamp']) ?></td>
                      <td><center><a href="<?php echo base_url('guru/article/edit/'.$r['berita_id']) ?>" class="btn btn-warning" ><span class="fas fa-pencil-alt" ></span></a></center></td>
                      <td><center><a href="#" class="btn btn-danger"  data-toggle="modal" data-target="#deleteBerita" data-id="<?php echo $r['berita_id'] ?>" data-page="guruManagement/article" data-where="berita_id" data-table="tb_berita" data-judul="<?php echo $r['berita_judul'] ?>" ><span class="fas fa-trash" ></span></a></center></td>
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

