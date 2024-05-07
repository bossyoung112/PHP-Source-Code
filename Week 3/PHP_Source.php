<!doctype html>
<html lang="en">
    <body>
        <?php
        //__destruct() function: huỷ đối tượng, kết thúc đối tượng
        //class Fruit {
            //var $name;
            //var $color;
            
            //function __construct($name, $color)
            //{
            //    $this->name = $name;
            //    $this->color = $color;
            //}
            //function __destruct()
            //{
            //    echo "The fruit is {$this->name} and the color is {$this->color}";
            //}
        //}

        //$apple = new Fruit("Apple", "Red");

        //Phạm vi truy cập:
        //public: 
        //protected: thuộc tính hoặc phương thức có thể truy cập ở lớp cha và lớp con
        //private: chỉ truy cập trong lớp khai báo.

        //class Fruit {
        //    public $name;
        //    public $color;
        //    public $weight;

        //function set_name($n) {
        //   $this->name = $n;
        //}
        //protected function set_color($n) {
        //    $this->color = $n;
        //}
        //private function set_weight($n) {
        //    $this->weight = $n;
        //}
    //}

        //$mango = new Fruit();
        //$mango->set_name("Mango");
        //$mango->set_color("Yellow");
        //$mango->set_weight("300");


        //dùng từ khoá "extends" để kế thừa. lớp con có thể kế thừa phương thức và thuộc tính với phạm vi public và protected của lớp cha.
        

        //Lớp ảo: Dùng từ khoá abstract
        //1 Lớp con kế thừa từ 1 lớp ảo cha thì tuân theo quy tắc sau:
        // Phương thức ở lớp con phải được định nghĩa và khai báo lại giống như ở lớp cha.
        // Số lượng các tham số trong phương thức ở lớp con phải giống lớp cha.
        // Lớp cha ảo phải có ít nhất 1 phương thức ảo.
        // Phương thức ảo của lớp cha chỉ khai báo mà không định nghĩa, (không có phần thân)

        //abstract class ParentClass {
        //    abstract public function someMethod1();
        //    abstract public function someMethod2($name, $color);
        //    abstract public function someMethod3() : string;
        //}

        //mysql: Tạo csdl tiếng việt: utf8_general_ci
        ?>
    </body>
</html>