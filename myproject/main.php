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
    <tr>
        <td><?php echo $list[0][0]?></td>
        <td><?php echo $list[0][1]?></td>
        <td><?php echo $list[0][2]?></td>
        <td><?php echo $list[0][3]?></td>
        <td><?php echo $list[0][4]?></td>
    </tr>
    <tr><?php for ($i=1; $i<count($list); $i++):
            
        // for ($k=0; $k<count($row); $k++):?>
        <td> <?php echo $list[$i][0];?></td>
        <td><?php echo $list[$i][1];?></td>
        <td><?php echo $list[$i][2];?></td>
        <td><?php echo $list[$i][3];?></td>
        <td><?php echo $list[$i][4];endfor;?></td>
    </tr>
</table>
    
</form>
    

    
</html>

    


    
    
