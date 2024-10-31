<?php

  class SampleClass{
    //propaties/variables
    //Methods/functions
   private $variable1;
   private $variable2 = "Merry Watson";
   Public $email = "merrywatson@Gmail.com";
   protected $pin_no = "0124";
   var $age = 25;
 //var = public
 //Setter Method

   public function setVariable1($new_cariable1)
   {
    $this->variable1 = $new_variable1;
   }
    public function getVariable1(){
        return $this->variable1;
    }

   

   public function setAuthor($author){
    $this->autohr = $author;
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

  $math = new Book;
  $math->setTitle('Geometry');
  $math->setAuthor('Rene Descartes')
  echo"title:". $math->gettitle();
  echo"<br>";
  echo"Author:". $math->getAuthor(); 

  echo"<hr>";
  //Create another instance of the book class// display
  $science = new Book;
  $science->setTitle('Gravity');
  $science->setAuthor('Albert Einstein');
  echo"Title:". $science->getTitle();
  echo"<br>";
  echo "Author:". $science->getAuthor();

    
  }


 
  





  ?>