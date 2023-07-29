<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header d-flex">
        <h3 class="card-title align-self-center">Employee</h3>

        <a href="https://wholesale.orangdalemdimfg.com/dashboard/image-manager/tambah" class="btn btn-sm ml-auto btn-primary">Tambah</a>
    </div>

    <div class="card-body">
        <div class="table-responsive mt-3">
            <table class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th width="1">No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Photo</th>
                        <th width="10%">Action</th>
                    </tr>
                </thead>
            
                <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($employees as $employee) : ?>
                    <tr>
                        <td align="center"><?= $counter ?></td>
                        <td><?= $employee['name'] ?></td>
                        <td><?= $employee['address'] ?></td>
                        <td><?= $employee['phone'] ?></td>
                        <td>
                            <?php if ($employee['photo_filename']) : ?>
                                <img src="<?= base_url('public/uploads/' . $employee['photo_filename']) ?>" alt="Employee Photo" width="100">
                            <?php else : ?>
                                No photo available
                            <?php endif; ?>
                        </td>
                        <td align="center">
                            <a href="#" class="btn btn-sm btn-danger"
                                onclick="return confirm('Apa anda yakin akan menghapus image tersebut ?')">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>

                </tbody>
            </table>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
    function onChangePhoto(obj) {
        var obj = $(obj)
        var label = $('label[for="exampleInputFile"]')
        var file = obj[0].files[0]
        
        if(file != undefined) {
            label.html(file.name)
        } else {
            label.html('Select Files')
        }
    }
</script>
<?= $this->endSection() ?>