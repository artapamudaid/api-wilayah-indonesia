<?php

require('./helpers/constant.php');
require('./helpers/wilayah_indonesia_helper.php');

$tahun = YEAR;

$prov = $_POST['provinsi'];
$kab = $_POST['kabupaten'];

$kecamatan = getKecamatan($tahun, $prov, $kab);

$kecamatan = json_decode($kecamatan, TRUE);

echo '<div class="form-group">
<label>Kecamatan</label>
<select class="form-control" name="kecamatan" id="kecamatan" onchange="get_desa()">
    <option value="">-- Pilih Kecamatan --</option>';
foreach ($kecamatan as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
}
echo '</select>
</div>';
