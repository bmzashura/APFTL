<div class="container-fluid">
    <h2 style="margin-top:0px"> <?php echo $button ?> Activity</h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="varchar">Activity <?php echo form_error('activity') ?></label>
            <input type="text" class="form-control" name="activity" id="activity" placeholder="Activity" value="<?php echo $activity; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_activity') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>