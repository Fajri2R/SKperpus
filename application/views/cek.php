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
            padding: 20px;
        }

        #k1 {
            border-bottom: 5px solid #000;
            padding: 2px;
        }

        #k2 {
            text-align: center;
            line-height: 5px;
        }

        body {
            size: 8.26in 11.69in;
            margin: .5in .5in .5in .5in;
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
        <table width="100%" id="k1" border="1">
            <tr>
                <td><img src="<?= base_url('assets/img/') ?>logosmkmm.jpg" width="145px" class="tengah"></td>
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
        <h3> Laporan PDF Toko Kita</h3>
    </div>
    <table id="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th>Harga Jual</th>
                <th>Terjual</th>
                <th>Tanggal Transaksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td>Kacang Goreng</td>
                <td>Rp5.000,-</td>
                <td>1</td>
                <td>25 Oktober 2020, 17:01:03</td>
            </tr>
            <tr>
                <td scope="row">2</td>
                <td>Kopi Hitam</td>
                <td>Rp5.000,-</td>
                <td>1</td>
                <td>25 Oktober 2020, 16:01:03</td>
            </tr>
            <tr>
                <td scope="row">3</td>
                <td>Gorengan Bakwan</td>
                <td>Rp3.000,-</td>
                <td>3</td>
                <td>25 Oktober 2020, 15:01:02</td>
            </tr>
            <tr>
                <td scope="row">4</td>
                <td>Nasi uduk</td>
                <td>Rp14.000,-</td>
                <td>2</td>
                <td>25 Oktober 2020, 14:04:03</td>
            </tr>
        </tbody>
    </table>
</body>

</html>