<?php
function ciper($passenc) {
    $key =7;
    if (ctype_alpha($passenc)) {
        $cipher = ord($passenc);
        $proses_dec = ($cipher - $key) % 256;
        $hasil = chr($proses_dec);
        return $hasil;
    }
}

function decrypt($char) {
    $key =7;
    $hasil = "";
    $chars = str_split($char);
    foreach ($chars as $passenc) {
        $hasil.= ciper($passenc, $key);
    }
    return $hasil;
}
?>