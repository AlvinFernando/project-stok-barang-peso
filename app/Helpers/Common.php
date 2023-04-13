<?php

function showDate($carbon, $format = "d F Y"){
    return $carbon->translatedFormat($format);
}


?>
