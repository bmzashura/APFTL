<div class="container-fluid">
    <h2 style="margin-top:0px">Distric <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Distric <?php echo form_error('distric') ?></label>
            <input type="text" class="form-control" name="distric" id="distric" placeholder="Distric" value="<?php echo $distric; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('distric') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>