<!doctype html>
<html lang="en">
    <link rel="stylesheet" type="text/css" href="style.css" />
    
    <body>
        <label class = "tenform">Danh sách sản phẩm</label>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <?php
        
        class product{
            public $id;
            public $name;
            public $price;
            public $amount;
            public $company;
            public $year;


            function __construct($id, $name, $price, $amount, $company, $year)
            {
                $this->id = $id;
                $this->name = $name;
                $this->price = $price;
                $this->amount = $amount;
                $this->company = $company;
                $this->year = $year;
            }
        }
        
        ?>
        <div class="tensp">
            <label for="tensp1" class="form-label">Tên sản phẩm</label>
            <input
                type="text"
                class="form-control"
                name="name[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   
            <label for="tensp2" class="form-label">Tên sản phẩm</label>
            <input
                type="text"
                class="form-control"
                name="name[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </div>

        <div class="tien">
            <label class="tien1" for="quantity">Giá tiền</label>
            <input class="nhap1" type="number" id="   " name="price[]" min="1">

            <label class="tien2" for="quantity">Giá tiền</label>
            <input class="nhap2" type="number" id="" name="price[]" min="1">
        </div>

        <div class="soluong">
            <label class="sl1" for="quantity">Số lượng</label>
            <input type="number" id="quantity" name="quantity" min="0">

            <label class="sl2" for="amount">Số lượng:</label>
            <input type="number" id="quantity" name="amount[]" min="0">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

        </div>

        <div class="congty">
            <label for="" class="form-label">Công ty</label>
            <select
                class="form-select form-select-lg"
                name="company[]"
                id=""
            >
                <option selected>Select one</option>
                <option value="Delhi">Quảng Ninh</option>
                <option value="Istanbul">Hải Phòng</option>
                <option value="Jakarta">Hà Nội</option>
            </select>

            <label for="" class="form-label">Công ty</label>
            <select
                class="form-select form-select-lg"
                name="company[]"
                id=""
            >
                <option selected>Select one</option>
                <option value="Delhi">Quảng Ninh</option>
                <option value="Istanbul">Hải Phòng</option>
                <option value="Jakarta">Hà Nội</option>
            </select>

        </div>
        <div class="namsx">
            <label for="" class="form-label">Năm sản xuất</label>
            <input
                type="year"
                class="form-control"
                name="year[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <label for="" class="form-label">Năm sản xuất</label>
            <input
                type="year"
                class="form-control"
                name="year[]"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
        </div>
        <button
            type="submit"
            class="btn btn-primary"
        >
            Submit
        </button>
        
        Tên sản phẩm: <?php 
        if(isset($_POST["name"]) && !empty($_POST["name"]))   
        foreach($_POST["name"] as $name) 
            echo $name .", ";
        ?>
        <br>
        Giá tiền <?php 
        if(isset($_POST["price"]) && !empty($_POST["price"]))   
        foreach($_POST["price"] as $price) 
            echo $price .", ";
        ?>
        <br>
        Số Lượng: <?php 
        if(isset($_POST["amount"]) && !empty($_POST["amount"]))   
        foreach($_POST["amount"] as $amount) 
            echo $amount .", ";
        ?>
        <br>
        Công ty: <?php 
        if(isset($_POST["company"]) && !empty($_POST["company"]))   
        foreach($_POST["company"] as $company) 
            echo $company .", ";
        ?>
        <br>
        Năm sản xuất: <?php 
        if(isset($_POST["year"]) && !empty($_POST["year"]))   
        foreach($_POST["year"] as $year) 
            echo $year .", ";
        ?>
                
    </body>
</html>