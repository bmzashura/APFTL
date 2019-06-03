<div class="container-fluid">
    <h2 style="margin-top:0px">Apftl_program <?php echo $button ?></h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Id Category <?php echo form_error('id_category') ?></label>
            <input type="text" class="form-control" name="id_category" id="id_category" placeholder="Id Category" value="<?php echo $id_category; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Activity <?php echo form_error('activity') ?></label>
            <input type="text" class="form-control" name="activity" id="activity" placeholder="Activity" value="<?php echo $activity; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Id Partner <?php echo form_error('id_partner') ?></label>
            <input type="text" class="form-control" name="id_partner" id="id_partner" placeholder="Id Partner" value="<?php echo $id_partner; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Date <?php echo form_error('date') ?></label>
            <input type="text" class="form-control" name="date" id="date" placeholder="Date" value="<?php echo $date; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Id Distric <?php echo form_error('id_distric') ?></label>
            <input type="text" class="form-control" name="id_distric" id="id_distric" placeholder="Id Distric" value="<?php echo $id_distric; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Description <?php echo form_error('description') ?></label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Description" value="<?php echo $description; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Objective <?php echo form_error('objective') ?></label>
            <input type="text" class="form-control" name="objective" id="objective" placeholder="Objective" value="<?php echo $objective; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Participant M <?php echo form_error('participant_m') ?></label>
            <input type="text" class="form-control" name="participant_m" id="participant_m" placeholder="Participant M" value="<?php echo $participant_m; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Participant F <?php echo form_error('participant_f') ?></label>
            <input type="text" class="form-control" name="participant_f" id="participant_f" placeholder="Participant F" value="<?php echo $participant_f; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Participant Sum <?php echo form_error('participant_sum') ?></label>
            <input type="text" class="form-control" name="participant_sum" id="participant_sum" placeholder="Participant Sum" value="<?php echo $participant_sum; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_program') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>