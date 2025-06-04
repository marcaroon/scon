<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.jquery_ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>
        Daftar Surat
        <small><?php echo e($action); ?> Pengaturan Surat</small>
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(ci_route('surat_master')); ?>">Daftar Surat</a></li>
    <li class="active"><?php echo e($action); ?> Pengaturan Surat</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo form_open($formAction, 'id="validasi" enctype="multipart/form-data"'); ?>

    <input type="hidden" id="id_surat" name="id_surat" value="<?php echo e($suratMaster->id); ?>">
    <div class="nav-tabs-custom">
        <div class="container-fluid identitas-surat">
            <h4>Surat <?php echo e($suratMaster->nama ?? ''); ?></h4>
        </div>
        <ul class="nav nav-tabs" id="tabs">
            <li class="active"><a href="#pengaturan-umum" data-toggle="tab">Umum</a></li>
            <li><a href="#template-surat" data-toggle="tab">Template</a></li>
            <li><a href="#form-isian" data-toggle="tab">Form Isian</a></li>
        </ul>
        <div class="tab-content">

            <?php echo $__env->make('admin.pengaturan_surat.umum', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php echo $__env->make('admin.pengaturan_surat.tinymce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div class="box-footer">
                <button type="reset" class="btn btn-social btn-danger btn-sm"><i class="fa fa-times"></i> Batal</button>
                <a onclick="formAction('validasi', '<?php echo e($formAction); ?>')" id="simpan-keluar"class="btn btn-social btn-info btn-sm pull-right"><i class="fa fa-check"></i>Simpan dan Keluar</button>
                    <a onclick="formAction('validasi', '<?php echo e($simpan_sementara); ?>')" id="simpan-sementara" class="btn btn-social btn-warning btn-sm pull-right" style="margin: 0 8px 0 0;"><i class="fa fa-file-code-o"></i>
                        Simpan Sementara</a>
                    <button id="preview" name="action" value="preview" class="btn btn-social btn-vk btn-success btn-sm pull-right" style="margin: 0 8px"><i class="fa fa-eye"></i>Tinjau PDF</button>
            </div>
        </div>
    </div>
    </form>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#validasi').submit(function() {
            tinymce.triggerSave()
        });

        $(document).ready(function() {
            var viewOnly = "<?php echo e($viewOnly); ?>";

            if (viewOnly) {
                // Disable all input form elements
                $('form :input')
                    .prop('readonly', true);
                $('input[type="checkbox"]').prop('disabled', true);

                // Disable all button form elements
                $('form :button')
                    .not('#tutup-restore')
                    .not('#preview')
                    .prop('disabled', true);

                // If using select2, disable it separately
                $('select').prop('disabled', true).trigger('change');

                // Disable all <a> links within the form
                $('form a')
                    .not('#tabs a')
                    .not('a[href="<?php echo e(ci_route('surat_master')); ?>"]')
                    .not('#restore_surat_bawaan')
                    .not('#ok-restore')
                    .css({
                        'opacity': '0.5',
                        'pointer-events': 'none',
                        'cursor': 'default',
                    });

                // Disable tinymce editor
                tinymce.activeEditor.mode.set('readonly');
                tinymce.activeEditor.mode.set('design');
            }

            syarat($('input[name=mandiri]:checked').val());
            $('input[name="mandiri"]').change(function() {
                syarat($(this).val());
            });

            $('#pengaturan-umum input[name=nama]').keyup(function(e) {
                $('div.identitas-surat h4').text('Surat ' + $(this).val())
            });

            $('#validasi').on('submit', function(e) {
                if (!$(this).valid()) return false;

                e.preventDefault();
                tinymce.triggerSave();

                const form = $(this);
                const formData = new FormData(this);

                $.ajax({
                        url: form.attr('action'),
                        type: form.attr('method'),
                        data: formData,
                        processData: false,
                        contentType: false,
                        dataType: 'json'
                    })
                    .done(function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: response.message,
                            timer: 2500,
                        });

                        if (response.redirect) {
                            setTimeout(() => {
                                window.location.href = response.redirect;
                            }, 2500);
                        }
                    })
                    .fail(function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: xhr.responseJSON.message,
                            timer: 2500,
                        });
                    });
            });

            $('#preview').click(function(e) {
                if (viewOnly) {
                    $('form :input').prop('required', false);
                    $('form :input').removeClass('required');
                }
                if (!$('#validasi').valid()) return false;


                e.preventDefault();
                tinymce.triggerSave();

                Swal.fire({
                    title: 'Membuat pratinjau..',
                    timerProgressBar: true,
                    didOpen: () => {
                        Swal.showLoading()
                    },
                    allowOutsideClick: () => false
                });

                $.ajax({
                    url: `<?php echo e(ci_route('surat_master/update', $suratMaster->id)); ?>`,
                    type: 'POST',
                    xhrFields: {
                        responseType: 'blob'
                    },
                    data: $("#validasi").serialize() + "&action=preview",
                    success: function(response, status, xhr) {
                        // https://stackoverflow.com/questions/34586671/download-pdf-file-using-jquery-ajax
                        var filename = "";
                        var disposition = xhr.getResponseHeader('Content-Disposition');

                        if (disposition) {
                            var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                            var matches = filenameRegex.exec(disposition);
                            if (matches !== null && matches[1]) filename = matches[1].replace(
                                /['"]/g, '');
                        }
                        try {
                            var blob = new Blob([response], {
                                type: 'application/pdf'
                            });
                            if (typeof window.navigator.msSaveBlob !== 'undefined') {
                                //   IE workaround for "HTML7007: One or more blob URLs were revoked by closing the blob for which they were created. These URLs will no longer resolve as the data backing the URL has been freed."
                                window.navigator.msSaveBlob(blob, filename);
                            } else {
                                var URL = window.URL || window.webkitURL;
                                var downloadUrl = URL.createObjectURL(blob);
                                Swal.fire({
                                    customClass: {
                                        popup: 'swal-lg'
                                    },
                                    title: 'Pratinjau',
                                    html: `
                                            <object data="${downloadUrl}#toolbar=0" style="width: 100%;min-height: 400px;" type="application/pdf"></object>
                                        `,
                                    showCancelButton: true,
                                    showConfirmButton: false,
                                    cancelButtonText: 'Tutup',
                                    allowOutsideClick: () => false
                                })
                            }
                        } catch (ex) {
                            alert(ex); // This is an error
                        }
                    }
                }).fail(function(response, status, xhr) {
                    Swal.fire({
                        title: xhr.statusText,
                        icon: 'error',
                        text: response.statusText,
                    })
                })
            });
        });

        function masaBerlaku() {
            var masa_berlaku = $('#masa_berlaku').val();
            if (masa_berlaku < 0) {
                $('#masa_berlaku').val(0);
            } else if (masa_berlaku > 31) {
                $('#masa_berlaku').val(31);
            }
        }

        function syarat(tipe) {
            (tipe == '1' || tipe == null) ? $('#syarat').show(): $('#syarat').hide();
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/pengaturan_surat/form.blade.php ENDPATH**/ ?>