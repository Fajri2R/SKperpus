<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


function rp($angka)
{
    $hasil_rupiah = "Rp. " . number_format($angka, 0, ',', '.') . ',-';
    return $hasil_rupiah;
}
