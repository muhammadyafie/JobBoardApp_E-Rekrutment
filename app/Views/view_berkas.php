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

                </div>
                <div class="card-body table-responsive">
                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo session()->getFlashdata('success'); ?>
                    </div>
                <?php endif; ?>
                <a href="<?= base_url(); ?>/berkas/create" class="btn btn-primary">Upload</a>
                <hr />
                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Gambar</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                            <?php
                            $no  = 1;
                            foreach ($berkas as $row) {
                            ?>
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td><img width="150px" class="img-thumbnail" src="<?= base_url() . "/uploads/berkas/" . $row->file; ?>"></td>
                                    <td><?= $row->position; ?></td>
                                    <td><a class="btn btn-info" href="<?= base_url(); ?>/berkas/download/<?= $row->id; ?>">Download</a></td>
                                </tr>
                            <?php
                            }
                            ?>

                       </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="card-footer text-right">
            <nav class="d-inline-block">
                <ul class="pagination mb-0">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                </ul>
            </nav>
        </div>
</div>
</div>
</div>
</section>
</div>
<?= $this->endSection() ?>