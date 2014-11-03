<?php include('chk.php'); ?>
<?php require_once('../Connections/config.php'); ?>
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
$login = $_SESSION['MM_Username'];
mysql_select_db($database_config, $config);
$query_qr_login = "SELECT * FROM login WHERE login = '$login'";
$qr_login = mysql_query($query_qr_login, $config) or die(mysql_error());
$row_qr_login = mysql_fetch_assoc($qr_login);
$totalRows_qr_login = mysql_num_rows($qr_login);

$id_level   = $row_qr_login['id_level'];
$id_emp 	= $row_qr_login['id_emp'];
?>
<style>
    .demo-notice{
        background: none repeat scroll 0 0 #D75F07;
        color:#FFF;
        line-height:1em;
        text-align:center;
        font:12px "Trebuchet MS", Arial, Helvetica, sans-serif;
        font-variant:small-caps;
    }
</style>
<p class="demo-notice">Sistema Licenciado Para: SB</p>
<div style="background-color: #080808; height: 30px; margin-top: -10px; margin-bottom: 4px;">&nbsp;</div>