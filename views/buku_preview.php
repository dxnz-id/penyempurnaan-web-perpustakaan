<div class="container">
  <div class="row">
    <div class="col-xs-12">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3 class="panel-title">Informasi Detail Buku</h3>
        </div>
        <div class="panel-body">
          <!--Menampilkan data detail Buku-->
          <?php
          $sql = "SELECT *FROM buku WHERE id ='" . $_GET['id'] . "'";
          //proses query ke database
          $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
          //Merubaha data hasil query kedalam bentuk array
          $data = mysqli_fetch_array($query);
          ?>

          <div class="wrapper" style="display: flex;flex-direction: row; padding: 1vh;">
            <div class="left"><img src="public\images\thumbnail\<?= $data['thumbnail_buku'] ?>" class="rounded-images col-xs-12" alt=""></div>
            <div class="right">
              <div>
                <h1 style="margin: 0;">
                  <?= $data['judul_buku'] ?>
                </h1>
                <h4 style="margin: 0;">Karya
                  <?= $data['nama_pengarang'] ?>
                </h4>
                <p style="margin: 0;opacity: 70%;">
                  <?= $data['tahun_terbit'] ?>
                </p>
                <br>
                <div style="display: block;flex-direction: row;">
                  <div class="col-xs-3">
                    <h5 style="margin: 0; font-weight: bold;">Loker Buku</h5>
                    <h5 style="margin: 0;opacity: 50%;">
                      <?= $data['loker_buku'] ?>
                    </h5>
                    <br>
                    <h5 style="margin: 0; font-weight: bold;">Nomor Rak/Lemari</h5>
                    <h5 style="margin: 0;opacity: 50%;">
                      <?= $data['no_rak'] ?>
                    </h5>
                    <br>
                    <h5 style="margin: 0; font-weight: bold;">Nomor Tingkat/Laci</h5>
                    <h5 style="margin: 0;opacity: 50%;">
                      <?= $data['no_laci'] ?>
                    </h5>
                    <br>
                    <h5 style="margin: 0; font-weight: bold;">Nomor Buku</h5>
                    <h5 style="margin: 0;opacity: 50%;">
                      <?= $data['no_boks'] ?>
                    </h5>
                    <br>
                  </div>
                  <div style="display: block;flex-direction: row;">
                    <div class="col-xs-3">
                      <h5 style="margin: 0; font-weight: bold;">Tahun Terbit</h5>
                      <h5 style="margin: 0;opacity: 50%;">
                        <?= $data['tahun_terbit'] ?>
                      </h5>
                      <br>
                      <h5 style="margin: 0; font-weight: bold;">Penerbit Buku</h5>
                      <h5 style="margin: 0;opacity: 50%;">
                        <?= $data['penerbit'] ?>
                      </h5>
                      <br>
                      <h5 style="margin: 0; font-weight: bold;">Status</h5>
                      <h5 style="margin: 0;opacity: 50%;">
                        <?= $data['status'] ?>
                      </h5>
                      <br>
                      <h5 style="margin: 0; font-weight: bold;">Keterangan</h5>
                      <h5 style="margin: 0;opacity: 50%;">
                        <?= $data['keterangan'] ?>
                      </h5>
                      <br>
                    </div>

                  </div>
                </div>
              </div><br>
              <div class="col-xs-12" style="padding: 10px;width: 100%;">
                <h4 style="font-weight: bold;">Deskripsi Buku</h4>
                <div class="paragraph">
                  <?= $data['deskripsi'] ?>
                </div>
              </div>
            </div>
          </div>






        </div> <!--end panel-body-->
        <!--panel footer-->
        <div class="panel-footer">
          <a href="?page=utama" class="btn btn-success btn-sm">
            Kembali ke Data Buku </a>

        </div>
        <!--end panel footer-->
      </div>

    </div>
  </div>
</div>

<script>

</script>