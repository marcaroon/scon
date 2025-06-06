<div class="tab-pane active" id="header">
    <div class="box-body">
        <div class="form-group">
            <label>Tinggi Header Surat</label>
            <div class="input-group">
                <input
                    type="number"
                    name="tinggi_header"
                    class="form-control input-sm required"
                    min="0"
                    max="100"
                    step="0.01"
                    value="<?php echo e(setting('tinggi_header')); ?>"
                />
                <span class="input-group-addon input-sm">cm</span>
            </div>
        </div>
        <div class="form-group">
            <label>Template Header Surat</label>
            <textarea name="header_surat" class="form-control input-sm editor required" data-filemanager='<?= json_encode(['external_filemanager_path'=> base_url('assets/kelola_file/'), 'filemanager_title' => 'Responsive Filemanager', 'filemanager_access_key' => $session->fm_key]) ?>' data-salintemplate="header-footer"
                data-jenis="header"><?php echo e(setting('header_surat')); ?></textarea>
        </div>
    </div>
</div>
<?php /**PATH D:\xampp\htdocs\scon\resources\views/admin/pengaturan_surat/partials/pengaturan_header.blade.php ENDPATH**/ ?>