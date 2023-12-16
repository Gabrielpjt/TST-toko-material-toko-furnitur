<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Daftar Komik</h1>
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
                        <th scope="col">Detail</th>
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
                            <td>
                                <a href="/PenilaianPelanggan/<?= $p['id']; ?>" class=" btn btn-success">Detail</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>