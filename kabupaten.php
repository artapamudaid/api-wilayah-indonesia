<?php

require('./helpers/wilayah_indonesia_helper.php');

$level = "kabupaten";
$parent = $_POST['provinsi'];

$kabupaten = getWilayah($level, $parent);

$kabupaten = json_decode($kabupaten, TRUE);

echo '<div class="form-group">
<label>Kabupaten/Kota</label>
<select class="form-control" name="kabupaten" id="kabupaten" onchange="get_kecamatan()">
    <option value="">-- Pilih Kabupaten/Kota --</option>';
foreach ($kabupaten as $kab) {
    echo '<option value="' . $kab['kode_bps'] . '">' . $kab['nama_bps'] . '</option>';
}
echo '</select>
</div>';
