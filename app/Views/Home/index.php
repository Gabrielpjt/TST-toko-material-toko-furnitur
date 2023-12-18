<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?= $judul ?></h1>


<!-- Most Durable Material -->
<h2>Top 10 Most Durable Material</h2>
<div class="table-responsive">
    <table class='table'>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Material</th>
                <th>Merek Material</th>
                <th>Skor Daya Tahan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($userInsight['most_durable_material_list'] as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['material_name']; ?></td>
                    <td><?= $row['material_brand']; ?></td>
                    <td><?= $row['durability_score']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Best Texture Material -->
<h2>Top 10 Best Texture Material</h2>
<div class="table-responsive">
    <table class='table'>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Material</th>
                <th>Merek Material</th>
                <th>Skor Tekstur</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($userInsight['best_texture_material_list'] as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['material_name']; ?></td>
                    <td><?= $row['material_brand']; ?></td>
                    <td><?= $row['texture_score']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<!-- Best Maintainability Material -->
<h2>Top 10 Best Maintainability Material</h2>
<div class="table-responsive">
    <table class='table'>
        <thead>
            <tr>
                <th>Nomor</th>
                <th>Nama Material</th>
                <th>Merek Material</th>
                <th>Skor Kepeliharaan</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($userInsight['best_maintanability_material_list'] as $row) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['material_name']; ?></td>
                    <td><?= $row['material_brand']; ?></td>
                    <td><?= $row['maintainability_score']; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


</div>
<!-- /.container-fluid -->


</div>
<!-- End of Main Content -->