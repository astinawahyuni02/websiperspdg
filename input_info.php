<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplikasi Sipers Padang</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/datepicker3.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span></button>
				<a class="navbar-brand" href="#"><span>Sipers</span>Padang</a>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="images/sapi.jpeg" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name"></div>
				<div class="profile-usertitle-name">Admin</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
		<ul class="nav menu">
        <li><a href="index.php"><em class="fa fa-calendar">&nbsp;</em> Data Peternakan</a></li>
			<li><a href="data_toko.php"><em class="fa fa-calendar">&nbsp;</em> Data Toko</a></li>
			<li><a href="info.php"><em class="fa fa-calendar">&nbsp;</em> Info</a></li>
			<li><a href="profile.php"><em class="fa fa-calendar">&nbsp;</em> Profile</a></li>
		</ul>
	</div><!--/.sidebar-->
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Data Info</li>
			</ol>
		</div><!--/.row-->

	<div class="container-fluid" style="margin-top: 10px">
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Input Tabel Data Info</div> 
        <div class="card-body">

        <form action="" method="post" >
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Judul Info</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="JudulInfo" value="<?= $data['judul_info']?>" required="">
    		</div>
  		</div>
		<div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Deskripsi</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="Deskripsi" value="<?= $data['deskripsi']?>" required="">
    		</div>		
		</div>	
        <div class="form-group row">
    		<label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal</label>
    		<div class="col-sm-8">
      			<input type="text" class="form-control" name="Tanggal" value="<?= $data['tanggal']?>" required="">
    		</div>		
		</div>
		

			<div class="form-group row">
    		<label class="col-sm-2 col-form-label"></label>
    		<div class="col-sm-8">
      			<input type="submit" name="submit" value="submit" class="btn btn-primary">
    		</div>
		</div>
	</form>

	<?php
	if(isset($_POST['submit']))
	{
		include 'koneksi.php';
		$ambil=mysqli_query($koneksi,"INSERT INTO tb_info (judul_info,deskripsi,tanggal) 
        VALUES(
            '$_POST[judul_info]',
            '$_POST[deskripsi]',
            '$_POST[tanggal]')"
		);
		if($ambil)
		{
			header('location:/info.php');//redirect
            echo "<script>alert('Data berhasil disimpan')</script>";
		}
	}
	?>
	        </div>
	      </div>
	    </div>

		<div class="row">		
		<div class="col-sm-12">
			<p class="back-link">WEBSITE SIPERS PADANG</a></p>
		</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	  

<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/chart.min.js"></script>
	<script src="js/chart-data.js"></script>
	<script src="js/easypiechart.js"></script>
	<script src="js/easypiechart-data.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script>
	
</body>
</html>
