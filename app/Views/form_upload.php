<?= $this->extend('base') ?>
<?= $this->section('content') ?>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Blank Page</h1>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Blank Page</h4>
                </div>
                <div class="card-body">
                <div class="card-body table-responsivey">
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                    <div class="alert alert-danger" role="alert">
                        <h4>Periksa Entrian Form</h4>
                        </hr />
                        <?php echo session()->getFlashdata('error'); ?>
                    </div>
                <?php endif; ?>
                <form method="post" action="<?= base_url(); ?>/berkas/save" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= old('name'); ?>" style="height: 50px;">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?= old('address'); ?>" style="height: 100px; vertical-align: top;">
                    </div>
                    <div class="mb-3">
                        <label for="file" class="form-label">File</label>
                        <input type="file" class="form-control" id="file" name="file" style="height: 50px;">
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <input type="text" class="form-control" id="position" name="position" value="<?= old('position'); ?>" style="height: 50px;">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-info" value="Upload" />
                    </div>
                </form>
                </div>
            </div>
        </div>
</div>
</div>
</div>
</section>
</div>
<?= $this->endSection() ?>