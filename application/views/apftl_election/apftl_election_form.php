<div class="container-fluid">
    <h2 style="margin-top:0px"><?php echo $button ?> Elisaun</h2>
    <form action="<?php echo $action; ?>"  method="post">
        <div class="col-md-10">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="int">Municipiu <?php echo form_error('id_distric') ?></label>
                    <select name="id_distric" id="id_distric" class="form-control">
                        <option>--select--</option>
                        <?php foreach ($distric as $d) : ?>
                            <option value="<?php echo $d->id ?>" <?= $id_distric == $d->id ? "selected" : null ?>>
                                <?php echo $d->distric ?>
                            </option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="int">Posto Administrativu <?php echo form_error('id_subdistric') ?></label>
                    <select name="id_subdistric" id="id_subdistric" class="form-control" disabled="">
                        <option value=''>--select--</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                    <label for="varchar">Periodu Elisaun <?php echo form_error('election_period') ?></label>
                    <input type="text" class="form-control" name="election_period" id="election_period" placeholder="Election Period" value="<?php echo $election_period; ?>" />
                </div>
            </div>
            <h4 style="margin-top:0px">Registrasaun</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="varchar">Feto<?php echo form_error('female_register') ?></label>
                    <input type="number" class="form-control orc" name="female_register" id="female_register" placeholder="Female Register" value="<?php echo $female_register; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Mane<?php echo form_error('male_register') ?></label>
                    <input type="number" class="form-control orc" name="male_register" id="male_register" placeholder="Male Register" value="<?php echo $male_register; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Total<?php echo form_error('total_register') ?></label>
                    <input type="text" class="form-control" name="total_register" readonly id="total_register" placeholder="Total Register" value="<?php echo $total_register; ?>" />
                </div>
            </div>
            <h4 style="margin-top:0px">Seleksaun</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="varchar">Feto <?php echo form_error('female_selected') ?></label>
                    <input type="number" class="form-control rrc" name="female_selected" id="female_selected" placeholder="Female Selected" value="<?php echo $female_selected; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Mane<?php echo form_error('male_selected') ?></label>
                    <input type="number" class="form-control rrc" name="male_selected" id="male_selected" placeholder="Male Selected" value="<?php echo $male_selected; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Total<?php echo form_error('total_selected') ?></label>
                    <input type="text" class="form-control" name="total_selected" readonly id="total_selected" placeholder="Total Selected" value="<?php echo $total_selected; ?>" />
                </div>
            </div>
            <h4 style="margin-top:0px">Campanha</h4>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="varchar">Feto<?php echo form_error('female_candidate') ?></label>
                    <input type="number" class="form-control trc" name="female_candidate" id="female_candidate" placeholder="Female Candidate" value="<?php echo $female_candidate; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Mane<?php echo form_error('male_candidate') ?></label>
                    <input type="number" class="form-control trc" name="male_candidate" id="male_candidate" placeholder="Male Candidate" value="<?php echo $male_candidate; ?>" />
                </div>
                <div class="form-group col-md-3">
                    <label for="varchar">Total<?php echo form_error('total_candidate') ?></label>
                    <input type="text" class="form-control" name="total_candidate" readonly id="total_candidate" placeholder="Total Candidate" value="<?php echo $total_candidate; ?>" />
                </div>
            </div>
            <h4 style="margin-top:0px">Candidatura Eleitu Mane</h4>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="varchar">Naran kompletu <?php echo form_error('name_male') ?></label>
                <input type="text" class="form-control" name="name_male" id="name_male" placeholder="Name Male" value="<?php echo $name_male; ?>" />
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="varchar">Eduksaun <?php echo form_error('edu_male') ?></label>
                    <select name="edu_male" id="edu_male" class="form-control">
                        <option>--select--</option>
                        <option>Ensinu Baziku</option>
                        <option>Ensinu Sekundariu</option>
                        <option>Ensinu Superior</option>
                    </select>
                    </div>
                </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="varchar">Fatin moris <?php echo form_error('birth_p_male') ?></label>
                    <input type="text" class="form-control" name="birth_p_male" id="birth_p_male" placeholder="Birth P Male" value="<?php echo $birth_p_male; ?>" />
                </div>
                <div class="form-group col-md-4">
                    <label for="date">Data moris <?php echo form_error('birth_d_male') ?></label>
                    <input class="datepicker" name="birth_d_male" readonly id="birth_d_male" data-date-format="yyyy-mm-dd"  value="<?php echo $birth_d_male; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="varchar">Hela fatin <?php echo form_error('address_male') ?></label>
                <input type="text" class="form-control" name="address_male" id="address_male" placeholder="Address Male" value="<?php echo $address_male; ?>" />
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="varchar">Numeru telfone <?php echo form_error('mobile_male') ?></label>
                    <input type="text" class="form-control" name="mobile_male" id="mobile_male" placeholder="Mobile Male" value="<?php echo $mobile_male; ?>" />
                </div>
                <div class="form-group col-md-6">
                    <label for="varchar">Email <?php echo form_error('email_male') ?></label>
                    <input type="text" class="form-control" name="email_male" id="email_male" placeholder="Email Male" value="<?php echo $email_male; ?>" />
                </div>
            </div>
            <h4 style="margin-top:0px">Candidatura Eleitu Feto</h4>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="varchar">Naran kompletu <?php echo form_error('name_female') ?></label>
                <input type="text" class="form-control" name="name_female" id="name_female" placeholder="Name Female" value="<?php echo $name_female; ?>" />
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="varchar">Eduksaun <?php echo form_error('edu_female') ?></label>
                    <select name="edu_female" id="edu_female" class="form-control">
                        <option>--select--</option>
                        <option>Ensinu Baziku</option>
                        <option>Ensinu Sekundariu</option>
                        <option>Ensinu Superior</option>
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="varchar">Fatin moris <?php echo form_error('birth_p_female') ?></label>
                    <input type="text" class="form-control" name="birth_p_female" id="birth_p_female" placeholder="Birth P Female" value="<?php echo $birth_p_female; ?>" />
                </div>
                <div class="form-group col-md-4">
                    <label for="date">Data moris <?php echo form_error('birth_d_female') ?></label>
                    <input class="datepicker" name="birth_d_female" readonly id="birth_d_female" data-date-format="yyyy-mm-dd"  value="<?php echo $birth_d_female; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-8">
                <label for="varchar">Hela fatin <?php echo form_error('address_female') ?></label>
                <input type="text" class="form-control" name="address_female" id="address_female" placeholder="Address Female" value="<?php echo $address_female; ?>" />
            </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="varchar">Numeru telfone <?php echo form_error('mobile_female') ?></label>
                    <input type="text" class="form-control" name="mobile_female" id="mobile_female" placeholder="Mobile Female" value="<?php echo $mobile_female; ?>" />
                </div>
                <div class="form-group col-md-6">
                    <label for="varchar">Email<?php echo form_error('email_female') ?></label>
                    <input type="text" class="form-control" name="email_female" id="email_female" placeholder="Email Female" value="<?php echo $email_female; ?>" />
                </div>
            </div>

            <input type="hidden" name="id" value="<?php echo $id; ?>" />
            <button type="submit" class="btn btn-primary"><?php echo $button ?></button>
            <a href="<?php echo site_url('apftl_election') ?>" class="btn btn-default">Cancel</a>
        </div>
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