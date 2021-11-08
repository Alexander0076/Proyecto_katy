<?php session_start();
require_once 'conexion/conexion.php';
if (isset($_SESSION['user'])) {
    ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <?php
    require_once 'templates/head.php'
    ?>
	</head>
	<body>
        <header>
        <?php
    require_once 'templates/header.php'
    ?>
        </header>
	<section>

		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Table #05</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-responsive-xl">
						  <thead>
						    <tr>
						    	<th>&nbsp;</th>
						    	<th>Email</th>
						      <th>Username</th>
						      <th>Status</th>
						      <th>&nbsp;</th>
						    </tr>
						  </thead>
						  <tbody>
                          <?php
                if (!empty($_SESSION["add_carro"])) {
                    $total = 0;
                    foreach ($_SESSION["add_carro"] as $keys => $values) {
                ?>
						    <tr class="alert" role="alert">
						    	<td>
						    		<label class="checkbox-wrap checkbox-primary">
										  <input type="checkbox" checked>
										  <span class="checkmark"></span>
										</label>
						    	</td>
						      <td class="d-flex align-items-center">
						      	<div class="img" style="background-image: url(images/person_1.jpg);"></div>
						      	<div class="pl-3 email">
						      		<span>markotto@email.com</span>
						      		<span>Added: 01/03/2020</span>
						      	</div>
						      </td>
						      <td>Markotto89</td>
						      <td class="status"><span class="active">Active</span></td>
						      <td>
						      	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				            	<span aria-hidden="true"><i class="fa fa-close"></i></span>
				          	</button>
				        	</td>
						    </tr>
						    
                            <?php
                }}else {}
                ?>
                            
						  </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>

    <?php
    require_once 'templates/footer.php';
    ?>

	</body>
</html>

<?php
} else {
  header("location:index.php");
}
?>