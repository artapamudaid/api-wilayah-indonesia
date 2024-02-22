<?php
function getWilayah($level = null, $parent = null)
{
    $ch = curl_init();

    $url = "https://sig.bps.go.id/rest-bridging/getwilayah";

    $url .= "?level=$level";

    if (!empty($parent)) {
        $url .= "&parent=$parent";
    }

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $data = curl_exec($ch);

    curl_close($ch);

    return $data;
}
