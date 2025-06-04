<div class="tab-pane" id="tte">
    <div class="box-body">
        <?php if(!$kades): ?>
            <div class="callout callout-danger">
                <p>Pengaturan modul TTE hanya bisa aktif jika user <strong>Kepala
                        <?php echo e(setting('sebutan_desa')); ?></strong> sudah dibuat dan aktif.</p>
            </div>
        <?php endif; ?>
        <div class="form-group">
            <?php if($tte_demo): ?>
                <div class="alert alert-warning alert-dismissible">
                    <h4><i class="icon fa fa-warning"></i> Info Penting!</h4>
                    Modul TTE ini hanya sebuah simulasi untuk persiapan penerapan TTE di
                    <?= config_item('nama_aplikasi') ?> dan hanya berlaku
                    untuk surat yang menggunakan TinyMCE
                </div>
            <?php endif; ?> <label>Aktifkan Modul TTE</label>
            <div class="input-group col-xs-12 col-sm-8">
                <div class="btn-group col-xs-12 col-sm-8" data-toggle="buttons" style="padding: 0px;">
                    <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= (setting('tte') == '1') ? 'active' : ''; ?> <?= (!$kades) ? 'disabled' : ''; ?>">
                        <input
                            type="radio"
                            name="tte"
                            class="form-check-input"
                            value="1"
                            autocomplete="off"
                            <?= (setting('tte') == '1') ? 'checked' : ''; ?>
                            <?= (!$kades) ? 'disabled' : ''; ?>
                        >Ya</label>
                    <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= (setting('tte') == '0') ? 'active' : ''; ?> <?= (!$kades) ? 'disabled' : ''; ?>">
                        <input
                            type="radio"
                            name="tte"
                            class="form-check-input"
                            value="0"
                            autocomplete="off"
                            <?= (setting('tte') == '0') ? 'checked' : ''; ?>
                            <?= (!$kades) ? 'disabled' : ''; ?>
                        >Tidak
                    </label>
                </div>
            </div>
        </div>
        <div id="modul-tte">
            <div class="form-group">
                <label>URL API Server TTE</label>
                <input type="text" name="tte_api" class="form-control input-sm" value="<?php echo e($tte_demo ? site_url() : setting('tte_api')); ?>" <?= (!$kades) ? 'disabled' : ''; ?>>
            </div>
            <div class="form-group">
                <label>Username Login TTE</label>
                <input type="text" name="tte_username" class="form-control input-sm" value="<?php echo e(setting('tte_username')); ?>" <?= (!$kades) ? 'disabled' : ''; ?>>
            </div>
            <div class="form-group">
                <label>Password Login TTE</label>
                <input type="password" name="tte_password" class="form-control input-sm" <?= (!$kades) ? 'disabled' : ''; ?>>
                <?php if(setting('tte_password')): ?>
                    <p id="info-tte-password" class="help-block small text-red">Kosongkan jika tidak ingin mengubah
                        Password Login TTE.</p>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label>Visual TTE</label>
                <div class="input-group col-xs-12 col-sm-8">
                    <div class="btn-group col-xs-12 col-sm-8" data-toggle="buttons" style="padding: 0px;">
                        <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= (setting('visual_tte') == '1') ? 'active' : ''; ?> <?= (!$kades) ? 'disabled' : ''; ?>">
                            <input type="radio" name="visual_tte" class="form-check-input" value="1" autocomplete="off" <?= (setting('visual_tte') == '1') ? 'checked' : ''; ?>>
                            Ya</label>
                        <label class="btn btn-info btn-flat btn-sm col-xs-6 col-sm-5 col-lg-3 form-check-label <?= (setting('visual_tte') == '0') ? 'active' : ''; ?> <?= (!$kades) ? 'disabled' : ''; ?>">
                            <input type="radio" name="visual_tte" class="form-check-input" value="0" autocomplete="off" <?= (setting('visual_tte') == '0') ? 'checked' : ''; ?>>
                            Tidak
                        </label>
                    </div>
                </div>
            </div>
            <div id="visual-tte-form">
                <div class="form-group">
                    <label>Gambar Visual</label>
                    <div class="input-group input-group-sm  col-md-2 col-sm-12">
                        <img class="img-responsive" src="<?php echo e(setting('visual_tte_gambar') == null ? asset('assets/images/bsre.png?v', false) : base_url(setting('visual_tte_gambar'))); ?>" alt="Kantor Desa">
                    </div>
                    <div class="input-group input-group-sm  col-md-2 col-sm-12">
                        <input type="text" class="form-control" id="file_path">
                        <input type="file" id="file" class="hidden" name="visual_tte_gambar" accept=".jpg,.jpeg,.png">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-info btn-flat" id="file_browser"><i class="fa fa-search"></i></button>
                        </span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group" style="margin-top: 3px; margin-bottom: 3px">
                            <span class="input-group-addon input-sm">Tinggi</span>
                            <input type="number" class="form-control input-sm required" name="visual_tte_height" style="text-align:right;" value="<?php echo e(setting('visual_tte_height')); ?>">
                            <span class="input-group-addon input-sm">px</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="input-group" style="margin-top: 3px; margin-bottom: 3px">
                            <span class="input-group-addon input-sm">Lebar</span>
                            <input type="number" class="form-control input-sm required" name="visual_tte_weight" style="text-align:right;" value="<?php echo e(setting('visual_tte_weight')); ?>">
                            <span class="input-group-addon input-sm">px</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/pengaturan_surat/partials/pengaturan_tte.blade.php ENDPATH**/ ?>