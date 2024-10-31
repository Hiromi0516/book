<?php
class Fare{

    #Properties
    private $age;
    private $distance;
    private $fare;

    #Setters
    public function setAge($new_age)
    {
        $this->age = $new_age;
    }

    public function setDistance($new_distance)
    {
        $this->distance = $new_distance;
    }

    public function setFare()
    {
        if($this->distance <= 4){
            $this->fare = 8;
        }elseif($this->distance > 4){
            $this->fare = $this->distance + 4; // 5 + 4 = 9
        }

        //Apply the 20% discount
        if($this->age >= 60){
            $this->fare *= 0.8; // $this->fare = $this->fare * 0.8;
        }
    }

    #Getters
    public function getAge()
    {
        return $this->age;
    }

    public function getDistance()
    {
        return $this->distance;
    }

    public function getFare()
    {
        return $this->fare;
    }
}
?>
