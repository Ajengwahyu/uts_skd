<?php
function cipher($text) {
    $key = 7;
    if (ctype_alpha($text)) {
        $nilai = ord(ctype_upper($text) ? 'A' : 'a');
        $plain = ord($text);
        $proses_enc = fmod($plain + $key - $nilai, 26);
        $hasil = chr($proses_enc + $nilai);
        return $hasil;
    }
}

function encrypt($char) {
    $key = 7;
    $out = "";
    $chars = str_split($char);
    foreach ($chars as $text) {
        $out.= cipher($text, $key);
    }
    return $out;
}

?>