<?php
include_once 'header.view.php';

$halaman;

include_once 'footer.view.php';
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

<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="logout" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
          <span class="sr-only">Close</span>
        </button>
        <h4 class="modal-title" id="logout">Logout</h4>
      </div>
      <div class="modal-body">
        <h3>Apa Anda Yakin ingin Logout ?</h3>
      </div>
	  <div class="modal-footer">
        <a href="?hal=logout" class="btn btn-primary">Ya</a>
		<a href="" data-dismiss="modal" class="btn btn-primary">Tidak</a>
      </div>
    </div>
  </div>
</div>