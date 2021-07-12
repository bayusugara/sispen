<?php

function format_rupiah($angka)
{
    $rupiah = "Rp " . number_format($angka, 2, ',', '.');
    return $rupiah;
}

function format_tanggal($tanggal)
{
    $format = date('d F Y', strtotime($tanggal));
    return $format;
}
