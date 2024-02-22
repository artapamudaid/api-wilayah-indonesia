<?php

require('./helpers/wilayah_indonesia_helper.php');

$level = "desa";
$parent = $_POST['kecamatan'];

$desa = getWilayah($level, $parent);

$desa = json_decode($desa, TRUE);

echo '<div class="form-group">
<label>Desa/Kelurahan</label>
<select class="form-control" name="desa" id="desa">
    <option value="">-- Pilih Desa/Kelurahan --</option>';
foreach ($desa as $des) {
    echo '<option value="' . $des['kode_bps'] . '">' . $des['nama_bps'] . '</option>';
}
echo '</select>
</div>';
