<!DOCTYPE html>
<html>

<body>
	<table width="400px"
     border ="1px" 
     cellspacing="0px"
     >
		<?php
        echo "<h1>CHESS<H1>";
for($row=1; $row<=8 ;$row++){
    echo "<tr>";
    for($col=1; $col<=8; $col++){
        $total=$row + $col;
        if($total %2==0){
  echo "<td height=40px width= 20 bgcolor=white </td> ";
        }
        else{
   echo "<td height=40px width=30px bgcolor=black </td>  ";

        }
    }
 echo "</tr>";
}
		
		?>
	</table>
</body>

</html>
