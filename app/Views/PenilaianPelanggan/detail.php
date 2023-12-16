<?= $this->extend('template/v_template'); ?>

<?= $this->section('content') ?>
<div class="contain">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Penilaian</h2>
            <div class=" card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $penilaianPelanggan['jenis_kayu']; ?></h5>
                            <h5 class="card-title"><?= $penilaianPelanggan['merek_kayu']; ?></h5>
                            <p class="card-text"><b>Tekstur:</b></p>
                            <p class="card-text"><small class="text-muted"><?= $penilaianPelanggan['tekstur']; ?></small></p>
                            <p class="card-text"><b>Ketahanan:</b></p>
                            <p class="card-text"><small class="text-muted"><?= $penilaianPelanggan['ketahanan']; ?></small></p>
                            <p class="card-text"><b>Keperawatan:</b></p>
                            <p class="card-text"><small class="text-muted"><?= $penilaianPelanggan['keperawatan']; ?></small></p>
                            <p class="card-text"><b>Kelebihan:</b></p>
                            <p class="card-text"><small class="text-muted"><?= $penilaianPelanggan['kelebihan']; ?></small></p>
                            <p class="card-text"><b>Kekurangan:</b></p>
                            <p class="card-text"><small class="text-muted"><?= $penilaianPelanggan['kekurangan']; ?></small></p>

                            <a href="/PenilaianPelanggan" class="btn btn-primary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>