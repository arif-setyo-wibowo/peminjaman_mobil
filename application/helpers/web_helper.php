<?php

function rupiah($inp) {
    $result = "Rp " . number_format($inp, 0, ',', '.');
    return $result;
}
