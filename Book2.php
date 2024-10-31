<?php
class Book{
       private $title; // propeerty

       //Setter
     //  public function setTitle($title)
      // {
      //    $this->title = $title;

      // }

       #use Constractor

       public function __construct($title)
       {
          $this->title = $title;

       }


      #Getter
      public function getTitle()
      {
          return $this->title;

      }
    }
////////////////////////
     //$math = new Book; // new instance

    // $math->setTitle("Algebra");
    $math = new Book("Algebra New");
     $math->getTitle();
     echo $math->getTitle();



    ?>
