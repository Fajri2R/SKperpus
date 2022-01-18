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
            padding: 6px;
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
            text-align: center;
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

        th>.nwrap,
        td>.nwrap {
            width: auto;
            min-width: 0;
            max-width: 200px;
            display: inline-block;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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
                <th>
                    <div class="nwrap">No.</div>
                </th>
                <th>
                    <div class="nwrap">Nomor Induk</div>
                </th>
                <th>
                    <div class="">Tanggal Terima</div>
                </th>
                <th>
                    <div class="nwrap">Judul Buku</div>
                </th>
                <th>
                    <div class="nwrap">Pengarang</div>
                </th>
                <th>
                    <div class="nwrap">Penerbit</div>
                </th>
                <th>
                    <div class="">Tahun Terbit</div>
                </th>
                <th>
                    <div class="nwrap">Jumlah</div>
                </th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            foreach ($databuku as $row) { ?>
                <tr>
                    <td style="text-align: center;"><?= $no++ ?></td>
                    <td><?= $row->nomor_induk ?></td>
                    <td><?= slashdate_indo($row->tgl_terima) ?></td>
                    <td><?= $row->judul_buku ?></td>
                    <td><?= $row->nama_pengarang ?></td>
                    <td><?= $row->nama_penerbit ?></td>
                    <td><?= $row->tahun_terbit ?></td>
                    <td><?= $row->jumlah ?></td>
                </tr>
            <?php }
            ?>
        </tbody>
    </table>
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