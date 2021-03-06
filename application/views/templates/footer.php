<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; APFTL <?= date('Y') ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery/jquery.js"></script>

<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });
    $(function() {
        $('.datepicker').datepicker()
    });
</script>

<script>
    $('.form-group').on('input', '.prc', function() {
        var totalSum = 0;
        $('.form-group .prc').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#participant_sum').val(totalSum);
    });
    $('.form-group').on('input', '.orc', function() {
        var totalSum = 0;
        $('.form-group .orc').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total_register').val(totalSum);
    });
    $('.form-group').on('input', '.rrc', function() {
        var totalSum = 0;
        $('.form-group .rrc').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total_selected').val(totalSum);
    });
    $('.form-group').on('input', '.trc', function() {
        var totalSum = 0;
        $('.form-group .trc').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total_candidate').val(totalSum);
    });
    $('.form-group').on('input', '.valid', function() {
        var totalSum = 0;
        $('.form-group .valid').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total_valid').val(totalSum);
    });
    $('.form-group').on('input', '.unvalid', function() {
        var totalSum = 0;
        $('.form-group .unvalid').each(function() {
            var inputVal = $(this).val().replace();
            if ($.isNumeric(inputVal)) {
                totalSum += parseFloat(inputVal);
            }
        });
        $('#total_unvalid').val(totalSum);
    });
</script>
<script src="<?= base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/') ?>vendor/jquery-easing/jquery.easing.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
<script src="<?= base_url('assets/') ?>js/sb-admin-2.js"></script>
<script src="<?= base_url('assets/') ?>ckeditor/ckeditor.js"> </script>


</body>

</html>