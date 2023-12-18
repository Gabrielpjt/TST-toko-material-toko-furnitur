<?= $this->extend('template/v_template'); ?>

<?= $this->section('content') ?>
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Form untuk pencarian -->
        <form action="<?= base_url('Rekomendasi/cariRekomendasi') ?>" method="post">
            <div class="form-group">
                <label for="tingkatTekstur">Tingkat Tekstur:</label>
                <input type="text" class="form-control" id="tingkatTekstur" name="tingkatTekstur">
            </div>
            <div class="form-group">
                <label for="tingkatKeperawatan">Tingkat Keperawatan:</label>
                <input type="text" class="form-control" id="tingkatKeperawatan" name="tingkatKeperawatan">
            </div>
            <div class="form-group">
                <label for="tingkatKetahanan">Tingkat Ketahanan:</label>
                <input type="text" class="form-control" id="tingkatKetahanan" name="tingkatKetahanan">
            </div>
            <button type="submit" class="btn btn-primary">Cari</button>
        </form>
    </div>

    <div class="card">
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
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($hasilPencarian ?? [] as $row) :  ?>
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
</div>

<?= $this->endSection() ?>