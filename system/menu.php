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

mysql_select_db($database_config, $config);
$query_qr_menu = "SELECT * FROM menu WHERE id_level = '$id_level'";
$qr_menu = mysql_query($query_qr_menu, $config) or die(mysql_error());
$row_qr_menu = mysql_fetch_assoc($qr_menu);
$totalRows_qr_menu = mysql_num_rows($qr_menu);
?>
<div class="btn-group">
<a href="index.php" class="btn btn-default dropdown-toggle"><i class="fa fa-home fa-fw"></i>&nbsp;Inicio</a>
</div>

<?php do { ?>
  <div class="btn-group">
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
      <i class="<?php echo $row_qr_menu['icon']; ?>"></i>&nbsp; <?php echo $row_qr_menu['nome']; ?><span class="caret"></span>
    </button>
  
      <?php
	  
        $idm = $row_qr_menu['id'];
        
        mysql_select_db($database_config, $config);
        $query_qr_menu_sub = "SELECT * FROM menu_sub WHERE id_menu = '$idm'";
        $qr_menu_sub = mysql_query($query_qr_menu_sub, $config) or die(mysql_error());
        $row_qr_menu_sub = mysql_fetch_assoc($qr_menu_sub);
        $totalRows_qr_menu_sub = mysql_num_rows($qr_menu_sub);
        
          if($totalRows_qr_menu_sub == '0'){
			  
			  }else{
        ?> 
        
           <ul class="dropdown-menu" role="menu">
	  <?php do { ?> 
          
         <li><a href="?pg=<?php echo $row_qr_menu_sub['link']; ?>"><i class="<?php echo $row_qr_menu_sub['icone']; ?>"></i>&nbsp; <?php echo $row_qr_menu_sub['nome']; ?></a></li>  
        
      <?php } while ($row_qr_menu_sub = mysql_fetch_assoc($qr_menu_sub)); ?>
          </ul>
          <?php
          }
         ?> 
   
  </div>
  <?php } while ($row_qr_menu = mysql_fetch_assoc($qr_menu)); ?>
<?php
mysql_free_result($qr_menu);

mysql_free_result($qr_menu_sub);
?>
<br>