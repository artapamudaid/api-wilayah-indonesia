<?php
require('./helpers/constant.php');
require('./helpers/wilayah_indonesia_helper.php');

$tahun = YEAR;

$prov = $_POST['provinsi'];
$kab = $_POST['kabupaten'];
$kec = $_POST['kecamatan'];

$desa = getDesa($tahun, $prov, $kab, $kec);

$desa = json_decode($desa, TRUE);

echo '<div class="form-group">
<label>Desa/Kelurahan</label>
<select class="form-control" name="desa" id="desa">
    <option value="">-- Pilih Desa/Kelurahan --</option>';
foreach ($desa as $key => $value) {
    echo '<option value="' . $key . '">' . $value . '</option>';
}
echo '</select>
</div>';
