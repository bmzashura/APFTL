<div class="container-fluid">
    <h2 style="margin-top:0px">Program List</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
            <form action="<?php echo site_url('apftl_programread/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <?php
                        if ($q <> '') {
                        ?>
                            <a href="<?php echo site_url('apftl_programread'); ?>" class="btn btn-default">Reset</a>
                        <?php
                        }
                        ?>
                        <button class="btn btn-primary" type="submit">Search</button>
                    </span>
                </div>
            </form>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover table-bordered" style="margin-bottom: 10px">
            <thead class="thead-dark">
                <tr>
                    <th rowspan="2" class="text-nowrap align-middle text-center">No</th>
                    <th rowspan="2" class="align-middle text-center">Kategoria Programa</th>
                    <th rowspan="2" class="text-nowrap align-middle text-center">Aktifidade</th>
                    <th rowspan="2" class="text-nowrap align-middle text-center">Parseiru</th>
                    <th rowspan="2" class="text-nowrap align-middle text-center">Data</th>
                    <th rowspan="2" class="text-nowrap align-middle text-center">Municipiu</th>
                    <th colspan="3" class="text-nowrap align-middle text-center">Partisipante</th>
                    <th rowspan="2" class="text-nowrap align-middle text-center">Action</th>
                </tr>
                <tr>
                    <th class="text-nowrap align-middle text-center">Feto</th>
                    <th class="text-nowrap align-middle text-center">Mane</th>
                    <th class="text-nowrap align-middle text-center">Total</th>
                </tr>
            </thead>
            <?php
            foreach ($apftl_program_data as $apftl_program) {
            ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->category ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->activity ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->partner ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->date ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->distric ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->participant_m ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->participant_f ?></td>
                    <td class="text-nowrap"><?php echo $apftl_program->participant_sum ?></td>
                    <td class="text-nowrap" style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('apftl_programread/read/' . $apftl_program->id), 'Read', 'class="badge badge-success"');
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
    <div class="row">
        <div class="col-md-6">
            <a href="#" class="btn btn-primary">Total Record : <?php echo $total_rows ?></a>
        </div>
        <div class="col-md-6 text-right">
            <?php echo $this->pagination->create_links(); ?>
        </div>
    </div>
</div>