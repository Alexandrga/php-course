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
<table>
    <?php for ($i=0; $i<count($list); $i++):?>
    
    <tr>
            
    
        <td> <?php echo $list[$i][0];?></td>
        <td><?php echo $list[$i][1];?></td>
        <td><?php echo $list[$i][2];?></td>
        <td><?php echo $list[$i][3];?></td>
        <td><?php echo $list[$i][4];endfor;?></td>
    </tr>
</table>
    
</form>
    

    
</html>

    


    
    
