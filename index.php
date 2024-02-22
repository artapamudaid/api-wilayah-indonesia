<?php

require_once('provinsi.php');

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
        <h1>Wilayah Indonesia (API BPS)</h1>
        <form>
            <div class="form-group">
                <label>Provinsi</label>
                <select class="form-control" name="provinsi" id="provinsi" onchange="get_kabupaten()">
                    <option value="">-- Pilih Kabupaten/Kota --</option>
                    <?php foreach ($provinsi as $prov) { ?>
                        <option value="<?= $prov['kode_bps'] ?>"><?= $prov['nama_bps'] ?></option>
                    <?php  } ?>
                </select>
            </div>
            <div id="div_kabupaten">
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <select class="form-control" name="kabupaten" id="kabupaten">
                        <option value="">-- Pilih Kabupaten/Kota --</option>
                    </select>
                </div>
            </div>
            <div id="div_kecamatan">
                <div class="form-group">
                    <label>Kecamatan</label>
                    <select class="form-control" name="kecamatan" id="kecamatan">
                        <option value="">-- Pilih Kecamatan --</option>
                    </select>
                </div>
            </div>
            <div id="div_desa">
                <div class="form-group">
                    <label>Desa/kelurahan</label>
                    <select class="form-control" name="desa" id="desa">
                        <option value="">-- Pilih Desa/Kelurahan --</option>
                    </select>
                </div>
            </div>
        </form>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <script>
        function get_kabupaten() {
            var provinsi = $('#provinsi').val();

            $.ajax({
                url: 'kabupaten.php',
                type: 'POST',
                data: {
                    'provinsi': provinsi,
                },
                success: function(msg) {
                    $("#div_kabupaten").html(msg);
                    get_kecamatan();
                    get_desa();
                },
                error: function(msg) {
                    alert('msg');
                }

            });
        }

        function get_kecamatan() {
            var kabupaten = $('#kabupaten').val();

            $.ajax({
                url: 'kecamatan.php',
                type: 'POST',
                data: {
                    'kabupaten': kabupaten
                },
                success: function(msg) {
                    $("#div_kecamatan").html(msg);
                    get_desa();
                },
                error: function(msg) {
                    alert('msg');
                }

            });
        }

        function get_desa() {
            var kecamatan = $('#kecamatan').val();

            $.ajax({
                url: 'desa.php',
                type: 'POST',
                data: {
                    'kecamatan': kecamatan,
                },
                success: function(msg) {
                    $("#div_desa").html(msg);
                },
                error: function(msg) {
                    alert('msg');
                }

            });
        }
    </script>
</body>

</html>