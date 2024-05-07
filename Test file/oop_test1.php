<!doctype html>
<html lang="en">
    <body>
        <?php
        class Product {
            // Thuộc tính
            public $id;
            public $name;
            public $price;
            public $amount;
            public $company;
            public $year;

        
            // Hàm khởi tạo
            function __construct($id, $name, $price, $amount, $company, $year) {
                $this->id = $id;
                $this->name = $name;
                $this->price = $price;
                $this->amount = $amount;
                $this->company = $company;
                $this->year = $year;
            }
        
            // Phương thức
            function getId() {
                return 'Ma san pham ' . $this->id;
            }
            function getName() {
                return 'Ten san pham ' . $this->name;
            }
            function getPrice() {
                return 'Don gia ' . $this->price;
            }
            function getAmount() {
                return 'So luong ' . $this->amount;
            }
            function getCompany() {
                return 'Cong ty san xuat ' . $this->company;
            }
            function getYear() {
                return 'Nam san xuat ' . $this->year;
            }

        }
        
        // Tạo đối tượng từ lớp Stringee
        $product = new Product('A', 'Hoa', "5000", "1", "QN", "2024");
        
        // Gọi phương thức
        echo $product->getId() . "<br>"; // Kết quả: Tên công ty: CÔNG TY CỔ PHẦN STRINGEE
        echo $product->getName();
        ?>
    </body>
</html>
