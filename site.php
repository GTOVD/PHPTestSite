<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Thomas Vickers Site</title>
  </head>
  <body>

<!
Basics
>
    <?php

      $age = 50;
      $name = "thomas";

      echo "<h1>Story</h1>
      There was a man $name <br>
      He was $age years old <br>
      he liked his name $name <br>
      but he did not like $age <br>
      ";

      echo strtoupper($name), "<br>";
      echo strtolower($name), "<br>";
      echo strlen($name), "<br>";
      echo $name[5], "<br>";
      echo str_replace("as", "<br>", $name), "<br>";
      echo substr($name, 3, 1), "<br>";
      echo -43.093, "<br>";
      echo abs(-100), "<br>";
      echo pow(2, 4), "<br>";
      echo sqrt(100), "<br>";
      echo max(100, 20), "<br>";
      echo min(100, 20), "<br>";
      echo round(3.4), "<br>";
      echo ceil(3.3), "<br>";
      echo floor(3.3), "<br>";

      $arrayName = array("hello", "hello2", "hello3", 8, 0);
      $arrayName[2] = "Muhleg";
      echo $arrayName[2], "<br>";
      echo count($arrayName), "<br>";

     ?>

<!
$_POST & $_GET
>
  <form action="site.php" method="post">
    username: <input type="text" name="username">
    <br>
    password: <input type="text" name="password">
    <input type="submit">
  </form>

  Your username is: <?php echo $_POST["username"]; ?><br>
  Your password is: <?php echo $_POST["password"]; ?><br>

<!
Checkboxs
>
  <form action="site.php" method="post">
    Apples: <input type="checkbox" name="fruits[]" value="apples"><br>
    Oranges: <input type="checkbox" name="fruits[]" value="oranges"><br>
    Pears: <input type="checkbox" name="fruits[]" value="pears"><br>
    <input type="submit"><br>
  </form>

  <?php
    $fruits = $_POST["fruits"];
    foreach ($fruits as $fruitloops)
    echo $fruitloops, "<br>";
   ?>

   <br>

<!
Associative Arrays
>
   <form action="site.php" method="post">
     <input type="text" name="student">
     <input type="submit">
   </form>

   <?php

      $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");

      echo $grades[$_POST["student"]], "<br>";
      echo $grades["Jim"], "<br>";

    ?>

<!
Functions
>
    <?php

      function Leg($inch){
        echo "like my $inch inch Leg!", "<br>";

        return $inch;
      }

      Leg(8);
      Leg(9);
      echo "Inch is : ", Leg(10), "<br>";

      $num3 = 5;
      $num4 = 650;

      if($num3 > $num4) {
          echo "$num3 is greater than $num4", "<br>";
      }

      function getMax($num1, $num2) {
        if($num1 > $num2)  {
          echo "$num1 is the highest number<br>";
          return $num1;
        }
        else {
          echo "$num2 is the highest number<br>";
          return $num2;
        }
      }

      echo "returned: ", getMax($num3, $num4);

     ?>

<!
Calculator
>
    <br><br>
    <form action="site.php" method="post">
        First num: <input type="number" name="num1"> <br>
        OP: <input type="text" name="op"> <br>
        Second Num: <input type="number" name="num2"> <br>
        <input type="submit">
    </form>

    <?php
      $num1 = $_POST["num1"];
      $num2 = $_POST["num2"];
      $op = $_POST["op"];

      switch ($op) {
        case "+":
          echo $num1 + $num2, "<br>";
          break;
        case "-":
          echo $num1 - $num2, "<br>";
          break;
        case "*":
          echo $num1 * $num2, "<br>";
          break;
        case "/":
          echo $num1 / $num2, "<br>";
          break;
        default:
          echo "invald operator<br>";
      }
    ?>

<!
Loops
>

    <?php
      $index = 1;

      while($index <= 5){
         echo "$index <br>";
         $index++;
      }

      do {
         echo "$index <br>";
         $index--;
      } while($index <= 5 && $index >= 0);

      for($i = 0; $i <= 10; $i++) {
        echo "$i <br>";
      }
     ?>

<!
include file
>

    <?php include "header.html"; ?>
    <p> Hello? </p>
    <?php include "footer.html"; ?>

    <?php
      $title = "My First Post";
      $author = "Thomas Vickers";
      $wordCount = 400;
      include "article-header.php";

      include "useful-tools.php";

      echo $feetInMile, "<br>";
      sayHi("Thomas Vickers");

     ?>

<!
Class & Objects
>
    <?php

      class Book { //Class
        var $title;
        var $author;
        var $pages;

        function __construct($aTitle, $aAuthor, $aPages){ //constructor
          $this->title = $aTitle;
          $this->author = $aAuthor;
          $this->pages = $aPages;
        }

        function GetTitle(){ //object function
          return $this->title;
        }
        function GetAuthor(){ //object function
          return $this->author;
        }
        function GetPages(){ //object function
          return $this->pages;
        }
      }

      $book1 = new Book("Harry Potter", "Thomas Vickers", 4000); //Object
      //$book1->title = "Harry Potter";
      //$book1->author = "Thomas Vickers";
      //$book1->pages = 4000;

      $book2 = new Book("LOTR", "Virs", 700); //Object
      //$book2->title = "LOTR";
      //$book2->author = "Virs";
      //$book2->pages = 700;

      echo $book1->title, "<br>";
      echo $book1->author, "<br>";
      echo $book1->pages, "<br>";

      echo $book1->GetTitle(), "<br>";
      echo $book1->GetAuthor(), "<br>";
      echo $book1->GetPages(), "<br>";

     ?>

<!
Getters and Setters with inheritance
>

  <?php

  class Movie {

    public $title;
    private $rating;

    function __construct($title, $rating) {
      $this->title = $title;
      $this->setRating($rating);
    }

    function getRating(){
      return $this->rating;
    }

    function setRating($rating){
      switch ($rating) {
        case "G":
          $this->rating = $rating;
          break;
        case "PG":
          $this->rating = $rating;
          break;
        case "PG-13":
          $this->rating = $rating;
          break;
        case "R":
          $this->rating = $rating;
          break;
        default:
          $this->rating = "NR";
      }

    }

  }

  $avengers = new Movie("End Game", "PG-13");

  echo $avengers->title, "<br>";

  echo $avengers->getRating(), "<br>";

  class Chef {
    function makeChicken() {
      echo "the chef makes chicken <br>";
    }
    function makeSalad(){
      echo "the chef makes salad <br>";
    }
    function makeSpecialDish(){
      echo "the chef makes bbq ribs <br>";
    }
  }

  class ItalianChef extends Chef {
    function makePasta(){
      echo "the chef makes pasta <br>";
    }
    function makeSpecialDish(){
      echo "the chef makes pizza <br>";
    }
  }

  $chef = new Chef();
  $chef->makeSpecialDish();

  $italianChef = new ItalianChef();
  $italianChef->makeSpecialDish();

   ?>

<!
end
>

  </body>
</html>
