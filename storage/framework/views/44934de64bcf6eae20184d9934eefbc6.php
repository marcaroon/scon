<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="box box-info">
    <div class="box-header with-border">
        <a
            href="<?php echo e(ci_route('bumindes_penduduk_induk/dialog/cetak')); ?>"
            class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
            title="Cetak Buku Induk Penduduk"
            data-remote="false"
            data-toggle="modal"
            data-target="#modalBox"
            data-title="Cetak Buku Induk Penduduk"
        ><i class="fa fa-print "></i> Cetak</a>
        <a
            href="<?php echo e(ci_route('bumindes_penduduk_induk/dialog/unduh')); ?>"
            class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
            title="Unduh Buku Induk Penduduk"
            data-remote="false"
            data-toggle="modal"
            data-target="#modalBox"
            data-title="Unduh Buku Induk Penduduk"
        ><i class="fa fa-download"></i> Unduh</a>
    </div>
    <div class="box-body">
        <div class="row mepet">
            <div class="col-sm-2">
                <select id="tahun" class="form-control input-sm select2">
                    <option value="">Pilih Tahun</option>
                    <?php $__currentLoopData = $tahun; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?= ($value == date('Y')) ? 'selected' : ''; ?> value="<?php echo e($value); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <div class="col-sm-2">
                <select id="bulan" class="form-control input-sm select2">
                    <option value="">Pilih Bulan</option>
                    <?php $__currentLoopData = bulan(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option <?= ($index == date('m')) ? 'selected' : ''; ?> value="<?php echo e($index); ?>"><?php echo e($value); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>
        <hr class="batas">
        <div class="table-responsive">
            <table class="table table-bordered table-hover tabel-daftar" id="tabeldata">
                <thead class="bg-gray color-palette">
                    <tr>
                        <th rowspan="2">Nomor Urut</th>
                        <th rowspan="2" style="width: 5px;">Nama Lengkap / Panggilan</th>
                        <th rowspan="2">Jenis Kelamin</th>
                        <th rowspan="2">Status Perkawinan</th>
                        <th colspan="2">Tempat & Tanggal Lahir</th>
                        <th rowspan="2">Agama</th>
                        <th rowspan="2">Pendidikan Terakhir</th>
                        <th rowspan="2">Pekerjaan</th>
                        <th rowspan="2">Dapat Membaca Huruf</th>
                        <th rowspan="2">Kewarganegaraan</th>
                        <th rowspan="2">Alamat Lengkap</th>
                        <th rowspan="2">Kedudukan Dlm Keluarga</th>
                        <th rowspan="2">NIK</th>
                        <th rowspan="2">No. KK</th>
                        <th rowspan="2">Ket</th>
                    </tr>
                    <tr>
                        <th>Tempat Lahir</th>
                        <th width="50px">Tgl</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        $(document).ready(function() {
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                ajax: {
                    url: "<?php echo e(ci_route('bumindes_penduduk_induk.datatables')); ?>",
                    data: function(req) {
                        req.tahun = $('#tahun').val();
                        req.bulan = $('#bulan').val();
                    }
                },
                columns: [{
                        data: 'DT_RowIndex',
                        class: 'padat',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'nama',
                        name: 'nama',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'sex',
                        name: 'sex',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'status_kawin',
                        name: 'status_kawin',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'tempatlahir',
                        name: 'tempatlahir',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'tanggallahir',
                        name: 'tanggallahir',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'agama',
                        name: 'agama',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'pendidikan',
                        name: 'pendidikan',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'pekerjaan.nama',
                        name: 'pekerjaan.nama',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'bahasa',
                        name: 'bahasa',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'warganegara',
                        name: 'warganegara',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'alamat_wilayah',
                        name: 'alamat_wilayah',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'kk_level',
                        name: 'kk_level',
                        searchable: false,
                        orderable: false
                    },
                    {
                        data: 'nik',
                        name: 'nik',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'kk',
                        name: 'keluarga.no_kk',
                        searchable: true,
                        orderable: true
                    },
                    {
                        data: 'ket',
                        name: 'ket',
                        searchable: false,
                        orderable: false
                    }
                ],
                order: []
            });

            $('#tahun').change(function() {
                TableData.draw()
            })

            $('#bulan').change(function() {
                TableData.draw()
            })
        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/bumindes/penduduk/induk/index.blade.php ENDPATH**/ ?>