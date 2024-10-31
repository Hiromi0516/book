<?php
class Book{
    //propaties/variables
    //Methods/functions
   private $title;
   private $author;
   Public $price;
   
   public function setTitle($title){
     $this->title= $title;
   }
    public function setAuthor($author){
        $this->author = $author;
       }
    
       //GETTER
       public function gettitle(){
        return $this->title;
       } 
    
       public function getAuthor(){
        return $this->author;
       }
    
       public function displayVariable(){
        echo $this->variable1;
        echo $this->variable2;
    
        //call the showEmail method
        $this->showEmail();   //output: meryywatsson@gmai.com
    }               //↓call email             
    public function showEmail(){
        echo $this->email;
    
    }
    
    //creat an instance of the class
    }
      $math = new Book;
      $math->setTitle('Geometry');
      $math->setAuthor('Rene Descartes');
      echo"title:". $math->gettitle();
      echo"<br>";
      echo"Author:". $math->getAuthor(); 
      echo"<br>";
      echo "Price:" . $math->price = 1500;



      echo"<hr>";
      //Create another instance of the book class// display
      $science = new Book;
      $science->setTitle('Gravity');
      $science->setAuthor('Albert Einstein');
      echo"Title:". $science->getTitle();
      echo"<br>";
      echo "Author:". $science->getAuthor();
      echo"<br>";
      echo"Price:". $science->price = 2300;
      
      echo"<br>";
      $english = new Book;
      $english->setTitle('Harry Potter');
      echo"Title:". $english->gettitle();

    ?>