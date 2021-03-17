<?php
    echo "<br><br>";
    $ImageFile= $_FILES['ImageFile']['name'];
    $MAX_FILE_SIZE = $_POST['MAX_FILE_SIZE'];
    print_r($_FILES);

 if (isset($ImageFile)) {
    $ImageFile_name = $_FILES['ImageFile']['name'];
    $ImageFile_type= $_FILES['ImageFile']['type'];
    $ImageFile_size= $_FILES['ImageFile']['size'];
    echo "File name : " . $ImageFile_name . "<br>";
    echo "File type : " . $ImageFile_type . "<br>";
    echo "File size : " . $ImageFile_size . "<br>";
    if ($ImageFile_type == "image/gif" or $ImageFile_type == "image/jpeg") {
        if ($ImageFile_size <= $MAX_FILE_SIZE) {

            copy($_FILES['ImageFile']['tmp_name'], "$ImageFile_Name");
            unlink($ImageFile_Name);
            //move_uploaded_file($_FILES['ImageFile']['tmp_name'],$ImageFile);
            echo "<li>บันทึกข้อมูลเรียบร้อย<br>";
            echo  "<a href='ch10-7_form.php'>กลับไป upload </a><br>";
            echo  "<image src='$ImageFile' width='320' height='240'>";
        } else {
            echo "<li>รูปภาพมีขนาดใหญ่กว่า 500 kb.<br>";
            echo "<input type=\"button\" value=\"กลับไปแก้ไข\" ";
            echo "onclick= \"history.back();\" style=\"cursor:hand\">";
        }
    } else {
        echo "<li>รูปภาพไม่ใช่ไฟล์ประเภท GIF หรือ JPG <br>";
        echo "<input type=\"button\" value=\"กลับไปแก้ไข\" ";
        echo "onclick= \"history.back();\" style=\"cursor:hand\">";
    }
}
