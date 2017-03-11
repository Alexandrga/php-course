<?php



$file=fopen("file.txt", "r");

while (($buffer=fgets($file, 4096)) != false) {
    $row = explode(";", $buffer);
    $list[]= $row;
}



?>


<html>
    
<form>
<input type="text" name="parametr" >
<input type="submit">
<table border="1">
    <?php for ($i=0; $i<count($list); $i++)
        for ($j=0; $j<count($row); $j++):?>
    <tr>
    
        <td> <?php echo $list[$i][$j]; endfor;?></td>
  
    </tr>
</table>
    
</form>
    

    
</html>