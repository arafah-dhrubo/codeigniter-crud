<?php include('application/views/inc/header.php') ?>
<div class="container vh-100">
    <div class="p-3 border rounded d-flex flex-column justify-content-center h-auto">
        <div class="d-flex justify-content-between align-items-center">
            <h1 class="text-capitalize">Add new employee</h1>
            <a href="" class="btn btn-outline-primary btn-sm">Go Back</a>
        </div>
        <form class="" action="<?php echo base_url() . 'index.php/employee/create' ?>" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" value="<?php echo set_value('name') ?>" name="name" id="name" class="form-control">
                <span class="text-danger">
                    <?php echo form_error('name'); ?>
                </span>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?php echo set_value('email') ?>" name="email" id="email" class="form-control">
                <span class="text-danger">
                    <?php echo form_error('email'); ?>
                </span>
            </div>
            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="text" value="<?php echo set_value('phone') ?>" name="phone" id="phone" class="form-control">
                <span class="text-danger">
                    <?php echo form_error('phone'); ?>
                </span>
            </div>
            <input type="submit" value="Add" class="btn btn-primary w-100 mt-3">
        </form>
    </div>
</div>
<?php include('application/views/inc/footer.php') ?>