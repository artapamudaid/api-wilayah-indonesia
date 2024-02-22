<?php

require('./helpers/constant.php');
require('./helpers/wilayah_indonesia_helper.php');

$tahun = YEAR;

$provinsi = getProvinsi($tahun);

$provinsi = json_decode($provinsi, TRUE);
