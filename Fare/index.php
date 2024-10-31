<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</head>
  <body>
    <h1>Fare Activity</h1>
   
 

     <form action="" method="POST">
       
            <input type="number" name="age"  placeholder="age" min="10" max="80"><br>
            <input type="number" name="distance" placeholder="Distance(km)" min="1"><br>
            <button type="submit" name="btn_compute">Conpute</button>
            
     </form>

     
     </body>
</html>

<?php
    include "fare.php";

    if(isset($_POST['btn_compute'])){
        $fare = new Fare;

        $fare->setAge($_POST['age']);
        $fare->setDistance($_POST['distance']);
        $fare->setFare();

        echo "Age: " . $fare->getAge() . " years old <br>";
        echo "Distance: " . $fare->getDistance() . " km <br>";
        echo "Fare: " . $fare->getFare();
    }
?>