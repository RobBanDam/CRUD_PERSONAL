<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Twitter -->
	<meta name="twitter:site" content="@themepixels">
	<meta name="twitter:creator" content="@themepixels">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:title" content="Bracket">
	<meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="twitter:image" content="http://themepixels.me/bracket/img/bracket-social.png">

	<!-- Facebook -->
	<meta property="og:url" content="http://themepixels.me/bracket">
	<meta property="og:title" content="Bracket">
	<meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

	<meta property="og:image" content="http://themepixels.me/bracket/img/bracket-social.png">
	<meta property="og:image:secure_url" content="http://themepixels.me/bracket/img/bracket-social.png">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="1200">
	<meta property="og:image:height" content="600">

	<!-- Meta -->
	<meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
	<meta name="author" content="ThemePixels">


	<!-- vendor css -->
	<link href="../../public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="../../public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
	<link href="../../public/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
	<link href="../../public/lib/jquery-switchbutton/jquery.switchButton.css" rel="stylesheet">
	<link href="../../public/lib/datatables/jquery.dataTables.css" rel="stylesheet">
	<link rel="stylesheet" href="../../public/datatables/buttons.dataTables.min.css">
	<link rel="stylesheet" href="../../public/lib/select2/css/select2.min.css">

	<!-- Bracket CSS -->
	<link rel="stylesheet" href="../../public/css/bracket.css">

	<title>Mantenimiento de Producto</title>
</head>

<body>

	<?php require_once("../../mainleftpanel.php"); ?>
	<?php require_once("../../mainheadpanel.php"); ?>
	<?php require_once("../../mainrightpanel.php"); ?>

	<!-- ########## START: MAIN PANEL ########## -->
	<div class="br-mainpanel">
		<div class="br-pageheader pd-y-15 pd-l-20">
			<nav class="breadcrumb pd-0 mg-0 tx-12">
				<a class="breadcrumb-item" href="index.html">Mantenimiento</a>
				<span class="breadcrumb-item active">Producto</span>
			</nav>
		</div><!-- br-pageheader -->
		<div class="pd-x-20 pd-sm-x-30 pd-t-20 pd-sm-t-30">
			<h4 class="tx-gray-800 mg-b-5">Producto</h4>
			<p class="mg-b-0">Desde esta ventana podrá dar mantenimiento a los productos.</p>
		</div>

		<div class="br-pagebody">
			<div class="br-section-wrapper">
				<h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Mantenimiento de Producto</h6>
				<button id="btnnuevo" class="btn btn-outline-primary btn-block mg-b-10">Nuevo Registro</button>

				<div class="table-wrapper">
					<table id="producto_data" class="table display responsive nowrap">
						<thead>
							<tr>
								<th class="wd-15p">Categoría</th>
								<th class="wd-15p">Nombre</th>
								<th class="wd-15p">Descripción</th>
								<th class="wd-15p">Cantidad</th>
								<th class="wd-15p"></th>
								<th class="wd-20p"></th>
							</tr>
						</thead>
						<tbody>

						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!-- br-mainpanel -->
	<!-- ########## END: MAIN PANEL ########## -->

	<?php require_once("../../view/MntProducto/modalmantenimiento.php"); ?>

	<script src="../../public/lib/jquery/jquery.js"></script>
	<script src="../../public/lib/popper.js/popper.js"></script>
	<script src="../../public/lib/bootstrap/bootstrap.js"></script>
	<script src="../../public/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
	<script src="../../public/lib/moment/moment.js"></script>
	<script src="../../public/lib/jquery-ui/jquery-ui.js"></script>
	<script src="../../public/lib/jquery-switchbutton/jquery.switchButton.js"></script>
	<script src="../../public/lib/peity/jquery.peity.js"></script>
	<script src="../../public/js/bracket.js"></script>

	<script src="../../public/lib/datatables/jquery.dataTables.js"></script>
	<script src="../../public/lib/datatables-responsive/dataTables.responsive.js"></script>

	<script src="../../public/datatables/dataTables.buttons.min.js"></script>
	<script src="../../public/datatables/buttons.html5.min.js"></script>
	<script src="../../public/datatables/buttons.colVis.min.js"></script>
	<script src="../../public/datatables/jszip.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script src="../../public/lib/select2/js/select2.full.min.js"></script>
	<script src="../../public/lib/select2/js/select2.min.js"></script>

	<script src="../../view/MntProducto/mntproducto.js"></script>
</body>

</html>