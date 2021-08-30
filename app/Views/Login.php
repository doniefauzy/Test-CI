<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-md-center">

        <div class="col-6">
            <h1>Masuk</h1>
            <?php if (session()->getFlashdata('msg')) : ?>
                <div class="alert alert-danger"><?= session()->getFlashdata('msg') ?></div>
            <?php endif; ?>
            <form action="/login/auth" method="post">
                <div class="mb-3">
                    <!-- <label for="InputForEmail" class="form-label">NIP</label>
                    <input type="text" name="nip" class="form-control" id="nip"> -->
                    <p><input type="text" onkeypress="return onlyNumberKey(event)" minlength="18" maxlength="19" class="form-control" placeholder="NIP" name="nip" id="nip" required>
                </div>
                <div class="mb-3">
                    <!-- <label for="InputForPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="nip"> -->
                    <p><input type="password" minlength="8" class="form-control" placeholder="Password" name="password" id="password" required>
                </div>
                <!-- <button type="submit" class="btn btn-primary">Login</button> -->
                <button type="submit" name="login"></button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>