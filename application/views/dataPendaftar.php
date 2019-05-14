<?php include 'header.php'; 
foreach ($read as $r) {
  $pendaftar = $r['pendaftar_jumlah'];
  $diterima = $r['pendaftar_diterima'];
  $current = $r['pendaftar_current'];
}
?>

      <div class="container-fluid">
          <h1 class="h3 mb-2 text-gray-800">Berita</h1>

          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">List Berita</h6>
            </div>
            <div class="card-body"> <br><br>
              <div class="col-md-6">
                <?php echo form_open('pendaftar/uploadpendaftar') ?>
                  <div class="form-group">
                    <input id="jumlah" value="<?php echo $pendaftar ?>" type="text" required="" class="form-control" placeholder="Masukkan Jumlah Pendaftar" name="jumlah">
                  </div>
                  <div class="form-group">
                    <input id="jumlah" type="text" required=""   value="<?php echo $diterima ?>" class="form-control" placeholder="Siswa yang diterima" name="diterima">
                  </div>
                  <div class="form-group">
                    <input id="jumlah" type="text" required=""  value="<?php echo $current ?>" class="form-control" placeholder="Siswa Saat Ini" name="current">
                  </div>
                  <hr>
                  <input type="submit" class="btn btn-primary btn-user btn-block" value="Simpan">
                </form>
              </div><br><br>
             
            </div>
          </div>

        </div>

<?php include 'footer.php'; ?>
  <?php echo $this->session->flashdata('delSuccess') ?>
<script type="text/javascript">
  $('#tabelget').on('click', '#edit', function(){
    var currentrow = $(this).closest('tr')
    var col1 = currentrow.find('td:eq(2)').text()
    var id = currentrow.find('td:eq(1)').text()
    var col2 = currentrow.find('td:eq(3)').text()
    $('#tahun').val(col1)
    $('#jumlah').val(col2)
    $('#uporin').val(id)


    /*$('#mytable #tahun').each(function()
    {

      alert($(this).html());
    });*/
  })
</script>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" id="Visualisasi" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Visualisasi</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        </div>
      </div>
    </div>
  </div>

    <div class="modal fade bd-example-modal-lg" tabindex="-1" id="excel" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Upload File Excel</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
           <p >Untuk melakukan upload excel harap perhatikan beberapa hal berikut : </p>
            <ul>
              <li>Simpan dalam format excel (.xls / .xlsx)</li>
              <li><b style="color: red">Buat file excel dengan format table sama persis seperti contoh dibawah</b></li>
            </ul>
            <table class="table table-bordered">
              <thead>
               <th>#</th>
                  <th>Tahun</th>
                  <th>Jumlah Pendaftar</th>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td>2017</td>
                  <td>100</td>
                </tr>
                <tr>
                  <td></td>
                  <td>dan seterusnya</td>
                  <td>dan seterusnya</td>
                </tr>
              </tbody>
            </table>
            <form>
              <input type="file" name="excel">
          </div>
          <div class="modal-footer">
              <input class="btn btn-success" type="submit" value="UPLOAD">
            </form>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>



  <script type="text/javascript">
     
    Highcharts.chart('container', {
        chart: {
            type: 'line'
        },
        title: {
            text: 'Monthly Average Temperature'
        },
        subtitle: {
            text: 'Source: WorldClimate.com'
        },
        xAxis: {
            categories: [<?php foreach ($read as $r) {echo $r['pendaftar_tahun'].',';} ?>]
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            }
        },
        plotOptions: {
            line: {
                dataLabels: {
                    enabled: true
                },
                enableMouseTracking: false
            }
        },
        series: [{
            name: 'Tokyo',
            data: [<?php foreach ($read as $r) {echo (int)$r['pendaftar_jumlah'].',';} ?>]
        }, {
            name: 'London',
            data: [3.9, 4.2, 5.7, 8.5]
        }]
    });
</script>
