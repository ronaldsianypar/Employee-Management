<?= $this->extend('template') ?>

<?= $this->section('content') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Add</h3>
    </div>

    <div class="card-body">
        <form method="POST" action="<?= route_to('employee.create') ?>" accept-charset="UTF-8" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="Title">Name</label>
                <input class="form-control" autocomplete="off" required="" name="name" id="name" type="text">
            </div>
            
            <div class="mb-3">
                <label for="Title">Phone</label>
                <input class="form-control" autocomplete="off" required="" name="phone" id="phone" type="text">
            </div>
            
            <div class="mb-3">
                <label for="Title">Address</label>
                <textarea class="form-control" autocomplete="off" name="address" id="address" required=""></textarea>
            </div>

            <div class="mb-3">
                <label for="File">Photo</label>
                <div class="custom-file">
                    <input class="custom-file-input" accept="image/jpg, image/jpeg" onchange="onChangePhoto(this)" name="photo" id="photo" type="file">
                    <label class="custom-file-label" for="exampleInputFile">Select Files</label>
                </div>
            </div>

            <div class="callout callout-info">
                <ul class="m-auto" style="list-style: circle">
                    <li>Maximum Size 300KB</li>
                    <li>Image Format : JPG or JPEG</li>
                </ul>
            </div>

            <a href="#" class="btn btn-sm btn-default">Back</a>
            <button class="btn btn-sm btn-primary">Save</button>
        </form>
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