<?php
class ProductManager extends Controller
{
    public $productModel;
    
    public function __construct()
    {
        $this->productModel = $this->model("ProductModel");
    }

    function displayIntroduction() {
        $this->view("master", [
            "Page" => "home"
        ]);
    }

    function getProductsbyBand() {
    $this->view("master", [
        "Page" => "getProductsbyBand"
    ]);
    }
    
    public function displayProductsbyBand() {
        if (isset($_POST["btSearch"])) {
            $band = $_POST["selectBand"];
            $tblname = "tblproduct";
            $field = "band";
            $products = $this->productModel->getRecordsbyField($tblname, $field, $band);
            $this->view("master",
            ["Page" => "getProductsbyBand",
            "Products" => $products
        ]);
        }
    }

    function getProductsbyYear() {
        $this->view("master", [
            "Page" => "getProductsbyYear"
        ]);
        }
        
    public function displayProductsbyYear() {
            if (isset($_POST["btSearchYear"])) {
                $year = $_POST["selectYear"];
                $tblname = "tblproduct";
                $field = "year";
                $products = $this->productModel->getRecordsbyField($tblname, $field, $year);
                $this->view("master",
                ["Page" => "getProductsbyYear",
                "Products" => $products
            ]);
            }
        }

        function getProductsbyCollapse() {
            $this->view("master", [
                "Page" => "getProductsbyCollapse"
            ]);
            }
            
        public function displayProductsbyCollapse() {
                if (isset($_POST["btSearchC"])) {
                    $year = $_POST["selectYearC"];
                    $band = $_POST["selectBandC"];
                    $tblname = "tblproduct";
                    $field = "year";
                    $field1 = "band";
                    $products = $this->productModel->getRecordsbyField($tblname, $field, $year, $field1, $band);
                    $this->view("master",
                    ["Page" => "getProductsbyCollapse",
                    "Products" => $products
                ]);
                }
            }

        function impInsertProduct() {
            $this->view("master",
            ["Page" => "insertProduct"]);
        }

        public function insertProduct()
        {
            if (isset($_POST["btInsert"])) {
                $id = $_POST["id"];
                $pname = $_POST["pname"];
                $company = $_POST["company"];
                $year = $_POST["selectYear"];
                $band = $_POST["selectBand"];
                if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] === UPLOAD_ERR_OK) {
                    $pimage = 'data:image/png;base64,' . base64_encode(file_get_contents($_FILES['imageFile']['tmp_name']));
                }
            }
            $result = $this->productModel->insertProduct($id, $pname, $company, $year, $band, $pimage);
            $this->view('master',
            [
                'Page' => 'insertProduct',
                'result' => $result
            ]);
        }
}
?>