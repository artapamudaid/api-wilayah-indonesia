<?php

require('./helpers/wilayah_indonesia_helper.php');

$level = "provinsi";
$parent = null;

$provinsi = getWilayah($level, $parent);

$provinsi = json_decode($provinsi, TRUE);
