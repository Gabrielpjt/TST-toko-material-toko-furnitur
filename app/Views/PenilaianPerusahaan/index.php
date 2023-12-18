<?= $this->extend('template/v_template'); ?>

<?= $this->section('content') ?>
<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <?php if (session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            Data Penilaian berhasil <strong><?= session()->getFlashdata('message'); ?></strong>
        </div>
        <script>
            $(document).ready(function() {
                $(".alert").alert();
            });
        </script>
    <?php endif; ?>

    <div class="row">
        <div class="col-md-6">
            <?php
            $errors = session()->get('err');
            if (!empty($errors) && is_array($errors)) {
                echo "<div class='alert alert-danger' role='alert'>";
                foreach ($errors as $error) {
                    echo $error . "<br>";
                }
                echo "</div>";
                session()->remove('err');
            }
            ?>
        </div>
    </div>


    <div class="card">
        <div class="card-header">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalTambah">
                <i class="fa fa-plus"></i> Tambah Data
            </button>
        </div>
        <div class="table-responsive">
            <table class='table'>
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
                        <th>Opsi</th>
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
                            <td>
                                <!--<button type="button" data-toggle="modal" data-target="#modalUbah" class="btn btn-sm btn-warning" id="btn-edit" 
                            data-id="<?= $row['id']; ?>" data-Jenis_Kayu="<?= $row['Jenis_Kayu']; ?>" data-Merek_Kayu="<?= $row['Merek_Kayu']; ?>"
                            data-Tingkat_Ketahanan="<?= $row['Tingkat_Ketahanan']; ?>"><i class = "fa fa-edit"></i> </button>
                            Perbaikan pada tombol hapus, sesuaikan data-id -->
                                <a href="/PenilaianPerusahaan/hapus/<?= $row['id']; ?>" class="btn btn-primary"><i class="fa fa-trash-alt"></i></a>
                            </td>
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
                    <button type="submit" name="tambah" class="btn btn-primary">Tambah Data</button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalHapus">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Perbaikan pada form hapus -->
            <!-- Ganti method form menjadi DELETE -->
            <div class="modal-body">
                Apakah Anda yakin ingin menghapus data ini?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <!-- Perubahan pada tombol hapus, menggunakan method DELETE -->
                <a href="/PenilaianPerusahaan/hapus/<?= $row['id']; ?>" class="btn btn-primary">Yakin</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        // Menangani saat tombol hapus diklik
        $('.btn-delete').click(function() {
            // Mengambil ID yang terkait dari tombol hapus yang diklik
            var id = $(this).closest('tr').find('td:first').text();

            // Mengatur URL hapus sesuai dengan ID yang dipilih
            var deleteUrl = '/PenilaianPerusahaan/hapus/' + id;

            // Mengatur href pada tombol konfirmasi hapus dengan URL yang tepat
            $('#modalHapus .btn-primary').attr('href', deleteUrl);
        });
    });
</script>




<!-- Sebelum tag penutup </body> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
<?= $this->endSection() ?>