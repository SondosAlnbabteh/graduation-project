<?php
// Check if file is uploaded successfully
if(isset($_FILES["excel_file"]) && $_FILES["excel_file"]["error"] == 0){
    $file_name = $_FILES["excel_file"]["name"];
    $file_tmp = $_FILES["excel_file"]["tmp_name"];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);

    // Check if the file is an Excel file
    if($file_ext == "xlsx" || $file_ext == "xls"){
        // Move the uploaded file to a permanent location
        move_uploaded_file($file_tmp, "upload/" . $file_name);

        // Process the Excel file and save data to MySQL database
        require 'PHPExcel/PHPExcel.php';

        $excel = PHPExcel_IOFactory::load("upload/" . $file_name);
        $sheet = $excel->getActiveSheet();
        
        // Loop through rows and save data to MySQL database
        foreach($sheet->getRowIterator() as $row){
            $product_name = $row->getCell(0)->getValue();
            $product_price = $row->getCell(1)->getValue();
            
            // Save $product_name and $product_price to MySQL database
            // Your MySQL insert query here
        }

        echo "File uploaded successfully and data saved to database.";
    } else {
        echo "Please upload an Excel file.";
    }
} else {
    echo "Error uploading file.";
}
?>
