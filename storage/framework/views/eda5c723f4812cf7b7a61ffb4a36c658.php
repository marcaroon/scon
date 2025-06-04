<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>
        Daftar Permohonan Surat
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Daftar Permohonan Surat</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="box box-info">
        <?php echo form_open(null, 'id="mainform" name="mainform"'); ?>

        <div class="box-body">
            <div class="row mepet">
                <div class="col-sm-3">
                    <select class="form-control input-sm select2" id="status" name="status">
                        <option value="">Pilih Status</option>
                        <?php $__currentLoopData = $list_status_permohonan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($id); ?>"><?php echo e($value); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
            <hr class="batas">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="tabeldata">
                    <thead>
                        <tr>
                            <th class="padat">NO</th>
                            <th class="aksi">AKSI</th>
                            <th>NO ANTREAN</th>
                            <th>NIK</th>
                            <th>NAMA PENDUDUK</th>
                            <th>NO HP AKTIF</th>
                            <th>JENIS SURAT</th>
                            <th>TANGGAL KIRIM</th>
                        </tr>
                    </thead>
                </table>
            </div>
            </form>
        </div>
    </div>

    <?php echo $__env->make('admin.layouts.components.konfirmasi_hapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(ci_route('permohonan_surat_admin.datatables')); ?>",
                    data: function(req) {
                        req.status = $('#status').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'aksi',
                        class: 'aksi',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'no_antrian',
                        name: 'no_antrian',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'penduduk.nik',
                        name: 'penduduk.nik',
                        class: 'padat',
                        searchable: true,
                        orderable: true,
                        defaultContent: ''
                    },
                    {
                        data: 'penduduk.nama',
                        name: 'penduduk.nama',
                        searchable: true,
                        orderable: true,
                        defaultContent: ''
                    },
                    {
                        data: 'no_hp_aktif',
                        name: 'no_hp_aktif',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'surat.nama',
                        name: 'surat.nama',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'created_at',
                        name: 'created_at',
                        searchable: true,
                        orderable: true
                    },
                ],
                order: [
                    [7, 'desc']
                ],
                pageLength: 25
            });

            $('#status').on('select2:select', function(e) {
                TableData.draw();
            });

            if (ubah == 0) {
                TableData.column(1).visible(false);
            }
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/permohonan_surat/index.blade.php ENDPATH**/ ?>