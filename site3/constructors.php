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
    ?>
</body>
</html>