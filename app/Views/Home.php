<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1>Daftar Pegawai</h1>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $x = 1; ?>
                    <?php foreach ($pegawai as $p) : ?>
                        <tr>
                            <th scope="row"><?= $x++; ?></th>
                            <td><?= $p['nama']; ?></td>
                            <td><?= $p['jabatan']; ?></td>
                        </tr>
                    <?php endforeach ?>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>