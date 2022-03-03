<h2>Anda Login Sebagai</h2>
<div class="row">
  <div class="col-lg-6 col-sm-12">
    <div class="card w-500">
      <div class="card-body">
        <div class="row">
          <div class="col-6 border-right">
          <?php 
            if($_SESSION['gender'] == 'laki-laki'){
              echo '<img src="./img/profile2.svg" alt="avatar" class="img-fluid" width="230px" height="230px">';
            } else {
              echo '<img src="./img/profile1.svg" alt="avatar" class="img-fluid" width="230px" height="230px">';
            } ?>
            
          </div>
          <div class="col-6 text-center d-flex justify-content-center align-items-center flex-column">
            <?php 
              echo "<p> <strong>NIK</strong> : " . $_SESSION['nik'] . '</p>';
              echo "<p> <strong>Nama Lenkap</strong> : " . $_SESSION['nama_lengkap'] . '</p>';
              echo "<p> <strong>Jenis Kelamin</strong> : " . $_SESSION['gender']. '</p>';
              echo "<p> <strong>Status</strong> : " . $_SESSION['type']. '</p>';

            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>