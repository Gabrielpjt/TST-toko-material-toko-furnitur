<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>

    <div class="card">
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
                            <td><?= $row['Jenis Kayu']; ?></td>
                            <td><?= $row['Merek Kayu']; ?></td>
                            <td><?= $row['Tingkat Tekstur']; ?></td>
                            <td><?= $row['Tingkat Ketahanan']; ?></td>
                            <td><?= $row['Tingkat Keperawatan']; ?></td>
                            <td><?= $row['Harga']; ?></td>
                            <td><?= $row['Massa Jenis']; ?></td>
                            <td><?= $row['Tipe Finishing Warna']; ?></td>
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
