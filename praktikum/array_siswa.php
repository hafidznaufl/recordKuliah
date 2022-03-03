<?php
$ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
$ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
$ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
$ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];

$ar_nilai = [$ns1, $ns2 , $ns3, $ns4];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Datatables CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <title>Array: Data</title>
  </head>
  <body>

    <div class="container-mt-5">
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<div class="page-header">
				<h1>
					Daftar Nilai Siswa
				</h1>
			</div class="table-responsive" style="border: 1px">
			<table class="table table-striped w-100" id="table">
				<thead>
        <tr>
          <th>NIM</th>
          <th>No</th>
          <th>UAS</th>
          <th>UTS</th>
          <th>Nilai Akhir</th>
          <th>Tugas</th>  
        </tr>
				</thead>
				<tbody>
				<?php
            $nomor = 1;
              foreach ($ar_nilai as $ns) {
                  $nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
                    ?>
                    <tr>
                        <td><?= $nomor ?></td>
                        <td><?= $ns['nim']; ?></td>
                        <td><?= $ns['uts']; ?></td>
                        <td><?= $ns['uas']; ?></td>
                        <td><?= $ns['tugas']; ?></td>
                        <td><?= number_format($nilai_akhir, 2, ",", "."); ?></td>
                    </tr>
                    <?php
                    $nomor++;
                    }
                    ?>
				</tbody>
			</table>
		</div>
		<div class="col-md-2">
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>