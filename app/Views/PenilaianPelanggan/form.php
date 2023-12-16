<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3">Form Penilaian Pelanggan</h2>
            <form action="/PenilaianPelanggan/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Jenis Kayu</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="jenis_kayu" name="jenis_kayu" autofocus value=<?= old('jenis_kayu'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('jenis_kayu') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="jenis_kayu" name="jenis_kayu" autofocus>
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Merek Kayu</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="merek_kayu" name="merek_kayu" autofocus value=<?= old('merek_kayu'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('merek_kayu') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="merek_kayu" name="merek_kayu">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Penilaian Overall</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="penilaian_keseluruhan" name="penilaian_keseluruhan" autofocus value=<?= old('penilaian_keseluruhan'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('penilaian_keseluruhan') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="penilaian_keseluruhan" name="penilaian_keseluruhan">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Penilaian Tekstur</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="tekstur" name="tekstur" autofocus value=<?= old('tekstur'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('tekstur') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="tekstur" name="tekstur">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Penilaian Ketahanan</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="ketahanan" name="ketahanan" autofocus value=<?= old('ketahanan'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('ketahanan') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="ketahanan" name="ketahanan">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Penilaian Keperawatan</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="keperawatan" name="keperawatan" autofocus value=<?= old('keperawatan'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('keperawatan') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="keperawatan" name="keperawatan">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Kelebihan</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="kelebihan" name="kelebihan" autofocus value=<?= old('kelebihan'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('kelebihan') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="kelebihan" name="kelebihan">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Kekurangan</label>
                    <div class="col-sm-10">
                        <?php if (session('validation')) : ?>
                            <input type="text" class="form-control is-invalid ?>" id="kekurangan" name="kekurangan" autofocus value=<?= old('kekurangan'); ?>>
                            <div class="invalid-feedback">
                                <?= validation_show_error('kekurangan') ?>
                            </div>

                        <?php else : ?>
                            <input type="text" class="form-control " id="kekurangan" name="kekurangan">
                        <?php endif ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>