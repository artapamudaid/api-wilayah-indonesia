<?php

require('./helpers/wilayah_indonesia_helper.php');

function prov($param = null, $key = null)
{
    $level = "provinsi";
    $parent = $param;

    $provinsi = getWilayah($level, $parent);

    $provinsi = json_decode($provinsi, TRUE);

    $prov = null;
    foreach ($provinsi as $data) {

        if ($data['kode_bps'] == $key) {
            $prov = $data['nama_bps'];
        }
    }

    return $prov;
}

function kab($param = null, $key = null)
{
    $level = "kabupaten";
    $parent = $param;

    $kabupaten = getWilayah($level, $parent);

    $kabupaten = json_decode($kabupaten, TRUE);

    $kab = null;
    foreach ($kabupaten as $data) {

        if ($data['kode_bps'] == $key) {
            $kab = $data['nama_bps'];
        }
    }

    return $kab;
}

function kec($param = null, $key = null)
{
    $level = "kecamatan";
    $parent = $param;

    $kecamatan = getWilayah($level, $parent);

    $kecamatan = json_decode($kecamatan, TRUE);

    $kec = null;
    foreach ($kecamatan as $data) {

        if ($data['kode_bps'] == $key) {
            $kec = $data['nama_bps'];
        }
    }

    return $kec;
}

function des($param = null, $key = null)
{
    $level = "desa";
    $parent = $param;

    $desa = getWilayah($level, $parent);

    $desa = json_decode($desa, TRUE);

    $des = null;
    foreach ($desa as $data) {

        if ($data['kode_bps'] == $key) {
            $des = $data['nama_bps'];
        }
    }

    return $des;
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Data Wilayah Indonesia (API BPS)</title>
</head>

<body>

    <section class="content-wrapper">
        <h1>Wilayah Terpilih</h1>
        <table>
            <tr>
                <th>Provinsi</th>
                <th>:</th>
                <td><?= prov(NULL, $_POST['provinsi']) ?></td>
            </tr>
            <tr>
                <th>Kabupaten/Kota</th>
                <th>:</th>
                <td><?= kab($_POST['provinsi'], $_POST['kabupaten']) ?></td>
            </tr>
            <tr>
                <th>Kecamatan</th>
                <th>:</th>
                <td><?= kec($_POST['kabupaten'], $_POST['kecamatan']) ?></td>
            </tr>
            <tr>
                <th>Desa</th>
                <th>:</th>
                <td><?= des($_POST['kecamatan'], $_POST['desa']) ?></td>
            </tr>
        </table>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>