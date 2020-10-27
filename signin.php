<?php 
session_start();
$dbhost='localhost';
$dbname='mailchimp';
$dbuser='root';
$dbpwd='';
// include "functions/main_function.php";
$db=new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbuser,$dbpwd,array(PDO::MYSQL_ATTR_INIT_COMMAND=>'SET NAMES utf8',PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
    if(isset($_POST['prenom']) AND isset($_POST['nom']) AND isset($_POST['email']) AND isset($_POST['MDP'])){
    $r=array($_POST['prenom'],$_POST['nom'],$_POST['email'],$_POST['MDP']);
    $sql='INSERT INTO users(prenom,nom,email,passwords) VALUES(?,?,?,?)';
    $req=$db->prepare($sql);
    $req->execute($r);
   if($req) {
    header('location:index.php');
    }
 }
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Brunette I Signup</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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
           <!--  <header class="d-flex justify-content-end align-items-center">
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
                                    <h1 class="display-4 mb-10 text-center">S'inscrire</h1>
                                    
                                    <div class="form-row">
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="votre prénom" value="" type="text" name="prenom">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <input class="form-control" placeholder="votre nom" value="" type="text" name="nom">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Email" type="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="mot de passe" type="password" name="MDP">
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <input class="form-control" placeholder="Confirmer votre mot de passe" type="password" name="MDP">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <button class="btn btn-danger btn-block" type="submit" name="ok">Register</button>
                                    <p class="text-center">dejà un compte? <a href="index.php"><span style="color:red;">se connecter</span></a></p>
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

    <!-- Toggles JavaScript -->
    <script src="vendors/jquery-toggles/toggles.min.js"></script>
    <script src="dist/js/toggle-data.js"></script>

    <!-- Init JavaScript -->
    <script src="dist/js/init.js"></script>
</body>

</html>