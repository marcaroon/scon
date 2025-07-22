<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<aside class="space-y-5 sidebar">
  <form action="<?= site_url() ?>" role="form" class="relative">
    <i class="fas fa-search absolute top-1/2 left-0 transform -translate-y-1/2 z-10 px-3 text-gray-500"></i>
    <input type="text" name="cari" class="form-input px-10 w-full h-12 bg-white relative inline-block" placeholder="Cari...">
  </form>
  <div class="shadow rounded-lg bg-white overflow-hidden mt-4">
  <div class="box-header px-4 pt-4">
    <h3 class="box-title text-lg font-semibold flex items-center gap-2">
      <i class="fa fa-map-marker-alt text-red-500"></i> Letak Geografis
    </h3>
  </div>
  <div class="box-body px-4 pb-4">
  <p><strong>Batas Wilayah</strong>
  <table class="text-sm mb-4">
    <tr>
      <td class="pr-2">Sebelah utara</td>
      <td class="pr-2">:</td>
      <td>Desa Kwangsen</td>
          </tr>
    <tr>
      <td>Sebelah selatan</td>
      <td>:</td>
      <td>Desa Bulak</td>
        </tr>
    <tr>
      <td>Sebelah timur</td>
      <td>:</td>
      <td>Desa Jiwan</td>
         </tr>
    <tr>
      <td>Sebelah barat</td>
      <td>:</td>
      <td>Desa Kincang Wetan</td>
      </tr>
  </table>

  <p><strong>Koordinat</strong><br> -7.6254133° LS, 111.4821764° BT</p>
  <div style="position: relative; height: 200px; border-radius: 4px; margin-top: 10px; overflow: hidden;">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3954.5354831972413!2d111.47960147500335!3d-7.625413292390126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zN8KwMzcnMzEuNSJTIDExMcKwMjgnNTUuOCJF!5e0!3m2!1sen!2sid!4v1749368750039!5m2!1sen!2sid"
    width="100%"
    height="100%"
    style="border:0;"
    allowfullscreen=""
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  <a href="https://www.google.com/maps?q=-7.6254133,111.4821764" target="_blank"
     style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; z-index: 10;"
     title="Klik untuk buka di Google Maps">
    <span class="sr-only">Buka di Google Maps</span>
  </a>
</div>
</div>

</div>

<!-- Tambahkan hanya sekali, di bagian paling bawah sebelum </body> atau sekali di sidebar -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    var map = L.map('mapid', {
      scrollWheelZoom: false,
      dragging: true,
      zoomControl: false,
      attributionControl: false
    }).setView([-7.6254133, 111.4821764], 14);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);
    L.marker([-7.6254133, 111.4821764]).addTo(map)
      .bindPopup('Desa Sukolilo')
      .openPopup();
  });
</script>

  <?php if ($w_cos): ?>
    <?php foreach($w_cos as $widget) : ?>
      <?php
        $judul_widget = [
          'judul_widget' => str_replace('Desa', ucwords($this->setting->sebutan_desa), strip_tags($widget['judul']))
        ];
      ?>
      <div class="shadow rounded-lg bg-white overflow-hidden">
      <?php if ($widget["jenis_widget"] == 1): ?>
        <?php $this->load->view("{$folder_themes}/widgets/{$widget['isi']}", $judul_widget) ?>
      <?php elseif($widget['jenis_widget'] == 2) : ?>
        <?php $this->load->view("../../{$widget['isi']}", $judul_widget) ?>
      <?php else : ?>
          <div class="box-header">
            <h3 class="box-title"><?= strip_tags($widget['judul']) ?></h3>
          </div>
          <div class="box-body">
              <?= htmlspecialchars_decode(html_entity_decode($widget['isi']), ENT_QUOTES) ?>
          </div>
      <?php endif ?>
      </div>
    <?php endforeach ?>
  <?php endif ?>
</aside>