<?php 
    class Book {

      //attributi
      public $title;
      public $author;
      public $pubblicationDate;
      public $publishingHouse;
      public $price;

      // construct
      function __construct($titleCo, $authorCo, $pubblicationDateCo, $publishingHouseCo, $priceCo) {
          $this->title = $titleCo;
          $this->author = $authorCo; 
          $this->pubblicationDate = $pubblicationDateCo; 
          $this->publishingHouse = $publishingHouseCo;  
          $this->price = $priceCo; 
        }
        
    }

    $book1 = new Book("Harry Potter and the Philosophers Stone", "J.K. Rowling", "1997", "Gryffindor Edition", "20");
    var_dump($book1);








?>





