<?php echo $__env->make('admin.layouts.components.token', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    $(document).ready(function() {
        // Select2 dengan fitur pencarian
        $('.select2').select2({
            width: '100%',
            dropdownAutoWidth: true
        });

        $('.modal:visible').find('form').validate()

        // Reset select2 ke nilai asli
        // https://stackoverflow.com/questions/10319289/how-to-execute-code-after-html-form-reset-with-jquery
        $('button[type="reset"]').click(function(e) {
            e.preventDefault();
            $(this).closest('form').trigger('reset');
            // https://stackoverflow.com/questions/15205262/resetting-select2-value-in-dropdown-with-reset-button
            $(this).closest('form').find('.select2').trigger('change');
        });

        $('#jammenit_1').datetimepicker({
            format: 'HH:mm',
            locale: 'id'
        });
    })
</script>
<?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/layouts/components/form_modal_validasi.blade.php ENDPATH**/ ?>