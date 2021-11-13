<!doctype html>
<html lang="en">

<head>

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> -->

    <title>Cetak</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 10pt;
        }


        table.items {
            border: 0.1mm solid #000000;
        }

        td {
            vertical-align: top;
        }

        .items td {
            border-left: 0.1mm solid #000000;
            border-right: 0.1mm solid #000000;
        }

        table thead td {
            background-color: #EEEEEE;
            text-align: center;
            border: 0.1mm solid #000000;
            font-variant: small-caps;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-auto" style="text-align: center;">
                <h2>Laporan Rekapitulasi Kas Masjid</h2>
                <h3>Masjid Darussalam Sleman</h3>
                <h4>Periode : <?= date_indo($tgl1) ?> s/d <?= date_indo($tgl2) ?></h4>
                <p>________________________________________________________________________</p>

            </div>
            <div class="col">
                <table border="1" class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
                    <thead class="table-dark">
                        <td>No</td>
                        <td>Tanggal</td>
                        <td>Keterangan</td>
                        <td>Pemasukan</td>
                        <td>Pengeluaran</td>
                        <td>Lazis</td>
                        <!-- <th>Action</th> -->
                    </thead>
                    <tbody>
                        <?php foreach ($rekapperiode as $t) : ?>
                            <tr>
                                <td><?= array_search($t, $rekapperiode) + 1 ?></td>
                                <td><?= $t['tgl_km']; ?></td>
                                <td><?= $t['keterangan']; ?></td>
                                <td align="right"><?= "Rp " . rupiah($t['masuk']); ?></td>
                                <td align="right"><?= "Rp " . rupiah($t['keluar']); ?></td>
                                <td><?= $t['lazis']; ?></td>

                            <?php endforeach ?>
                    </tbody>
                    <tr>
                        <td colspan="5">Total Pemasukan</td>
                        <td colspan="0" align="right"><?= "Rp " . rupiah($totmasuk['tot_masuk']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Total Pengeluaran</td>
                        <td colspan="0" align="right"><?= "Rp " . rupiah($totkeluar['tot_keluar']); ?></td>
                    </tr>
                    <tr>
                        <td colspan="5">Saldo Kas Masjid</td>
                        <td colspan="0" align="right"><?= "Rp " . rupiah($total['saldo_periode']); ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>