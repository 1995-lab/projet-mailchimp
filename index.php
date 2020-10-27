<?php 
session_start();
// include "functions/signin_function.php";
$dbhost='localhost';
$dbname='mailchimp';
$dbuser='root';
$dbpwd='';
$db=new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
if(isset($_POST['ok']))
{
	$email=htmlspecialchars(trim($_POST['email']));
	$password=htmlspecialchars(trim($_POST['MDP']));
	$u=array(
		'email'=>$email,
		'password'=>$password
	);
	$sql="SELECT * FROM users WHERE email='$email' AND passwords='$password'";
	$req=$db->prepare($sql);
	$req->execute($u);
	$exist=$req->rowCount($sql);
	if($exist){
		$_SESSION['email']=$email;
		$_SESSION['idusers']=$idusers;
		header("location:home.php");
	}
		else{
		$error_user_not_found="<p style='color:red;'>l'adresse email ou le mot de passe est incorrect</p>";
	}
	
}


 ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>Accueil</title>
		<meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		
		<!-- Toggles CSS -->
		<link href="vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
		<link href="vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">
		
		<!-- Custom CSS -->
		<link href="dist/css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<!-- Preloader -->
		<div class="preloader-it">
			<div class="loader-pendulums"></div>
		</div>
		<!-- /Preloader -->
		
		<!-- HK Wrapper -->
		<div class="hk-wrapper">
			
			<!-- Main Content -->
			<div class="hk-pg-wrapper hk-auth-wrapper">
				<!-- <header class="d-flex justify-content-end align-items-center">
					<div class="btn-group btn-group-sm">
						<a href="#" class="btn btn-outline-secondary">Help</a>
						<a href="#" class="btn btn-outline-secondary">About Us</a>
					</div>
				</header> -->
				<div class="container-fluid">
					<div class="row">
						<div class="col-xl-12 pa-0">
							<div class="auth-form-wrap pt-xl-0 pt-70">
								<div class="auth-form w-xl-30 w-lg-55 w-sm-75 w-100">
									<a class="auth-brand text-center d-block mb-20" href="#">
										 <img class="brand-img" src="dist/img/defar-sci.png" alt="brand" style="width:150px;height:150px;" />
									</a>
									<form method="POST" action="">

										<p class="text-center mb-30"><i class="fa fa-user fa-4x"></i>.</p> 
										<div class="form-group">
											<input class="form-control" placeholder="Email" type="email" name="email">
										</div>
										<div class="form-group">
											<div class="input-group">
												<input class="form-control" placeholder="Password" type="password" name="MDP">
												<div class="input-group-append">
													<span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
												</div>
											</div>
										</div>
										
										<p class="error"><?php echo(isset($error_user_not_found))?$error_user_not_found:'' ;?></p>
										<input class="btn btn-danger btn-block" type="submit" name="ok" value="connexion" >
						<p class="text-center">Pas encore de compte? <a href="signin.php"><span style="color:red;">s'inscrire</span></a></p>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /Main Content -->
		
		</div>
		<!-- /HK Wrapper -->
		
		<!-- JavaScript -->
		
		<!-- jQuery -->
		<script src="vendors/jquery/dist/jquery.min.js"></script>
		
		<!-- Bootstrap Core JavaScript -->
		<script src="vendors/popper.js/dist/umd/popper.min.js"></script>
		<script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		
		<!-- Slimscroll JavaScript -->
		<script src="dist/js/jquery.slimscroll.js"></script>
	
		<!-- Fancy Dropdown JS -->
		<script src="dist/js/dropdown-bootstrap-extended.js"></script>
		
		<!-- FeatherIcons JavaScript -->
		<script src="dist/js/feather.min.js"></script>
		
		<!-- Init JavaScript -->
		<script src="dist/js/init.js"></script>
	</body>
</html>