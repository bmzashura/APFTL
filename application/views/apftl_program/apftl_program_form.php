<div class="container-fluid">
    <td>
        <a href="<?php echo site_url('apftl_program/index'); ?>" class="badge badge-success">BACK</a>
    </td>
    <h2 style="margin-top:0px"><?php echo $button ?> Program</h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Category <?php echo form_error('id_category') ?></label>
            <select name="id_category" id="id_category" class="form-control">
                <option>--select--</option>
                <?php foreach ($program_category as $pc) : ?>
                    <option value="<?php echo $pc->id ?>">
                        <?php echo $pc->category ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Activity <?php echo form_error('id_activity') ?></label>
            <select name="id_activity" id="id_activity" class="form-control">
                <option>--select--</option>
                <?php foreach ($activity as $ac) : ?>
                    <option value="<?php echo $ac->id ?>">
                        <?php echo $ac->activity ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Id Partner <?php echo form_error('id_partner') ?></label>
            <select name="id_partner" id="id_partner" class="form-control">
                <option>--select--</option>
                <?php foreach ($partner as $p) : ?>
                    <option value="<?php echo $p->id ?>">
                        <?php echo $p->partner ?>
                    </option>
                <?php endforeach ?>
            </select>
        </div>
        <div class="form-group">
            <label for="int">Date <?php echo form_error('date') ?></label>
            <input class="datepicker" name="date" readonly id="date" data-date-format="yyyy-mm-dd">
        </div>
        <div class="form-group">
            <label for="int">Id Distric <?php echo form_error('id_distric') ?></label>
            <select name="id_distric" id="id_distric" class="form-control">
                <option>--select--</option>
                <?php foreach ($distric as $d) : ?>
                    <option value="<?php echo $d->id ?>">
                        <?php echo $d->distric ?>
                    </option>
                <?php endforeach ?>
            </select>
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
            <input type="number" class="form-control prc" name="participant_m" id="participant_m" placeholder="Participant M" value="<?php echo $participant_m; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Participant F <?php echo form_error('participant_f') ?></label>
            <input type="number" class="form-control prc" name="participant_f" id="participant_f" placeholder="Participant F" value="<?php echo $participant_f; ?>" />
        </div>
        <div class="form-group">
            <label for="int">Participant Sum <?php echo form_error('participant_sum') ?></label>
            <input type="number" class="form-control" name="participant_sum" readonly id="participant_sum" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_program') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>