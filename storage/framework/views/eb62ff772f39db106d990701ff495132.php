<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>
        Daftar Inventaris Tanah
    </h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Daftar Inventaris Tanah</li>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <style type="text/css">
        .disabled {
            pointer-events: none;
            cursor: default;
        }
    </style>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.layouts.components.notifikasi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="row">
        <div class="col-sm-3">
            <?php echo $__env->make('admin.inventaris.menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-sm-9">
            <div class="box box-info">
                <div class="box-header with-border">
                    <?php if(can('u')): ?>
                        <a href="<?php echo e(ci_route('inventaris_tanah.form')); ?>" class="btn btn-social btn-success btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"><i class="fa fa-plus"></i> Tambah</a>
                    <?php endif; ?>
                    <a
                        href="<?php echo e(ci_route('inventaris_tanah/dialog/cetak')); ?>"
                        class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Cetak Konstruksi Dalam Pengerjaan"
                        data-remote="false"
                        data-toggle="modal"
                        data-target="#modalBox"
                        data-title="Cetak Konstruksi Dalam Pengerjaan"
                    ><i class="fa fa-print "></i> Cetak</a>
                    <a
                        href="<?php echo e(ci_route('inventaris_tanah/dialog/unduh')); ?>"
                        class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Unduh Konstruksi Dalam Pengerjaan"
                        data-remote="false"
                        data-toggle="modal"
                        data-target="#modalBox"
                        data-title="Unduh Konstruksi Dalam Pengerjaan"
                    ><i class="fa fa-download"></i> Unduh</a>
                </div>
                <div class="box-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="table-responsive">
                                        <table id="tabeldata" class="table table-bordered table-hover">
                                            <thead class="bg-gray">
                                                <tr>
                                                    <th class="text-center">No</th>
                                                    <th class="text-center">Aksi</th>
                                                    <th class="text-center">Nama Barang</th>
                                                    <th class="text-center">Kode Barang / Nomor Registrasi</th>
                                                    <th class="text-center">Luas (M<sup>2</sup>)</th>
                                                    <th class="text-center">Tahun Pengadaan</th>
                                                    <th class="text-center">Letak/Alamat</th>
                                                    <th class="text-center">Nomor Sertifikat</th>
                                                    <th class="text-center">Asal Usul</th>
                                                    <th class="text-center">Harga (Rp)</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                            <tfoot>
                                                <tr>
                                                    <th colspan="9" style="text-align:right">Total</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('admin.layouts.components.konfirmasi_hapus', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(ci_route('inventaris_tanah.datatables')); ?>"
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
                        data: 'nama_barang',
                        name: 'nama_barang'
                    },
                    {
                        data: 'kode_barang_register',
                        name: 'kode_barang'
                    },
                    {
                        data: 'luas',
                        name: 'luas',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'tahun_pengadaan',
                        name: 'tahun_pengadaan',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'letak',
                        name: 'letak',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'no_sertifikat',
                        name: 'no_sertifikat',
                        empty: '-',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'asal',
                        name: 'asal',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'harga',
                        name: 'harga',
                        searchable: true,
                        orderable: true
                    },
                ],
                order: [],
                footerCallback: function(row, data, start, end, display) {
                    var api = this.api();
                    for (var i = 9; i < api.columns().count(); i++) {
                        var columnData = api.column(i, {
                            page: 'current'
                        }).data();
                        var total = columnData.reduce(function(a, b) {
                            var a = isNaN(a) ? 0 : a;
                            var b = b.replace(/\./g, '');
                            return a + parseFloat(b);
                        }, 0);

                        total = isNaN(total) ? 0 : total;
                        total = total.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");

                        $(api.column(i).footer()).html(total);
                    }
                }
            });
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/inventaris/tanah/index.blade.php ENDPATH**/ ?>