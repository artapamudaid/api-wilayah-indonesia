<?php

require('./helpers/constant.php');
require('./helpers/wilayah_indonesia_helper.php');

$tahun = YEAR;
$prov = $_POST['provinsi'];

$kabupaten = getKabupaten($tahun, $prov);

$kabupaten = json_decode($kabupaten, TRUE);

echo '<div class="form-group">
<label>Kabupaten/Kota</label>
<select class="form-control" name="kabupaten" id="kabupaten" onchange="get_kecamatan()">
    <option value="">-- Pilih Kabupaten/Kota --</option>';
foreach ($kabupaten as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
}
echo '</select>
</div>';
