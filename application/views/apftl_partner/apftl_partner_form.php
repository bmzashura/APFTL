<div class="container-fluid">
    <h2 style="margin-top:0px"><?php echo $button ?> Partner</h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Partner <?php echo form_error('partner') ?></label>
            <input type="text" class="form-control" name="partner" id="partner" placeholder="Partner" value="<?php echo $partner; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_partner') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>