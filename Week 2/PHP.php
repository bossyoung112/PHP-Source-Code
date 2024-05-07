<!doctype html>
<html lang="en">
    <script>declare (strict_types=1);</script>
    <body>
        <?php
        //function familyName ($fname) {
        //    echo "$fname Refnes.<br>";
        //}
        //familyName("Jani");
        //familyName("Hege");
        //familyName("Stale");
        //familyName("Kai Jim");
        //familyName("Borge");
        ?>

        <?php
        //Truyền tham chiếu: sử dụng toán tử "and" trước tham số
        //function add_five(& $value) {
        //    $value += 5;
        //}
        //$num = 2;
        //add_five($num);
        //echo $num;
        ?>

        <?php
        //sử dụng toán tử ... trước tham số của hàm cho phép truyền vào là 1 mảng, hàm + biến được coi như là 1 mảng.
        //function sumMyNumbers(...$x)
        //{
        //    $n = 0;
        //    $len = count($x);
        //    for ($i = 0; $i < $len; $i++) {
        //        $n += $x [$i];
        //    }
        //    return $n;
        //}
        //$a = sumMyNumbers(5,2,6,2,7,7);
        //echo $a;
        ?>

        <?php
        //sử dụng toán tử strict để loại bỏ một số lỗi không tương thích.
        //function addNumber(int $a, int $b) {
        //    return $a + $b;
        //}
        //echo addNumber(5, "5 days");
        // since the strict is NOT enabled, 5 days is changed
        ?>

        <?php 
        //function addNumber (float $a, float $b) : float {
        //    return $a + $b;
        //}
        //echo addNumber(1.2 , 5.2);
        ?>

        <?php
        //tạo mảng:
        
        //$carsa = array("Volvo", "BMW", "Porsche");
        //print_r($carsa);

        //$carsb = ["Volvo", "BMW", "Porsche"];
        //print_r($carsb);

        //$carsc = [
        //    "Volvo",
        //    "BMW",
        //    "Porsche"
        //];
        //print_r($carsc);

        //$carsd = [
        //    0 => "Volvo",
        //    1 => "BMW",
        //    2 => "Porsche"
        //];
        //print_r ($carsd);

        //$carse = [];
        //$carse[0] = "Volvo";
        //$carse[1] = "BMW";
        //$carse[2] = "Porsche";
        //print_r($carse);

        //$myArr = [];
        //$myArr[0] = ["Apple"];
        //$myArr[1] = ["Bananas"];
        //$myArr["Fruits"] = ["Cherries"];
        //print_r($myArr);
        ?>

        <?php
        //thêm phần tử vào mảng:
        //$fruit = array("Apple", "Banana", "Water Melon");
        //$fruit[] = "Orange";
        //print_r($fruit);

        //$cars = array("Brand" => "Ford", "model" => "Mustang Mach-E GT");
        //$cars["color"] = "Obsidian Black";
        //print_r($cars);

        //$fruit = array("Apple", "Banana", "Cherry");
        //array_push ($fruit, "Orange", "Kiwi", "Lemon");
        //print_r($fruit);

        //$cars = array("Brand" => "Ford", "model" => "F150 Harley Davidson");
        //$cars += ["color" => "White snow", "date" => "2024"];
        //print_r($cars);
        ?>

        <?php
        //xoá phần tử trong mảng:
        //$cars = array("Volvo", "BMW", "Ford");
        //array_slice($cars, 1, 1, 1);
        //echo $cars[0], ", " , $cars[1], ", ", $cars[2];
        
        //$cars = array("Volvo", "BMW", "Ford");
        //unset($cars[1]);
        //echo $cars[0], ", ", $cars[2], "\n";
        //echo $cars[0], ", ", $cars[1];
        ?>

        <?php
        //biến toàn cục:

        //$GLOBALS: Mảng chứa tất cả biến toàn cục
        //$x = 75;
        //function myFunction () {
        //    global $x;
        //    echo $GLOBALS['x'];
        //    echo $x;
        //}
        //myFunction();

        //$_SERVER
        //echo $_SERVER['PHP_SELF'];
        //echo "<br";
        //echo $_SERVER['SERVER_NAME'];
        //echo "<br";
        //echo $_SERVER['HTTP_HOST'];
        //echo "<br";
        //echo $_SERVER['HTTP_REFERER'];
        //echo "<br";
        //echo $_SERVER['HTTP_USER_AGENT'];
        //echo "<br";
        //echo $_SERVER['SCRIPT_NAME'];
        //echo "<br";

        //$_REQUEST: biến toàn cục mạnh ở trong php, chứa dữ liệu được submit của form và cookie. Ngoài ra, còn là 1 mảng chứa dữ liệu từ các biến GET< POST< COOKIE.
        //$_POST
        //$_GET
        //$_FILES
        //$_ENV
        //$_COOKIE
        //$_SESSION
        ?>

        <?php
        //Cú pháp
        //3 hàm quan trọng: 
        //preg_match(): trả về 1 nếu tìm thấy pattern trong xâu, 0 nếu không tìm thấy
        //$str =  "Visit Hanoi City";
        //  $pattern = "/Hanoi/i";
        //echo preg_match($pattern, $str);

        //preg_match_all(): trả về số lần xuất hiện pattern trong xâu, 0 nếu không tìm thấy.
        //$str = "The rain in SPAIN falls mainly on the plains.";
        //$pattern = "/ain/i";
        //echo preg_match_all($pattern, $str);

        //preg_replace(): thay thế pattern tìm thấy trong xâu bằng 1 pattern khác.
        //$str = "Visit Microsoft!";
        //$pattern = "/microsoft/i";
        //echo preg_replace($pattern, "Hanoi" ,$str);
        ?>

        <?php
        //Xử lí form trong php: Để xử lí form có 2 biến quan trọng: $_GET, $_POST
        //$_GET: Là mảng để lấy các giá trị hiện thời thông qua các tham số của URL.
        //$_POST: Là mảng để lấy các giá trị hiện thời thông qua các tham số HTTP_POST
        ?>

        <?php
        //dữ liệu của form
        // $_SERRVER ["PHP_SELF"] 1 biến siêu toàn cục trả về tên của tệp hiện đang thực thi.
        // Ba hàm quan trọng:
        // trim(): xoá khoảng trắng không cần thiết, vd: dấu cách thừa,
        // stripslashes(): bỏ đi dấu gạch ngược
        //htmlspecialchars(): chuyển kí tự đặc biệt thành thực thể html. vd: < > 
        ?>

        <?php
        //Yêu cầu:
        //Tên: Phải có kí tự và khoảng trắng
        //Email: Phải có định dạng @ và dấu .
        //Website: Có thể nhập hoặc không. phải có định dạng URL
        //Comment: Có thể nhập hoặc không. ở trên nhiều dòng
        //gender: phải lựa chọn 1 
        ?>

        <?php
        // Lập trình hướng đối tượng:
        //Cú pháp tạo lớp:
        //định nghĩa đối tượng. 2 phương pháp: tạo đối tượng ngầm định, tạo đối tượng tường minh

        //note: từ khoá $this là từ khoá tham chiếu đến đối tượng hiện thời, và thường nằm ở bên trong phương thức
        // instancepf: kiểm tra xem đối tượng có thuộc về 1 lớp hay không
        //

        //BTVN: Tạo lớp product gồm [id, name, price, amount, company, year]
        //thiết kế 1 form nhập danh sách sản phẩm, lưu vào 1 mảng và đưa ra màn hình
        ?>
    </body>
</html>
