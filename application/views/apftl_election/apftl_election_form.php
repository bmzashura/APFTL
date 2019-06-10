<div class="container-fluid">
    <h2 style="margin-top:0px"><?php echo $button ?>Election</h2>
    <form action="<?php echo $action; ?>" method="post">
        <div class="form-group">
            <label for="int">Municipiu <?php echo form_error('id_distric') ?></label>
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
            <label for="int">Id Subdistric <?php echo form_error('id_subdistric') ?></label>
            <select name="id_subdistric" id="id_subdistric" class="form-control" disabled="">
                <option value=''>--select--</option>
            </select>
        </div>
        <div class="form-group">
            <label for="varchar">Election Period <?php echo form_error('election_period') ?></label>
            <input type="text" class="form-control" name="election_period" id="election_period" placeholder="Election Period" value="<?php echo $election_period; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Female Register <?php echo form_error('female_register') ?></label>
            <input type="text" class="form-control" name="female_register" id="female_register" placeholder="Female Register" value="<?php echo $female_register; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Male Register <?php echo form_error('male_register') ?></label>
            <input type="text" class="form-control" name="male_register" id="male_register" placeholder="Male Register" value="<?php echo $male_register; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Total Register <?php echo form_error('total_register') ?></label>
            <input type="text" class="form-control" name="total_register" id="total_register" placeholder="Total Register" value="<?php echo $total_register; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Female Selected <?php echo form_error('female_selected') ?></label>
            <input type="text" class="form-control" name="female_selected" id="female_selected" placeholder="Female Selected" value="<?php echo $female_selected; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Male Selected <?php echo form_error('male_selected') ?></label>
            <input type="text" class="form-control" name="male_selected" id="male_selected" placeholder="Male Selected" value="<?php echo $male_selected; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Total Selected <?php echo form_error('total_selected') ?></label>
            <input type="text" class="form-control" name="total_selected" id="total_selected" placeholder="Total Selected" value="<?php echo $total_selected; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Female Candidate <?php echo form_error('female_candidate') ?></label>
            <input type="text" class="form-control" name="female_candidate" id="female_candidate" placeholder="Female Candidate" value="<?php echo $female_candidate; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Male Candidate <?php echo form_error('male_candidate') ?></label>
            <input type="text" class="form-control" name="male_candidate" id="male_candidate" placeholder="Male Candidate" value="<?php echo $male_candidate; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Total Candidate <?php echo form_error('total_candidate') ?></label>
            <input type="text" class="form-control" name="total_candidate" id="total_candidate" placeholder="Total Candidate" value="<?php echo $total_candidate; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Photo Male <?php echo form_error('photo_male') ?></label>
            <input type="text" class="form-control" name="photo_male" id="photo_male" placeholder="Photo Male" value="<?php echo $photo_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Name Male <?php echo form_error('name_male') ?></label>
            <input type="text" class="form-control" name="name_male" id="name_male" placeholder="Name Male" value="<?php echo $name_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Birth P Male <?php echo form_error('birth_p_male') ?></label>
            <input type="text" class="form-control" name="birth_p_male" id="birth_p_male" placeholder="Birth P Male" value="<?php echo $birth_p_male; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Birth D Male <?php echo form_error('birth_d_male') ?></label>
            <input type="text" class="form-control" name="birth_d_male" id="birth_d_male" placeholder="Birth D Male" value="<?php echo $birth_d_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Address Male <?php echo form_error('address_male') ?></label>
            <input type="text" class="form-control" name="address_male" id="address_male" placeholder="Address Male" value="<?php echo $address_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Mobile Male <?php echo form_error('mobile_male') ?></label>
            <input type="text" class="form-control" name="mobile_male" id="mobile_male" placeholder="Mobile Male" value="<?php echo $mobile_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email Male <?php echo form_error('email_male') ?></label>
            <input type="text" class="form-control" name="email_male" id="email_male" placeholder="Email Male" value="<?php echo $email_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Valid Male <?php echo form_error('valid_male') ?></label>
            <input type="text" class="form-control" name="valid_male" id="valid_male" placeholder="Valid Male" value="<?php echo $valid_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Unvalid Male <?php echo form_error('unvalid_male') ?></label>
            <input type="text" class="form-control" name="unvalid_male" id="unvalid_male" placeholder="Unvalid Male" value="<?php echo $unvalid_male; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Photo Female <?php echo form_error('photo_female') ?></label>
            <input type="text" class="form-control" name="photo_female" id="photo_female" placeholder="Photo Female" value="<?php echo $photo_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Name Female <?php echo form_error('name_female') ?></label>
            <input type="text" class="form-control" name="name_female" id="name_female" placeholder="Name Female" value="<?php echo $name_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Birth P Female <?php echo form_error('birth_p_female') ?></label>
            <input type="text" class="form-control" name="birth_p_female" id="birth_p_female" placeholder="Birth P Female" value="<?php echo $birth_p_female; ?>" />
        </div>
        <div class="form-group">
            <label for="date">Birth D Female <?php echo form_error('birth_d_female') ?></label>
            <input type="text" class="form-control" name="birth_d_female" id="birth_d_female" placeholder="Birth D Female" value="<?php echo $birth_d_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Address Female <?php echo form_error('address_female') ?></label>
            <input type="text" class="form-control" name="address_female" id="address_female" placeholder="Address Female" value="<?php echo $address_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Mobile Female <?php echo form_error('mobile_female') ?></label>
            <input type="text" class="form-control" name="mobile_female" id="mobile_female" placeholder="Mobile Female" value="<?php echo $mobile_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Email Female <?php echo form_error('email_female') ?></label>
            <input type="text" class="form-control" name="email_female" id="email_female" placeholder="Email Female" value="<?php echo $email_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Valid Female <?php echo form_error('valid_female') ?></label>
            <input type="text" class="form-control" name="valid_female" id="valid_female" placeholder="Valid Female" value="<?php echo $valid_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Unvalid Female <?php echo form_error('unvalid_female') ?></label>
            <input type="text" class="form-control" name="unvalid_female" id="unvalid_female" placeholder="Unvalid Female" value="<?php echo $unvalid_female; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Total Valid <?php echo form_error('total_valid') ?></label>
            <input type="text" class="form-control" name="total_valid" id="total_valid" placeholder="Total Valid" value="<?php echo $total_valid; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Total Unvalid <?php echo form_error('total_unvalid') ?></label>
            <input type="text" class="form-control" name="total_unvalid" id="total_unvalid" placeholder="Total Unvalid" value="<?php echo $total_unvalid; ?>" />
        </div>
        <input type="hidden" name="id" value="<?php echo $id; ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
        <a href="<?php echo site_url('apftl_election') ?>" class="btn btn-default">Cancel</a>
    </form>
</div>
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#id_distric').on('change', function() {
            var id_distric = $(this).val();
            if (id_distric == '') {
                $('#id_subdistric').prop('disabled', true);
            } else {
                $('#id_subdistric').prop('disabled', false);
                $.ajax({
                    url: "<?php echo base_url() ?>apftl_election/get_subdistric",
                    type: "POST",
                    data: {
                        'id_distric': id_distric
                    },
                    dataType: 'json',
                    success: function(data) {
                        $('#id_subdistric').html(data);
                    },
                    error: function() {
                        alert('Error occur...!!');
                    }
                })
            }
        });
    });
</script>