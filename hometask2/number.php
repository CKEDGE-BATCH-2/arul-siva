<?php  
   echo "<table border ='3' style='border-collapse: collapse'>" ;  
   for ($row=1; $row <= 10; $row++) {   
       echo "<tr>";  
       for ($col=1; $col <= 10; $col++) {   
           $p = $col * $row;  
           echo "<td> $p </td>";  
       }  
       echo "</tr>";  
   }   
   echo "</table>"; 
?>  