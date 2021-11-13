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
            <center>
                <h2>Jadwal Pengajian Rutin</h2>
                <h3>Masjid Darussalam Sleman</h3>
                <h3>Bulan <?= date_indo($bulan) ?> <?= date('Y') ?> </h3>
                <p>________________________________________________________________________</p>
                <div class="col">
                    <table border="1" class="items" width="100%" style="font-size: 9pt; border-collapse: collapse; " cellpadding="8">
                        <thead class="table-dark">
                            <td>No</td>
                            <td>Hari</td>
                            <td>Waktu</td>
                            <td>Tanggal</td>
                            <td>Tema Kajian</td>
                            <td>Tempat</td>
                            <th>Keterangan</th>
                            <!-- <th>Action</th> -->
                        </thead>
                        <tbody>
                            <?php foreach ($pengajian as $p) : ?>
                                <tr>
                                    <td><?= array_search($p, $pengajian) + 1 ?></td>
                                    <td><?= $p['hari']; ?></td>
                                    <td><?= $p['waktu']; ?></td>
                                    <td><?= $p['tanggal']; ?></td>
                                    <td><?= $p['tema_kajian']; ?></td>
                                    <td><?= $p['tempat']; ?></td>
                                    <td><?= $p['keterangan'] ?></td>
                                <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>