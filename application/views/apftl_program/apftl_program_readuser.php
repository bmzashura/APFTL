<div class="container-fluid">
    <h2 style="margin-top:0px">Programa APFTL | <?php echo $distric; ?></h2>
    <table class="table">
        <tr>
            <td>Kategoria</td>
            <td><?php echo $category; ?></td>
        </tr>
        <tr>
            <td>Aktividade</td>
            <td><?php echo $activity; ?></td>
        </tr>
        <tr>
            <td>Parseiru</td>
            <td><?php echo $partner; ?></td>
        </tr>
        <tr>
            <td>Data</td>
            <td><?php echo $date; ?></td>
        </tr>
        <tr>
            <td>Municipu</td>
            <td><?php echo $distric; ?></td>
        </tr>
        <tr>
            <td>Deskrisaun</td>
            <td><?php echo $description; ?></td>
        </tr>
        <tr>
            <td>Objectivu</td>
            <td><?php echo $objective; ?></td>
        </tr>
        <tr>
            <td>Partisipante Mane</td>
            <td><?php echo $participant_m; ?></td>
        </tr>
        <tr>
            <td>Partisipante Feto</td>
            <td><?php echo $participant_f; ?></td>
        </tr>
        <tr>
            <td>Total Patispante</td>
            <td><?php echo $participant_sum; ?></td>
        </tr>
        <tr>
            <td></td>
            <td><a href="<?php echo site_url('apftl_programread') ?>" class="btn btn-danger">Cancel</a></td>
        </tr>
    </table>
</div>