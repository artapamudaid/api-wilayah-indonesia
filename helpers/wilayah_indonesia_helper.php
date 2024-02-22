<?php
function getProvinsi($tahun = null)
{
    $ch = curl_init();

    $url = "https://sipedas.pertanian.go.id/api/wilayah/list_pro?thn=" . $tahun;

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

function getKabupaten($tahun = null, $prov = null)
{
    $ch = curl_init();

    $url = "https://sipedas.pertanian.go.id/api/wilayah/list_kab?thn=" . $tahun . "&lvl=11&pro=" . $prov;

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

function getKecamatan($tahun = null, $prov = null, $kab = null)
{
    $ch = curl_init();

    $url = "https://sipedas.pertanian.go.id/api/wilayah/list_kec?thn=" . $tahun . "&lvl=12&pro=" . $prov . "&kab=" .  $kab;

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}

function getDesa($tahun = null, $prov = null, $kab = null, $kec = null)
{
    $ch = curl_init();

    $url = "https://sipedas.pertanian.go.id/api/wilayah/list_des?thn=" . $tahun . "&lvl=13&pro=" . $prov . "&kab=" . $kab . "&kec=" . $kec;

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}
