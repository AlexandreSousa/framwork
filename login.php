<?php require_once('Connections/config.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['usuario'])) {
  $loginUsername=$_POST['usuario'];
  $password=$_POST['senha'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login.php?error=error";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_config, $config);
  
  $LoginRS__query=sprintf("SELECT login, senha FROM login WHERE login=%s AND senha=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $config) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<script type="text/javascript" src="system/js/jquery-1.7.2.js"></script>
<script type="text/javascript" src="system/bootstrap/js/bootstrap.min.js"></script>


<link href="system/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="system/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css" />

<link href="system/css/font-awesome.css" rel="stylesheet" type="text/css" />

  <style type="text/css">
<!--
.corpo {
	height: auto;
	width: auto;
	padding-right: 400px;
	padding-left: 400px;
	padding-top: 250px;
}
.login{
		border:solid 1p#999999;
		height:250px;
		}
-->
  </style>

  <div class="corpo">
  
  <div style="height:250px; width:250px;" >
  <?php
  $error = $_GET['error'];
  if($error == 'error'){
  ?>
  <div class="alert alert-danger" role="alert">Usuário ou Senha esta Errado</div>
  <?php
  }
  ?>
  
<form method="POST" name="login" action="<?php echo $loginFormAction; ?>">
<div class="input-group margin-bottom-sm">
  <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
  <input class="form-control" type="text" name="usuario" id="usuario" placeholder="Email address">
</div>
<br />
<div class="input-group">
  <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
  <input class="form-control" type="password" name="senha" id="senha" placeholder="Password">
</div>
<br />
<br />
<input type="submit"  class="btn bg-primary" value="Entrar" />
  </form>
  </div>
  </div>