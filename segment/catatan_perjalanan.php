<div class="card">
  <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fa fa-arrow-left"></i>
      </span>
      <span class="text">kembali</span>
    </a>
    <h4 class="d-inline ml-3">Riwayat Catatan Perjalanan 
      <?php 
        if($_SESSION['type'] == 'admin') { echo 'Semua User';} 
        else { echo $_SESSION['nama_lengkap']; }
      ?>
    </h4>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <?php 
          if($_SESSION['type'] == 'admin') { ?>
          <thead>
            <tr>
              <th>No</th>
              <th>Nik</th>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Jam</th>
              <th>Lokasi</th>
              <th>Suhu Tubuh</th>
            </tr>
          </thead>
          <tbody>
          <?php
          $no = 1;
          $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
          foreach ($data as $value) {
            $pecah = explode('|', $value);
            @$key = $pecah['0'] . "|" . $pecah['1'];
            
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $pecah[0]; ?></td>
            <td><?= $pecah[1]; ?></td>
            <td><?= $pecah[2]; ?></td>
            <td><?= $pecah[3]; ?></td>
            <td><?= $pecah[4]; ?></td>
            <td><?= $pecah[5]; ?></td>
          </tr>
          <?php

          } ?>
        </tbody>
        <?php
          } else {
        ?>
        <thead>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
          </tr>
        </thead>
        <tfoot>
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Jam</th>
            <th>Lokasi</th>
            <th>Suhu Tubuh</th>
          </tr>
        </tfoot>
        <tbody>
          <?php
          $no = 1;
          $data = file('catatan.txt', FILE_IGNORE_NEW_LINES);
          $user = $_SESSION['nik'] . "|" . $_SESSION['nama_lengkap'];
          foreach ($data as $value) {
            $pecah = explode('|', $value);
            @$key = $pecah['0'] . "|" . $pecah['1'];
            if ($key == $user) {
          ?>
          <tr>
            <td><?= $no++; ?></td>
            <td><?= $pecah[2]; ?></td>
            <td><?= $pecah[3]; ?></td>
            <td><?= $pecah[4]; ?></td>
            <td><?= $pecah[5]; ?></td>
          </tr>
          <?php }

          } }?>
        </tbody>
      </table>
    </div>
  </div>