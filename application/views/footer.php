      <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
      <div class="container my-auto">
        <div class="copyright text-center my-auto">
          <span>Copyright &copy; SMPIA 13 Al Azhar Surabaya</span>
        </div>
      </div>
    </footer>
    <!-- End of Footer -->

  </div>
   

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="<?php echo base_url('login/logout/1') ?>">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Delete Modal-->
  


  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url('assets/js/sb-admin-2.js') ?>"></script>

  <script src="<?php echo base_url('assets/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>

  <script src="<?php echo base_url('assets/js/demo/datatables-demo.js') ?>"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.js"></script>
  <script type="text/javascript" src="<?php echo base_url('assets/js/notify.js') ?>"></script>
  <script src="https://code.highcharts.com/highcharts.js"></script>
  <script src="https://code.highcharts.com/modules/exporting.js"></script>
  <script src="https://code.highcharts.com/modules/export-data.js"></script>


<div class="modal fade" id="deleteBerita" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
    $('#deleteBerita').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget) // Button that triggered the modal
      var judul = button.data('judul')
      var table = button.data('table')
      var page = button.data('page')
      var where = button.data('where')
      var id = button.data('id') // Extract info from data-* attributes
      // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
      // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
      var modal = $(this)
      modal.find('.modal-body').html('Yakin ingin menghapus berita <b>' + judul+' </b> ?')
      modal.find('#yes').attr('href', '<?php echo base_url("berita/delete/") ?>'+id+'/'+table+'/'+where+'/'+page)


    })
  </script>

  <script type="text/javascript">
    function gas(gas, apa) {
      $.notify(gas, apa);
    }
  </script>
 <script>
      $(document).ready(function() {
         $('#summernoteSimple').summernote({
            lang: 'en-EN',
            dialogsInBody: true,
            height: 150,
            toolbar: false
          });
         $('.summernote').summernote({
            lang: 'en-EN',
            dialogsInBody: true,
            height: 300,
            minHeight: null, 
            maxHeight: null, 
            shortCuts: false,
            fontSize: 14,
            disableDragAndDrop: false,
            toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['height', ['height']],
            ['Insert', ['picture']],
            ['Other', ['fullscreen', 'codeview']]
            ],callbacks: {
              onImageUpload: function(image) {
                editor = $(this)
                uploadImageContent(image[0],editor)
              }
            }
          });
          function uploadImageContent(image, editor) {
            var data = new FormData();
              data.append("image", image);
              $.ajax({
                url: "<?php echo base_url('berita/JsonUpload') ?>",
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",

                success: function(url) {
                  var image = $('<img>').attr('src', '<?php echo base_url('uploads/post/') ?>'+url);
                  $(editor).summernote("insertNode", image[0]);
                },
                error: function(data) {
                  console.log(data);
                }
              });
          }
      });


  </script>
  <script>
   

    function readURL(input) {

    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function(e) {
        $('#blah').attr('src', e.target.result);
      }

      reader.readAsDataURL(input.files[0]);
    }
  }

  $("#imgInp").change(function() {
    readURL(this);
  });

  </script>



</body>

</html>
