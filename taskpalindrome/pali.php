<?php

 $a="killer";
 
 if (strrev($a) == $a) {
    echo "It is a palindrome";
 }
  else{
    echo "It not a palindrome <br>";
  }
?>

<?php

 $arr =array ("arul","redder","madam");
 foreach($arr as $val){

if(strrev($val) == $val){
    echo "it is a palindrome <br>";
}
else{
    echo "it is  not a palindrome <br>";
}

 }


?>