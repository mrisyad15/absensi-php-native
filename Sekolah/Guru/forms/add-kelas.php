<?php 
include_once '../../config/koneksi.php';
?> 
<!-- Modal -->
<!-- <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog"> -->

    <!-- Modal content-->
   <!--  <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Form Sewa</h4>
      </div>
      <div class="modal-body"> -->
       <form method="POST" action="?insert=insert-kelas" autocomplete="off">
         <!--  <div class="form-group">
              <label class="control-label" for="title">ID Kelas</label>
              <input type="text" name="id" class="form-control" readonly value="<?php echo $kode_otomatis?>">
              <div class="help-block with-errors"></div>
          </div> -->

          <div class="form-group">
              <label class="control-label" for="title">Nama Kelas</label>
              <input type="text" name="kelas" class="form-control">
              <div class="help-block with-errors"></div>
          </div>

           <!-- <div class="form-group">
              <label class="control-label" for="title">Nama Kelas</label>
              <input type="text" name="sekolah" id="sekolah" class="form-control">
              <div class="help-block with-errors"></div>
          </div> -->

                           
     <!--  <div class="modal-footer"> -->
         <button type="submit" name="insert-kelas" class="btn slider-submit btn-info" id="save">Simpan</button>
       <button type="reset" class="btn btn-default" onclick="history.go(-1)">Keluar</button>
      <!-- </div> -->
      </form>
   <!--  </div>
  </div>
</div> -->

