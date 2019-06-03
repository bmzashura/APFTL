<div class="container-fluid">
    <h2 style="margin-top:0px">Apftl_c_program <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Category <?php echo form_error('category') ?></label>
            <input type="text" class="form-control" name="category" id="category" placeholder="Category" value="<?php echo $category; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_c_program') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>