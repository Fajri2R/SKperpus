<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title_pdf; ?></title>
    <meta name="author" content="Perpustakaan SMK Muhammadiyah Kota Jambi">
    <meta name="keywords" content="laporan, data, dompdf">
    <style>
        #table {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #table td,
        #table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #table tr:hover {
            background-color: #ddd;
        }

        #table th {
            padding-top: 10px;
            padding-bottom: 10px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

        #kop {
            margin: 0 auto;
            background-color: #fff;
        }

        #k1 {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

        #k2 {
            text-align: center;
            line-height: 5px;
        }

        .tengah {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
        }
    </style>
</head>

<body>
    <div id="kop">
        <table width="100%" id="k1">
            <tr>
                <td style="width: 20%;"><img src="<?= base_url('assets/img/') ?>logosmkmm.jpg" class="tengah"></td>
                <td id="k2">
                    <h2 style="font-size: 16px;">MAJELIS PENDIDIKAN DASAR DAN MENENGAH</h2>
                    <h2 style="font-size: 16px;">PIMPINAN WILAYAH MUHAMMADIYAH PROVINSI JAMBI</h2>
                    <h2 style="font-size: 25px;">SMK MUHAMMADIYAH KOTA JAMBI</h2>
                    <h2 style="font-size: 25px;">Akreditasi B</h2>
                    <p style="font-size: 14px;">Jln. Guntur No.02 RT.08 Kel. Kasang Kec. Jambi Timur (Blakang Rs. Budi Graha).</p>
                    <p style="font-size: 14px;">Email: smk_muh1kotajambi@yahoo.co.id Telp. 0741-3601540</p>
                </td>
            </tr>
        </table>
    </div>
    <div style="text-align:center">
        <h3>
            LAPORAN <?= $laporan; ?>
            <br>
            PERPUSTAKAAN SMK MUHAMMADIYAH KOTA JAMBI
        </h3>
    </div>
    <table id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>ID Peminjaman</th>
                <th>ID & Nama Peminjam</th>
                <th>Buku</th>
                <th>Tanggal Pinjam / Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($datapeminjaman as $row) {
                $tgl_kembali = new DateTime($row->tgl_kembali);
                $tgl_sekarang = new DateTime();
                $selisih = $tgl_sekarang->diff($tgl_kembali)->format("%a");
            ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row->id_peminjaman; ?></td>
                    <td>[<?= $row->id_anggota; ?>] <?= $row->name; ?></td>
                    <td>[<?= $row->nomor_induk; ?>] <?= $row->judul_buku; ?></td>
                    <td><?= shortdate_indo($row->tgl_pinjam) ?> / <br> <?= shortdate_indo($row->tgl_kembali) ?></td>
                    <td>
                        <?php
                        if ($tgl_kembali >= $tgl_sekarang or $selisih == 0) {
                            echo "<span class='badge badge-info'>Belum di Kembalikan</span>";
                        } else {
                            echo "Telat <br><b style = 'color:red;'>" . $selisih . "</b> hari, atau sejumlah <br>" . rp($selisih * 500);
                        }
                        ?>
                    </td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
    <div style="float: left;">
        <table width="100%">
            <tr>
                <p> <b> Keterangan: </b>
                    <br>Denda perhari yaitu, Rp. 500,-
                </p>
            </tr>
        </table>
    </div>
    <br><br><br>
    <div style="float: right;">
        <table width="100%">
            <tr>
                <p>Jambi, <?= mediumdate_indo(date('Y-m-d')) ?>
                    <br><br>
                    Mengetahui,
                    <br>
                    Kepala Sekolah
                    <br><br><br><br>
                    (..................................)
                </p>
            </tr>
        </table>
    </div>
</body>

</html>