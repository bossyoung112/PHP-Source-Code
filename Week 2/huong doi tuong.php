<!doctype html>
<html lang="en">
    <body>
        <?php
        //class Fruit {
        //    public $name;
        //    public $color;

        //    function set_name($name) {
        //        $this -> name = $name;
        //    }
        //    function get_name($name) {
        //        return $this -> name;
        //   }

        //    function set_color($color) {
        //        $this -> color = $color;
        //    }
        //    function get_color($color) {
        //       return $this -> color;
        //    }
        //}
        ?>

        <?php
        //vd: tạo 2 đối tượng loại quả và đưa ra màn hình
        //$apple = new fruit();
        //$lemon = new fruit();

        //function set_fruit($apple) {
        //    $this -> fruit = $apple;
        //}
        //function set_fruit($lemon) {
        //    $this -> fruit = $lemon;
        //}
        //echo "The first" . get_fruit() 
        //$apple = new fruit();
        //var_dump($apple instanceof Fruit)
        ?>

        <?php
        class Fruit {
            public $name;
            public $color;

            function _construct($name, $color) {
                $this -> name = $name;
                $this -> color = $color;
            }

            function get_name() {
                return $this -> name;
            }
            function get_color() {
                return $this -> color;
            }
        }
        $apple = new Fruit("Apple", "Red");
        echo $apple -> get_name();
        echo "<br>";
        echo $lemon -> get_color();
        ?>
        
    </body>
</html>
