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
                <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert alert-danger" role="alert">
                    <h4>Periksa Entrian Form</h4>
                    </hr />
                    <?php echo session()->getFlashdata('error'); ?>
                </div>
                <?php endif; ?>

                <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class="alert alert-success" role="alert" style="width: 100%; height: 50px; text-align: left;">
                    <h4>Berkas Berhasil diupload</h4>
                </div>
                 <?php endif; ?>

                    <table class="table table-striped table-md">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Position</th>
                                <th>Location</th>
                                <th>End Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            <?php foreach ($job as $j) : ?>
                                <tr>
                                    <td><?= $j['id']; ?></td>
                                    <td><?= $j['position']; ?></td>
                                    <td><?= $j['location']; ?></td>
                                    <td><?= $j['end_date']; ?></td>
                                    <td>
                                        <div class="badge badge-success">Active</div>
                                    </td>
                                    <td><a href="/berkas/create" class="btn btn-secondary">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
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