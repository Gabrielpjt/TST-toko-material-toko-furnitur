<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="card-body">
            <table class='table table-striped'>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Jenis Kayu</th>
                        <th>Merek Kayu</th>
                        <th>Tingkat Tekstur</th>
                        <th>Tingkat Ketahanan</th>
                        <th>Tingkat Keperawatan</th>
                        <th>Harga</th>
                        <th>Massa Jenis</th>
                        <th>Tipe Finishing Warna</th>
                        <th>Kelebihan</th>
                        <th>Kekurangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($penilaianperusahaan as $row) : ?>
                        <tr>
                            <td><?= $row['id']; ?></td>
                            <td><?= $row['Jenis_Kayu']; ?></td>
                            <td><?= $row['Merek_Kayu']; ?></td>
                            <td><?= $row['Tingkat_Tekstur']; ?></td>
                            <td><?= $row['Tingkat_Ketahanan']; ?></td>
                            <td><?= $row['Tingkat_Keperawatan']; ?></td>
                            <td><?= $row['Harga']; ?></td>
                            <td><?= $row['Massa_Jenis']; ?></td>
                            <td><?= $row['Tipe_Finishing_Warna']; ?></td>
                            <td><?= $row['Kelebihan']; ?></td>
                            <td><?= $row['Kekurangan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- /.container-fluid -->

<!-- Modal -->
<div class="modal fade" id="modalTambah">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?= base_url("PenilaianPerusahaan/tambah"); ?>" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah <?= $judul ?></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Form elements -->
                    <div class="form-group">
                        <label for="Jenis_Kayu">Jenis Kayu:</label>
                        <input type="text" class="form-control" id="Jenis_Kayu" name="Jenis_Kayu" placeholder="Masukkan Jenis Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Merek_Kayu">Merek Kayu:</label>
                        <input type="text" class="form-control" id="Merek_Kayu" name="Merek_Kayu" placeholder="Masukkan Merek Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Tingkat_Tekstur">Tingkat Tekstur:</label>
                        <input type="text" class="form-control" id="Tingkat_Tekstur" name="Tingkat_Tekstur" placeholder="Masukkan Tingkat Tekstur Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Tingkat_Ketahanan">Tingkat Ketahanan:</label>
                        <input type="text" class="form-control" id="Tingkat_Ketahanan" name="Tingkat_Ketahanan" placeholder="Masukkan Tingkat Ketahanan Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Tingkat_Keperawatan">Tingkat Keperawatan:</label>
                        <input type="text" class="form-control" id="Tingkat_Keperawatan" name="Tingkat_Keperawatan" placeholder="Masukkan Tingkat Keperawatan Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Harga">Harga:</label>
                        <input type="text" class="form-control" id="Harga" name="Harga" placeholder="Masukkan Harga Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Massa_Jenis">Massa Jenis:</label>
                        <input type="text" class="form-control" id="Massa_Jenis" name="Massa_Jenis" placeholder="Masukkan Massa Jenis Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Tipe_Finishing_Warna">Tipe Finishing Warna:</label>
                        <input type="text" class="form-control" id="Tipe_Finishing_Warna" name="Tipe_Finishing_Warna" placeholder="Masukkan Tipe Finishing Warna Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Kelebihan">Kelebihan:</label>
                        <input type="text" class="form-control" id="Kelebihan" name="Kelebihan" placeholder="Masukkan Kelebihan Kayu">
                    </div>
                    <div class="form-group">
                        <label for="Kekurangan">Kekurangan:</label>
                        <input type="text" class="form-control" id="Kekurangan" name="Kekurangan" placeholder="Masukkan Kekurangan Kayu">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sebelum tag penutup </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>


