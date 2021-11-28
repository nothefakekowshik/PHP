<!DOCTYPE html>
<html>
<body>

<?php
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    $msg="hello ra, your car is ".$this->model." and the car's color is ".$this->color."";
    return $msg;
  }
}

$myCar = new Car("black", "Volvo");
echo $myCar -> message();

echo nl2br("\n");
echo nl2br("\n");

$myCar1 = new Car("red", "Toyota");
echo $myCar1 -> message();
?>

</body>
</html>
