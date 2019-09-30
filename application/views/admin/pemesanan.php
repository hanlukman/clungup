<?= $header ?> 
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Home</a>
        </li>
        <li class="breadcrumb-item active">Pemesanan</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Pemesanan</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Kode Booking</th>
                  <th>Name</th>                  
                  <th>CP</th>
                  <th>Qty</th>
                  <th>Payment</th>
                  <th>Tgl. Pesan</th>
                  <th>Tgl. Datang</th>
                  <th>Jam Datang</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Kode Booking</th>
                  <th>Name</th>                  
                  <th>CP</th>
                  <th>Qty</th>
                  <th>Payment</th>
                  <th>Tgl. Pesan</th>
                  <th>Tgl. Datang</th>
                  <th>Jam Datang</th>
                  <th>Keterangan</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
              <tbody>
                <?php foreach ($pemesanan as $p): ?>
                  <tr>
                    <td><?= $p->booking_code ?></td>
                    <td><?= $p->name ?></td>                    
                    <td><?= $p->contact ?><br><?=$p->email?></td>
                    <td><?= $p->quantity ?></td>
                    <td><?= "Rp. ".number_format($p->payment,0,'-','.').",-" ?></td>
                    <td><?= format_tgl($p->booking_date) ?></td>
                    <td><?= format_tgl($p->booking_date_start) ?></td>
                    <td><?= $p->time_of_arrival ?></td>
                    <td>
                      <?php                        
                        $dayplus2 =  date('Y-m-d', strtotime($p->booking_date."+02 days"));
                        // now                       
                       $now = date("Y-m-d");

                       if (($dayplus2 <= $now) && ($p->status == "Belum Bayar") ) {?>
                         
                       <div style="color:#ff0000;">Waktu pembayaran habis</div>

                       <?php
                       } else{
                        echo "-";
                       }

                      ?>
                    </td>
                    <td><?= $p->status ?></td>
                    <td><a href="<?= base_url("admin/pemesanan/confirmed/$p->booking_code") ?>"><button class="btn btn-info">Konfirmasi</button></a>&nbsp
                        <a href="<?= base_url("admin/pemesanan/cancelled/$p->booking_code") ?>"><button class="btn btn-danger">Batal</button>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
<?= $footer ?>

<?php
function format_tgl($tanggal) {
  $bulan = array('Bulan', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'Novermber', 'Desember');

  $cal = explode("-",$tanggal);
  $tgl = $cal[2];
  $bln = $cal[1];
  $thn = $cal[0];

  for ($i=0; $i < 13; $i++) { 
    if ($bln==$i) {
      $bln=$bulan[$i];
    }
  }

  echo "$tgl $bln $thn";
}
?>