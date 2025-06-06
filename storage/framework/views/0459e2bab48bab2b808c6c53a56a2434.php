<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Inventaris</h3>
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <?php if($controller == 'laporan_inventaris'): ?>
                <li <?php echo e(jecho($tip, 1, 'class="active"')); ?>><a href="<?php echo e(site_url('laporan_inventaris')); ?>"><i class="fa fa-list"></i> Laporan Semua Asset</a></li>
                <li <?php echo e(jecho($tip, 2, 'class="active"')); ?>><a href="<?php echo e(site_url('laporan_inventaris/mutasi')); ?>"><i class="fa fa-list"></i> Laporan Asset Yang Dihapus</a></li>
            <?php else: ?>
                <li <?php echo e(jecho($tip, 1, 'class="active"')); ?>><a href="<?php echo e(site_url(str_replace('_mutasi', '', $controller))); ?>"><i class="fa fa-list"></i> Daftar Inventaris</a></li>
                <?php if($controller != 'inventaris_kontruksi'): ?>
                    <li <?php echo e(jecho($tip, 2, 'class="active"')); ?>><a href="<?php echo e(site_url(str_replace('_mutasi_mutasi', '_mutasi', $controller . '_mutasi'))); ?>"><i class="fa fa-share"></i> Daftar Mutasi</a></li>
                <?php endif; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>
<div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title">Kategori Inventaris</h3>
        <div class="box-tools">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body no-padding">
        <ul class="nav nav-pills nav-stacked">
            <li <?php echo in_array($controller, ['laporan_inventaris', 'laporan_inventaris_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('laporan_inventaris')); ?>"><i class="fa fa-tags"></i> Laporan Semua Asset</a></li>
            <li <?php echo in_array($controller, ['inventaris_tanah', 'inventaris_tanah_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_tanah')); ?>"><i class="fa fa-tags"></i> Tanah</a></li>
            <li <?php echo in_array($controller, ['inventaris_peralatan', 'inventaris_peralatan_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_peralatan')); ?>"><i class="fa fa-tags"></i> Peralatan Dan Mesin</a></li>
            <li <?php echo in_array($controller, ['inventaris_gedung', 'inventaris_gedung_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_gedung')); ?>"><i class="fa fa-tags"></i> Gedung dan Bangunan</a></li>
            <li <?php echo in_array($controller, ['inventaris_jalan', 'inventaris_jalan_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_jalan')); ?>"><i class="fa fa-tags"></i> Jalan, Irigasi, dan Jaringan</a></li>
            <li <?php echo in_array($controller, ['inventaris_asset', 'inventaris_asset_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_asset')); ?>"><i class="fa fa-tags"></i> Aset Tetap Lainnya</a></li>
            <li <?php echo in_array($controller, ['inventaris_kontruksi', 'inventaris_kontruksi_mutasi']) ? 'class="active"' : ''; ?>><a href="<?php echo e(site_url('inventaris_kontruksi')); ?>"><i class="fa fa-tags"></i> Konstruksi dalam pengerjaan</a></li>
        </ul>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/inventaris/menu.blade.php ENDPATH**/ ?>