<?php
class ProductModel extends DBProduct {
    public function getRecords($tablename)
    {
        $qr = "SELECT * FROM $tablename";
        return mysqli_query($this->con, $qr);
    }
    public function getRecordsbyField($tblname, $field, $keyword, $field1, $keyword2)
    {
        $sql = "SELECT * FROM $tblname where $field = '$keyword' AND $field1 = '$keyword2'";
        return mysqli_query($this->con, $sql);
    }

    public function insertProduct($id, $pname, $company, $year, $band, $pimage) {
        $result = false;
        $sql = "insert into tblProduct(pid, pname, company, year, band, pimage)
                            values('$id', '$pname', '$company', '$year', '$band', '$pimage')";
        if (mysqli_query($this->con, $sql)) {
            $result = true;
        }
        return json_decode($result);
    }
}
?>