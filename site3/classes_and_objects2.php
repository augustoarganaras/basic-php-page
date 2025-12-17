<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        class Book {
            var $title;
            var $author;
            var $pages;

            function __construct($aTitle, $aAuthor, $aPages) {
                $this->title = $aTitle;
                $this->author = $aAuthor;
                $this->pages = $aPages;
            }
        }

        $book1 = new Book("Harry Potter", "JK Rowling", 400);
        $book1->title = "Hunger Games";
        $book2 = new Book("Lord of the Rings", "Tolkien", 700);

        echo("$book1->title <br>");

        // object function
        class Student {
            var $name;
            var $major;
            var $gpa;
            
            function __construct($name, $major, $gpa) {
                $this->name = $name;
                $this->major = $major;
                $this->gpa = $gpa;
            }

            function hasHonors() {
                if($this->gpa > 3.5) {
                    return "has Honors";
                }
                return "does not have Honors";
            }
        }

        $student1 = new Student("Jim", "Business", 2.8);
        $student2 = new Student("Pam", "Art", 3.6);
        
        echo ("The student $student1->name ");
        echo $student1->hasHonors();
        echo "<br>";

        class Movie {
            public $title;
            private $rating;

            function __construct($title, $rating) {
                $this->title = $title;
                $this->setRating($rating);
            }

            // setter and getter function

            function getRating() {
                return $this->rating;
            }

            function setRating($rating) {
                if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                    $this->rating = $rating;
                } else {
                    $this->rating = "NR <br>";
                }
            }
        }

        $avengers = new Movie("Avengers", "PG-13");
        // can't do the following because 
        // it's a private variable: 
        // $avengers->rating = "Dog";
        // echo $avengers->rating;
        $avengers->setRating("Dog");
        
        echo $avengers->getRating();
        


        // Inheritance 

        class Chef {

            
            function makeChicken() {
                echo "The chef makes chicken <br>";
            }

            function makeSalad() {
                echo "The chef makes a salad <br>";
            }

            function makeSpecialDish() {
                echo "The chef makes a sandwich <br>";
            }

            
        }

        class ItalianChef extends Chef {
            function makePasta() {
                echo "The chef makes pasta <br>";
            }

            function makeSpecialDish() {
                echo "The chef makes chicken parm";
            }
        }

        $chef = new Chef();
        $chef->makeChicken();
        $italianChef = new ItalianChef();
        $italianChef->makePasta();

        $chef->makeSpecialDish();
        $italianChef->makeSpecialDish();
    ?>
</body>
</html>