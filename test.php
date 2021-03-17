<html>

<head>
    <title> Upload file </title>
</head>

<body>
    <form enctype="multipart/form-data" method="post" action="lab10-7_upload.php">
        <input type="hidden" name="MAX_FILE_SIZE" value="500000">
        เลือกไฟล์ที่ต้องการ : <input type="file" name="ImageFile" size="50">
        <input type="submit" name="Submit" value="Upload Now">
    </form>
</body>

</html>

<?php if (isset($ImageFile)) {
    $ImageFile_name;
    $ImageFile_type;
    $ImageFile_size;
    echo "File name : " . $ImageFile_name . "<br>";
    echo "File type : " . $ImageFile_type . "<br>";
    echo "File size : " . $ImageFile_size . "<br>";
    if ($ImageFile_type == "image/gif" or $ImageFile_type == "image/jpeg") {
        if ($ImageFile_size <= $MAX_FILE_SIZE) {
            copy($ImageFile, "pictures/$ImageFile_name");
            unlink($ImageFile);
            echo "<li>บันทึกข้อมูลเรียบร้อย<br>";
            echo  "<a href='ch10-7_form.php'>กลับไป upload </a><br>";
            echo  "<image src='pictures/$ImageFile_name' width='320' height='240'>";
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
} ?>