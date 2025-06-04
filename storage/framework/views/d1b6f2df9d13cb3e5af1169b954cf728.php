<?php echo $__env->make('admin.layouts.components.asset_datatables', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('admin.layouts.components.highchartjs', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<?php $__env->startSection('title'); ?>
    <h1>Statistik Kependudukan</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb'); ?>
    <li class="active">Statistik Kependudukan <?php echo e($dusun); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-4">
            <?php echo $__env->make('admin.statistik.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="col-md-8">
            <div class="box box-info">
                <div class="box-header with-border">
                    <a
                        href="<?php echo e(ci_route('statistik.' . strtolower($kategori) . '.' . $lap . '.dialog.cetak')); ?>"
                        class="btn btn-social bg-purple btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Cetak Laporan"
                        data-remote="false"
                        data-toggle="modal"
                        data-target="#modalBox"
                        data-title="Cetak Laporan"
                    >
                        <i class="fa fa-print "></i>Cetak
                    </a>
                    <a
                        href="<?php echo e(ci_route('statistik.' . strtolower($kategori) . '.' . $lap . '.dialog.unduh')); ?>"
                        class="btn btn-social bg-navy btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"
                        title="Unduh Laporan"
                        data-remote="false"
                        data-toggle="modal"
                        data-target="#modalBox"
                        data-title="Unduh Laporan"
                    >
                        <i class="fa fa-print "></i>Unduh
                    </a>
                    <a class="btn btn-social bg-orange btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block grafikType" title="Grafik Data" id="grafikType" onclick="grafikType();">
                        <i class="fa fa-bar-chart"></i>Grafik Data
                    </a>
                    <a class="btn btn-social btn-primary btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block pieType" title="Pie Data" id="pieType" onclick="pieType();">
                        <i class="fa fa-pie-chart"></i>Pie Data
                    </a>
                    <?php if((int) $lap == 13): ?>
                        <a href="<?php echo e(ci_route('statistik.rentang_umur')); ?>" class="btn btn-social bg-olive btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block" title="Rentang Umur">
                            <i class="fa fa-arrows-h"></i>Rentang Umur
                        </a>
                    <?php endif; ?>
                </div>
                <div class="box-body">
                    <h4 class="box-title text-center"><b><?php echo e($label); ?></b></h4>
                    <div id="chart" hidden="true"></div>
                </div>
                <hr class="batas">
                <div class="box-body">
                    <?php if($lap != 'kelas_sosial' && $lap != 'bdt'): ?>
                        <div class="row mepet">
                            <?php echo $__env->make('admin.layouts.components.wilayah', ['colDusun' => 'col-sm-3'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                        <hr class="batas">
                    <?php endif; ?>
                    <div class="table-responsive">
                        <table class="table table-bordered dataTable table-striped table-hover tabel-daftar" id="tabeldata">
                            <thead class="bg-gray color-palette">
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2"><?php echo e($judul_kelompok); ?></th>
                                    <th colspan="2">Jumlah</th>
                                    <th colspan="2">Laki-Laki</th>
                                    <th colspan="2">Perempuan</th>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th>Persen</th>
                                    <th>Total</th>
                                    <th>Persen</th>
                                    <th>Total</th>
                                    <th>Persen</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th></th>
                                    <th>JUMLAH</th>
                                    <th id="jml_total"></th>
                                    <th id="jml_persen"></th>
                                    <th id="jml_laki"></th>
                                    <th id="jml_laki_persen"></th>
                                    <th id="jml_perempuan"></th>
                                    <th id="jml_perempuan_persen"></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>BELUM MENGISI</th>
                                    <th id="blm_isi_total" class="text-right"></th>
                                    <th id="blm_isi_persen" class="text-right"></th>
                                    <th id="blm_isi_laki" class="text-right"></th>
                                    <th id="blm_isi_laki_persen" class="text-right"></th>
                                    <th id="blm_isi_perempuan" class="text-right"></th>
                                    <th id="blm_isi_perempuan_persen" class="text-right"></th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th>TOTAL</th>
                                    <th id="total_total" class="text-right"></th>
                                    <th id="total_persen" class="text-right"></th>
                                    <th id="total_laki" class="text-right"></th>
                                    <th id="total_laki_persen" class="text-right"></th>
                                    <th id="total_perempuan" class="text-right"></th>
                                    <th id="total_perempuan_persen" class="text-right"></th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
            var TableData = $('#tabeldata').DataTable({
                responsive: true,
                processing: true,
                serverSide: true,
                paging: false,
                searching: false,
                info: false,
                ajax: {
                    url: "<?php echo e(ci_route('statistik.penduduk.' . $lap . '.datatables')); ?>",
                    data: function(req) {
                        req.tahun = $('#tahun').val();
                        req.bulan = $('#bulan').val();
                        req.dusun = $('#dusun').val();
                        req.rw = $('#rw').val();
                        req.rt = $('#rt').val();
                        req.lap = '<?php echo e($lap); ?>';
                    }
                },
                columns: [{
                        data: null,
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
                        data: 'jumlah',
                        className: 'text-right',
                        name: 'jumlah',
                        searchable: false,
                        orderable: true,
                        orderData: [3]
                    },
                    {
                        data: 'persen',
                        name: 'persen',
                        searchable: false,
                        className: 'text-right',
                        orderable: true
                    },
                    {
                        data: 'laki',
                        name: 'laki',
                        searchable: false,
                        className: 'text-right',
                        orderable: true,
                        orderData: [5]
                    },
                    {
                        data: 'persen1',
                        name: 'persen1',
                        searchable: false,
                        className: 'text-right',
                        orderable: true
                    },
                    {
                        data: 'perempuan',
                        name: 'perempuan',
                        searchable: false,
                        className: 'text-right',
                        orderable: true,
                        orderData: [7]
                    },
                    {
                        data: 'persen2',
                        name: 'persen2',
                        searchable: false,
                        className: 'text-right',
                        orderable: true
                    },
                ],
                createdRow: function(row, data, dataIndex) {
                    if (data.nama == 'TOTAL' || data.nama == 'JUMLAH' || data.nama == 'BELUM MENGISI') {
                        $(row).addClass('no-sort');
                        $(row).hide();
                    }
                },
                drawCallback: function(settings) {
                    var api = this.api();
                    var PageInfo = api.page.info();
                    var counter = PageInfo.start;

                    api.column(0, {
                        page: 'current'
                    }).nodes().each(function(cell, i) {
                        var row = $(cell).closest('tr');
                        if (!row.hasClass('no-sort')) {
                            counter++;
                            $(cell).html(counter);
                        }
                    });
                },
                order: [],
                footerCallback: function(row, data, start, end, display) {
                    var dataJumlah = data.filter(r => r.nama === 'JUMLAH')[0];
                    var dataBelumIsi = data.filter(r => r.nama === 'BELUM MENGISI')[0];
                    var dataTotal = data.filter(r => r.nama === 'TOTAL')[0];
                    // console.log(dataJumlah, dataBelumIsi, dataTotal);

                    $('#jml_total').html(dataJumlah.jumlah);
                    $('#jml_persen').html(dataJumlah.persen);
                    $('#jml_laki').html(dataJumlah.laki);
                    $('#jml_laki_persen').html(dataJumlah.persen1);
                    $('#jml_perempuan').html(dataJumlah.perempuan);
                    $('#jml_perempuan_persen').html(dataJumlah.persen2);

                    $('#blm_isi_total').html(dataBelumIsi.jumlah);
                    $('#blm_isi_persen').html(dataBelumIsi.persen);
                    $('#blm_isi_laki').html(dataBelumIsi.laki);
                    $('#blm_isi_laki_persen').html(dataBelumIsi.persen1);
                    $('#blm_isi_perempuan').html(dataBelumIsi.perempuan);
                    $('#blm_isi_perempuan_persen').html(dataBelumIsi.persen2);

                    $('#total_total').html(dataTotal.jumlah);
                    $('#total_persen').html(dataTotal.persen);
                    $('#total_laki').html(dataTotal.laki);
                    $('#total_laki_persen').html(dataTotal.persen1);
                    $('#total_perempuan').html(dataTotal.perempuan);
                    $('#total_perempuan_persen').html(dataTotal.persen2);
                }
            });

            $('#tabeldata').on('order.dt', function() {
                var noSortRows = $('tr.no-sort').detach(); // Ambil baris no-sort dan lepas dari tabel
                $('tbody').append(noSortRows); // Tambahkan kembali baris no-sort di posisi awal
            });

            $('#tahun, #bulan, #dusun, #rw, #rt').change(function() {
                TableData.draw()
            })
        });

        var serverData = [];
        var chartType;
        $('#tabeldata').on('xhr.dt', function(e, settings, json) {
            serverData = json.data;
            if ($('#chart').find('.highcharts-container').length > 0) {
                if (chartType == 'column') {
                    grafikType();
                } else {
                    pieType();
                }
            }
        });

        var chart;

        function prepareChartData(data) {
            var categories = [];
            var seriesData = [];

            let ignoredNames = ['TOTAL', 'JUMLAH', 'BELUM MENGISI', 'PENERIMA'];
            <?php if($lap == 'bdt'): ?>
                ignoredNames = ['TOTAL', 'JUMLAH']
            <?php endif; ?>

            data.forEach(function(item, index) {
                var jumlah = $(item.jumlah).text();
                if (!ignoredNames.includes(item.nama) && item.jumlah != '-') {
                    jumlah = parseInt(jumlah);
                    categories.push(index + 1);
                    seriesData.push([item.nama.toUpperCase(), jumlah]);
                }
                console.log(jumlah);
            });

            return {
                categories: categories,
                seriesData: seriesData
            };
        }

        function grafikType() {
            var chartData = prepareChartData(serverData);
            console.log(chartData);

            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart',
                    defaultSeriesType: 'column'
                },
                title: 0,
                xAxis: {
                    title: {
                        text: '<?php echo e($stat); ?>'
                    },
                    categories: chartData.categories
                },
                yAxis: {
                    title: {
                        text: 'Jumlah Populasi'
                    }
                },
                legend: {
                    layout: 'vertical',
                    enabled: false
                },
                plotOptions: {
                    series: {
                        colorByPoint: true
                    },
                    column: {
                        pointPadding: 0,
                        borderWidth: 0
                    }
                },
                series: [{
                    shadow: 1,
                    border: 1,
                    data: chartData.seriesData
                }]
            });
            chartType = 'column';

            $('#chart').removeAttr('hidden');
        }

        function pieType() {
            var chartData = prepareChartData(serverData);

            chart = new Highcharts.Chart({
                chart: {
                    renderTo: 'chart',
                    plotBackgroundColor: null,
                    plotBorderWidth: null,
                    plotShadow: false
                },
                title: 0,
                plotOptions: {
                    index: {
                        allowPointSelect: true,
                        cursor: 'pointer',
                        dataLabels: {
                            enabled: true
                        },
                        showInLegend: true
                    }
                },
                legend: {
                    layout: 'vertical',
                    backgroundColor: '#FFFFFF',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -30,
                    y: 0,
                    floating: true,
                    shadow: true,
                    enabled: true
                },
                series: [{
                    type: 'pie',
                    name: 'Populasi',
                    data: chartData.seriesData
                }]
            });
            chartType = 'pie';

            $('#chart').removeAttr('hidden');
        }
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('admin.layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/statistik/index.blade.php ENDPATH**/ ?>