<div class="container">
    <div class="row">
    <span>
                    
        <img src="<?= base_url('uploads/images/thumbs-25.png') ?>" class=" rounded img-thumbnail" alt="...">
        <a name="" id="" class="btn btn-sm btn-danger" href="<?= base_url('delete') ?>" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a> |
        <img src="<?= base_url('uploads/images/thumbs-25.png') ?>" class=" rounded img-thumbnail" alt="...">
        <a name="" id="" class="btn btn-sm btn-danger" href="<?= base_url('delete') ?>" role="button"><i class="fa fa-trash" aria-hidden="true"></i></a> |
        

    </span>

    </div>
    <div class="row justify-content-center">
        <div class="col-6 p-5">
            <form>
                <div class="form-group">
                    <label for="title">Galerry Title</label>
                    <input type="text" class="form-control" id="title">
                    <small class="form-text text-danger">error</small>
                </div>
                <div class="form-group">
                    <label for="images">Select Images</label>
                    <input type="file" class="form-control-file" id="images">
                    <small class="form-text text-danger">error</small>
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>