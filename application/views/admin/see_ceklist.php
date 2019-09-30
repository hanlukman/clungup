<?= $header ?> 
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Cek List</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">

                <i class="fa fa-table"></i> For Cek List</div>
            <div class="card-body">
                <div class="table-responsive">

                    <div class="row">
                        <div class="col-md-12">
                        <div>
                            <a href="<?= base_url("admin/cek_list/adddata") ?>" class="btn btn-danger">Tambah data</a>
                        </div>
                        <br><br>
                        <?php


                        echo "<table id='dataTable' class='table table-striped table-bordered dt-responsive table-hover'>
			                        <thead>
			                        <tr>
				                    <td>No.</td>
				                    <td>Kode Booking</td>
				                    <td>Proses</td>
			                        </tr>
			                        </thead>
			                        <tbody>";
                        $i=1;
                        foreach ($datanya->result() as $row) {
                            echo"<tr>
				                    <td>".$i."</td>
				                    <td>".$row->kd_book."</td>
				                    
				                        <td>
					                    <a href=".site_url("/admin/cek_list/edit")."/".$row->kd_book." class='btn btn-primary'>"."<span class='fa fa-pencil-square-o'></span>"."</a>					                    
				                    </td>
			                        </tr>";
                            $i++;
                        }
                        echo "</tbody></table>";

                        ?>
                        </div>
                    </div>
                    <?php

                    ?>
                </div>
            </div>
        </div>
        </div>
        </div>


<?= $footer ?>