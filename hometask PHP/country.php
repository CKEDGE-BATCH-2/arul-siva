<?php

$countrys = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels","Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava","Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin","Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm","United     Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "CzechRepublic"=>"Prague","Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" =>"Vienna", "Poland"=>"Warsaw");
asort($countrys);

  foreach($countrys as $int1 => $int2){
    echo "The capital of $int1 is $int2 <br>";
  }
?>                                                                                                                                                                                                                                                        