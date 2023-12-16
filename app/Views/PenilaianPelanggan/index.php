<?= $this->extend('template/v_template'); ?>

<?= $this->section('content') ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Penilaian</h1>
            <a href="/PenilaianPelanggan/create" class="btn btn-primary mb-2"></a>
            <?php if (session()->getFlashData('pesan')) : ?>
                <div class="alert alert-success" role='alert'>
                    <?= session()->getFlashdata('pesan') ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Jenis Kayu</th>
                        <th scope="col">Merek Kayu</th>
                        <th scope="col">Penilaian Overall</th>
                        <th scope="col">Tekstur</th>
                        <th scope="col">Ketahanan</th>
                        <th scope="col">Keperawatan</th>
                        <th scope="col">Kelebihan</th>
                        <th scope="col">Kekurangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($penilaianPelanggan as $p) : ?>
                        <tr>
                            <th scope="row"> <?= $i++; ?></th>
                            <td><?= $p['jenis_kayu']; ?></td>
                            <td><?= $p['merek_kayu']; ?></td>
                            <td><?= $p['penilaian_keseluruhan']; ?></td>
                            <td><?= $p['tekstur']; ?></td>
                            <td><?= $p['ketahanan']; ?></td>
                            <td><?= $p['keperawatan']; ?></td>
                            <td><?= $p['kelebihan']; ?></td>
                            <td><?= $p['kekurangan']; ?></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection() ?>