<div class="card">
  <div class="card-header">
    <a href="user.php" class="btn btn-primary btn-icon-split">
      <span class="icon text-white-50">
        <i class="fa fa-arrow-left"></i>
      </span>
      <span class="text">kembali</span>
    </a>
  </div>
  <div class="card-body">
    <form action="simpan_catatan.php" method="post">
      <div class="form-group">
        <label for="tanggal">Pilih Tanggal</label>
        <input type="date" name="tanggal" id="tanggal" required class="form-control" placeholder="Masukan Tanggal">
      </div>
      <div class="form-group">
        <label for="jam">Pilih Jam</label>
        <input type="time" name="jam" id="jam" required class="form-control" placeholder="Masukan Jam">
      </div>
      <div class="form-group">
        <label for="lokasi">Pilih lokasi</label>
        <input type="text" name="lokasi" id="lokasi" required class="form-control" placeholder="Masukan lokasi">
      </div>
      <div class="form-group">
        <label for="suhu">Suhu Tubuh</label>
        <input type="text" name="suhu" id="suhu" required class="form-control" placeholder="Masukan suhu tubuh">
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary"><i class="fa fa-save"> Simpan</i></button>
        <button type="reset" class="btn btn-warning"><i class="fa fa-trash"> Reset</i></button>
      </div>
    </form>
  </div>
</div>