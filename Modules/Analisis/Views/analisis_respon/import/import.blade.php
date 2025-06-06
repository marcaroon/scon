<script>
    $('#file_browser2').click(function(e) {
        e.preventDefault();
        $('#file2').click();
    });

    $('#file2').change(function() {
        $('#file_path2').val($(this).val());
    });

    $('#file_path2').click(function() {
        $('#file_browser2').click();
    });
</script>
<form id="validasi" action="{{ $form_action }}" method="POST" enctype="multipart/form-data">
    <div class='modal-body'>
        <div class="form-group">
            <label for="file" class="control-label">File Master Analisis :</label>
            <div class="input-group input-group-sm">
                <input type="text" class="form-control" id="file_path2">
                <input type="file" class="hidden" id="file2" name="respon" accept=".xls">
                <span class="input-group-btn">
                    <button type="button" class="btn btn-info" id="file_browser2"><i class="fa fa-search"></i> Browse</button>
                </span>
            </div>
            <p class="help-block small">Pastikan format berkas telah sesuai. Format yang dibutuhkan dapat diunduh menggunakan tombol Unduh.</p>
        </div>
    </div>
    <div class="modal-footer">
        <button type="reset" class="btn btn-social btn-danger btn-sm pull-left"><i class='fa fa-times'></i> Batal</button>
        <button type="submit" class="btn btn-social btn-info btn-sm" id="ok"><i class='fa fa-check'></i> Simpan</button>
    </div>
    </div>
</form>
