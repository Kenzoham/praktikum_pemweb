<?php
class buah {
    public $name;
    protected $color;
    private $berat;

    // public function
    function set_name($n){
        return $this->name = $n;
    }
    // contoh protected function
    public function set_color($c){
        return $this->color = $c;
    }
    // contoh private function
    public function set_berat($b){
        return $this->berat = $b;
    }
}
$mango = new buah();
echo $mango ->set_name('Mangga');
echo "<br />";
echo $mango->set_berat('300kg');
echo "<br />";
echo $mango->set_color('Hijau');
?>