<?php 
class PizzaQueue {

    protected $orders = [];

    function setOrders(array $orders) {

        foreach($orders as [$name,$count]) {

            for($i = 0; $i<$count; $i++) {
                $pizza = new stdClass();
                $pizza->name = $name;
                $this->orders[] = $pizza;
            }
        }
    }
    function getCount() {
        // echo var_dump($this->orders);

        return count($this->orders);
    }
}
$pizzaQueue =new PizzaQueue();
$pizzaQueue->setOrders( [['Calzone',1], ['Frutti di Mare,',0], ['Tonno',3]] );
echo $pizzaQueue-> getCount();
 ?>