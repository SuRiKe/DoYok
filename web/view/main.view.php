<?php
require 'header.view.php';

$halaman;

require 'footer.view.php';
?>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Kategori Data</h4>
      </div>
      <div class="modal-body">
        <a href="?hal=tambah-kms" class="btn">Keluarga Miskin</a><br />
        <a href="?hal=tambah-aps" class="btn">Anak Putus Sekolah</a><br />
        <a href="?hal=tambah-sekolah" class="btn">Sekolah</a><br />
      </div>
    </div>
  </div>
</div>