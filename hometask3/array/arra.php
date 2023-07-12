

<h1>ARRAY</h1>
<?php
class asorts
{
    protected $a;
    
    public function __construct(array $asort)
     {
        $this->a = $asort;
     }
    public function alhsort()
     {
        $b = $this->a;
        sort($b);
       foreach($b as $x){

         
         echo $x;
       }
      }
}
$c = new asorts(array(11, -2, 4, 35, 0, 8, -9));
print_r($c->alhsort())."\n";
?>
