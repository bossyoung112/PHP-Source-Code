<!doctype html>
<html lang="en">
    <body>
    <?php
            //lop cha
            class Fruit {
            public $name;
            public $color;
            public function __construct($name, $color)
            {
                $this->name = $name;
                $this->color = $color;
            }
            public function intro() {
                echo "The Fruit is {$this->name} and the color is {$this->color}";
            }
        }

        class Strawberry extends Fruit {
            public function message() {
                echo "Am i a fruit or a berry <br>";
            }
        }

        $strawberry = new Strawberry("Strawberry", "red");
        $strawberry->message();
        $strawberry->intro();
        ?>
    </body>
</html>
