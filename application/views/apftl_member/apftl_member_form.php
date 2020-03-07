<div class="container-fluid">
    <h2 style="margin-top:0px"><?php echo $button ?> Member</h2>
    <form action="<?php echo $action; ?>" enctype="multipart/form-data" method="post">
        <div class="form-row">
            <div class="form-group col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $photo; ?>" class="img-thumbnail">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="photo" name="photo" value="<?php echo $photo; ?>">
                    <label class="custom-file-label" for="photo">Choose file <?php echo form_error('photo') ?></label>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="varchar">First Name <?php echo form_error('f_name') ?></label>
                <input type="text" class="form-control" name="f_name" id="f_name" placeholder="F Name" value="<?php echo $f_name; ?>" />
            </div>
            <div class="form-group col-md-5">
                <label for="varchar">Last Name <?php echo form_error('l_name') ?></label>
                <input type="text" class="form-control" name="l_name" id="l_name" placeholder="L Name" value="<?php echo $l_name; ?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <label for="int">Gender <?php echo form_error('id_gender') ?></label>
                <select name="id_gender" id="id_gender" class="form-control">
                    <option value="">--select--</option>
                    <?php foreach ($gender as $g) : ?>
                        <option value="<?php echo $g->id ?>" <?php echo ($id_gender == $g->id) ? 'selected' : '' ?>>
                            <?php echo $g->gender ?>
                        </option>
                    <?php endforeach ?>
                </select>
            </div>
            <div class="form-group col-md-3">
                <label for="varchar">Status <?php echo form_error('status') ?></label>
                <input type="text" class="form-control" name="status" id="status" placeholder="Status" value="<?php echo $status; ?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="varchar">Birth Place <?php echo form_error('birth_p') ?></label>
                <input type="text" class="form-control" name="birth_p" id="birth_p" placeholder="Birth P" value="<?php echo $birth_p; ?>" />
            </div>
            <div class="form-group col-md-3">
                <label for="date">Birth Date <?php echo form_error('birth_d') ?></label>
                <input class="datepicker" name="birth_d" id="birth_d" placeholder="Birth D" data-date-format="yyyy-mm-dd" value="<?php echo $birth_d; ?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-8">
                <label for="varchar">Address <?php echo form_error('address') ?></label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $address; ?>" />
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-5">
                <label for="varchar">Email <?php echo form_error('email') ?></label>
                <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo $email; ?>" />
            </div>
            <div class="form-group col-md-3">
                <label for="varchar">Phone N <?php echo form_error('phone_n') ?></label>
                <input type="text" class="form-control" name="phone_n" id="phone_n" placeholder="Phone N" value="<?php echo $phone_n; ?>" />
            </div>
            <div class="form-group col-md-3">
                <label for="varchar">Periodu <?php echo form_error('periodu') ?></label>
                <input type="text" class="form-control" name="periodu" id="periodu" placeholder="Periodu" value="<?php echo $periodu; ?>" />
            </div>
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_member') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>