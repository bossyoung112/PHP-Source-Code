<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newAction = "";
        }
        else {
        $newAction = "insertProduct";
        }
?>

        <form method="post" action="<?php echo $newAction; ?>" enctype="multipart/form-data" >
       
                <div>
                <div class="mb-3">
                    <label for="" class="form-label">ID Product</label>
                    <input
                        type="text"
                        class="form-control form-control-sm"
                        name="id"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Product Name</label>
                    <input
                        type="text"
                        class="form-control form-control-sm"
                        name="pname"
                        id=""
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Company</label>
                    <input
                        type="text"
                        class="form-control form-control-sm"
                        name="company"
                        id=""
                        placeholder=""
                    />
                </div>

                <div class="mb-3">
                <label for="" class="form-label">Select Year</label>
                <select class="form-select form-select-lg" name="selectYear" id="">
                    <?php
                    for ($year = 2015; $year <=2025; $year++) {
                        echo '<option value="' . $year . '">' . $year . '</option>';
                    }
                    ?>
                </select>
                </div>

                <div class="mb-3    ">
                <label for="" class="form-label">Select Band</label>
                <select class="form-select form-select-lg" name="selectBand" id="">
                    <option value="Fig">Fig</option>
                    <option value="Promethazine VC">Promethazine VC</option>
                    <option value="Stack">Stack</option>
                </select>
            </div>
            
            <div class="mb-3">
            <label for="" class="form-label">Choose Image</label>
                <input type="file" id="" name="imageFile">
            </div>
            </div>
            <button
                type="submit"
                class="btn btn-primary"
                name = "btInsert"
            >
                Submit
            </button>

        </form>
    
        <?php
        if (isset($data["result"])) {
        if($data["result"]) {
            echo "Thêm mới thành công";
        }
        else {
            echo "Thêm mới thất bại";
        }
    }
    ?>