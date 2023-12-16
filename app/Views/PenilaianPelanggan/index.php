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
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>