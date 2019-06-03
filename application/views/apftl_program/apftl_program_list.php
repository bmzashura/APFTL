<div class="container-fluid">
    <h2 style="margin-top:0px">Apftl_program List</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <?php echo anchor(site_url('apftl_program/create'), 'Create', 'class="btn btn-primary"'); ?>
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
            <form action="<?php echo site_url('apftl_program/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <?php
                        if ($q <> '') {
                            ?>
                            <a href="<?php echo site_url('apftl_program'); ?>" class="btn btn-default">Reset</a>
                        <?php
                    }
                    ?>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <table class="table table-bordered" style="margin-bottom: 10px">
        <tr>
            <th>No</th>
            <th>Id Category</th>
            <th>Activity</th>
            <th>Id Partner</th>
            <th>Date</th>
            <th>Id Distric</th>
            <th>Description</th>
            <th>Objective</th>
            <th>Participant M</th>
            <th>Participant F</th>
            <th>Participant Sum</th>
            <th>Action</th>
        </tr><?php
                foreach ($apftl_program_data as $apftl_program) {
                    ?>
            <tr>
                <td width="80px"><?php echo ++$start ?></td>
                <td><?php echo $apftl_program->id_category ?></td>
                <td><?php echo $apftl_program->activity ?></td>
                <td><?php echo $apftl_program->id_partner ?></td>
                <td><?php echo $apftl_program->date ?></td>
                <td><?php echo $apftl_program->id_distric ?></td>
                <td><?php echo $apftl_program->description ?></td>
                <td><?php echo $apftl_program->objective ?></td>
                <td><?php echo $apftl_program->participant_m ?></td>
                <td><?php echo $apftl_program->participant_f ?></td>
                <td><?php echo $apftl_program->participant_sum ?></td>
                <td style="text-align:center" width="200px">
                    <?php
                    echo anchor(site_url('apftl_program/read/' . $apftl_program->id), 'Read');
                    echo ' | ';
                    echo anchor(site_url('apftl_program/update/' . $apftl_program->id), 'Update');
                    echo ' | ';
                    echo anchor(site_url('apftl_program/delete/' . $apftl_program->id), 'Delete', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
                    ?>
                </td>
            </tr>
        <?php
    }
    ?>
    </table>
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
        <div class="col-md-6 text-right">
            <?php echo $pagination ?>
        </div>
    </div>
</div>