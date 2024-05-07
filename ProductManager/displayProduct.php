<!doctype html>
<html lang="en">

    <body>
        <?php
       require_once "dbprocess.php";
       $pr = new DBproduct();
       $pr->showproduct()
        ?>
    </body>
</html>
