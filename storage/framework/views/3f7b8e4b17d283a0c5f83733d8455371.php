<?php echo $__env->make('admin.pengaturan_surat.asset_tinymce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.jquery_ui', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.asset_validasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.datetime_picker', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>Tambah Program Bantuan</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li><a href="<?php echo e(site_url('program_bantuan')); ?>"> Daftar Program Bantuan</a></li>
    <li class="active">Tambah Program Bantuan</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="box box-info">
        <div class="box-header with-border">
            <a href="<?php echo e(site_url('program_bantuan')); ?>" class="btn btn-social btn-info btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Kembali Ke Daftar Program Bantuan"><i class="fa fa-arrow-circle-o-left"></i> Kembali Ke Daftar
                Program Bantuan</a>
        </div>
        <form id="validasi" action="<?php echo e($form_action); ?>" method="POST" enctype="multipart/form-data" class="form-horizontal">
            <div class="box-body">
                <?php $cid = $_REQUEST['cid']; ?>
                <div class="form-group">
                    <label class="col-sm-3 control-label">Sasaran Program</label>
                    <div class="col-sm-3">
                        <select class="form-control input-sm required" name="cid" id="cid">
                            
                            <option value="">Pilih Sasaran Program <?php echo e($cid); ?></option>
                            <?php $__currentLoopData = $sasaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>" <?= ($key == $cid) ? 'selected' : ''; ?>><?php echo e($item); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group" style="display: none;" id="penerima">
                    <label class="col-sm-3 control-label" for="penerima">Penerima</label>
                    <div class="col-sm-9">
                        <select class="form-control input-sm select2 required" name="kk_level[]" multiple="multiple">
                            <?php $__currentLoopData = $kk_level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($key); ?>"><?php echo e($value); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3" for="nama">Nama Program</label>
                    <div class="col-sm-8">
                        <input name="nama" class="form-control input-sm nomor_sk required" maxlength="100" placeholder="Nama Program" type="text"></input>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="ndesc">Keterangan</label>
                    <div class="col-sm-8">
                        <textarea id="ndesc" name="ndesc" class="form-control input-sm required" placeholder="Isi Keterangan" rows="8"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="asaldana">Asal Dana</label>
                    <div class="col-sm-3">
                        <select class="form-control input-sm required" name="asaldana" id="asaldana">
                            <option value="">Asal Dana</option>
                            <?php $__currentLoopData = $asaldana; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($ad); ?>"><?php echo e($ad); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-3 control-label" for="tgl_post">Rentang Waktu Program</label>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input class="form-control input-sm pull-right required" id="tgl_mulai" name="sdate" placeholder="Tgl. Mulai" type="text">
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="input-group input-group-sm date">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input class="form-control input-sm pull-right required" id="tgl_akhir" name="edate" placeholder="Tgl. Akhir" type="text">
                        </div>
                    </div>
                </div>
            </div>
            <div class='box-footer'>
                <button type='reset' class='btn btn-social btn-danger btn-sm'><i class='fa fa-times'></i> Batal</button>
                <button type='submit' class='btn btn-social btn-info btn-sm pull-right confirm'><i class='fa fa-check'></i>
                    Simpan</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $('#cid').change(function() {
            var cid = $(this).val();
            if (cid == 2) {
                $('#penerima').show();
                $('[name="kk_level[]"]').addClass('required');
            } else {
                $('#penerima').hide();
                $('[name="kk_level[]"]').removeClass('required');
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/program_bantuan/create.blade.php ENDPATH**/ ?>