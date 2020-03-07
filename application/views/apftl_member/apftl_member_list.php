<div class="container-fluid">
    <h2 style="margin-top:0px">Member APFTL</h2>
    <div class="row" style="margin-bottom: 10px">
        <div class="col-md-4">
            <?php echo anchor(site_url('apftl_member/create'), 'Create', 'class="btn btn-primary"'); ?>
        </div>
        <div class="col-md-4 text-center">
            <div style="margin-top: 8px" id="message">
                <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
            </div>
        </div>
        <div class="col-md-1 text-right">
        </div>
        <div class="col-md-3 text-right">
            <form action="<?php echo site_url('apftl_member/index'); ?>" class="form-inline" method="get">
                <div class="input-group">
                    <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
                    <span class="input-group-btn">
                        <?php
                        if ($q <> '') {
                        ?>
                            <a href="<?php echo site_url('apftl_member'); ?>" class="btn btn-default">Reset</a>
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
                    <th>No</th>
                    <th>F Name</th>
                    <th>L Name</th>
                    <th>Gender</th>
                    <th>Periodu</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            foreach ($apftl_member_data as $apftl_member) {
            ?>
                <tr>
                    <td width="80px"><?php echo ++$start ?></td>
                    <td><?php echo $apftl_member->f_name ?></td>
                    <td><?php echo $apftl_member->l_name ?></td>
                    <td><?php echo $apftl_member->gender ?></td>
                    <td><?php echo $apftl_member->periodu ?></td>
                    <td style="text-align:center" width="200px">
                        <?php
                        echo anchor(site_url('apftl_member/read/' . $apftl_member->id), 'Read', 'class="badge badge-success"');
                        echo ' | ';
                        echo anchor(site_url('apftl_member/update/' . $apftl_member->id), 'Update', 'class="badge badge-info"');
                        echo ' | ';
                        echo anchor(site_url('apftl_member/delete/' . $apftl_member->id), 'Delete', 'class="badge badge-danger"', 'onclick="javasciprt: return confirm(\'Are You Sure ?\')"');
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
            <?php echo $pagination ?>
        </div>
    </div>
</div>