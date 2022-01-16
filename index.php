<?php

abstract class Vehicles
{
    //стартовая ф-ия движения выбранной техники
    protected function start()
    {   
        echo ('Движется');
        echo $this->name;
        echo '<br>';
        echo  (' характеристика: '.$this->ability);
        echo '<br>';
    }

    //ф-ия вывода спец хар-к
    protected function startSpec()
    {   
        echo  (' способность: '.$this->spec);
        echo '<br>';
    }

    //ф-ия вывода салона
    protected function visual()
    {   
        echo (' салон: '.$this->interior);
        echo '<br>';
    }
}
/*--------------------------------------*/



class Tank extends Vehicles 
{
    protected $name = ' Танк.';
    protected $ability = ' вертит башней.';
    protected $spec = ' выстрел орудием';

    //какие ф-ии использует
    public function go()
    {
        $this->start();
        $this->startSpec();
    }
}

class Car extends Vehicles
{
    protected $name = ' Легковой автомобиль.';
    protected $ability = ' использует закись азота.';
    protected $spec = ' звуковой сигнал и включение дворников.';
    protected $interior = ' кожаный.';

    //какие ф-ии использует
    public function go()
    {
        $this->start();
        $this->startSpec();
        $this->visual();
    }
}
class Bulldozer extends Vehicles
{
    protected $name = ' Бульдозер.';
    protected $ability = ' управление ковшом.';
    protected $interior = ' тканевый.';

    //какие ф-ии использует
    public function go()
    {
        $this->start();
        $this->visual();
    }
}
///
function test(string $veh) {
    $vehicle = new $veh();
    $vehicle->go(); 
  }
///
  


print_r (test('Car') ) ;
echo '<br><br>';
print_r (test('Tank') );
echo '<br><br>';
print_r (test('Bulldozer') );
?>