<?php

require('./helpers/wilayah_indonesia_helper.php');

$level = "kecamatan";
$parent = $_POST['kabupaten'];

$kecamatan = getWilayah($level, $parent);

$kecamatan = json_decode($kecamatan, TRUE);

echo '<div class="form-group">
<label>Kecamatan</label>
<select class="form-control" name="kecamatan" id="kecamatan" onchange="get_desa()">
    <option value="">-- Pilih Kecamatan --</option>';
foreach ($kecamatan as $kec) {
    echo '<option value="' . $kec['kode_bps'] . '">' . $kec['nama_bps'] . '</option>';
}
echo '</select>
</div>';
