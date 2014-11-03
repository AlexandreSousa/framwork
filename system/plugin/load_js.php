<?php
if($js == 0){
    
    
}elseif($js == 1){

?>
<?php 
$path = "../system/js/";
$diretorio = dir($path);  
while($arquivo = $diretorio -> read()){ 
    
 
    
    if($arquivo == '..'){
        
        
    }elseif($arquivo == '.'){
        
         
    }else{ ?>

<script type="text/javascript" src="../system/js/<?php echo $arquivo; ?>"></script>
     <?php   
    }
    
} $diretorio -> close();
}