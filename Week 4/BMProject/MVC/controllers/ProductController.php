<?php
class ProductController extends Controller
{
    public $productmodel;
    public function __construct()
    {
    $this->productmodel = $this->model("ProductModel");    
    }

    function displayIntroduction() {
        $this->view("master", [
            "Page" => "home"
        ]);
    }
}   
?>