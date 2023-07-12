<h1>Calculator</h1>
<?php
class cal {
private $x, $y;
public function __construct( $a, $b ) {
$this->x = $a;
$this->y = $b;
}
public function add() {
return $this->x + $this->y;
}
public function subtract() {
return $this->x - $this->y;
}
public function multiply() {
return $this->x * $this->y;
}
public function divide() {
return $this->x / $this->y;
}
}
$mycalc = new cal(15, 15); 
echo $mycalc-> add()."\n";
echo $mycalc-> multiply()."\n";
echo $mycalc-> subtract()."\n";
echo $mycalc-> divide()."\n";
?>
