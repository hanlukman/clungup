<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Laporan</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped">
                    <tr>
                        <td><b>Kode Booking</b></td>
                        <td><?= $booking['booking_code']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Nama</b></td>
                        <td><?= $booking['name']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Email</b></td>
                        <td><?= $booking['email']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Kontak</b></td>
                        <td><?= $booking['contact']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Alamat</b></td>
                        <td><?= $booking['alamat']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Jumlah Rombongan</b></td>
                        <td><?= $booking['quantity']; ?> orang</td>
                    </tr>
                    <tr>
                        <td><b>Total Pembayaran</b></td>
                        <td><?= number_format($booking['payment'], 2, ',', '.'); ?></td>
                    </tr>
                    <tr>
                        <td><b>Tanggal Pesan</b></td>
                        <td><?= date('d M Y', strtotime($booking['booking_date_start'])); ?></td>
                    </tr>
                    <tr>
                        <td><b>Jam</b></td>
                        <td><?= $booking['time_of_arrival']; ?></td>
                    </tr>
                    <tr>
                        <td><b>Sesi</b></td>
                        <td><?= $booking['sesi']; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>