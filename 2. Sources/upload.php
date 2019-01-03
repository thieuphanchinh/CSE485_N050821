<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "Tệp vừa tải là một ảnh - " . $check["mime"] . ". <br>";
        $uploadOk = 1;
    } else {
        echo "Tệp tin không hợp lệ.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Xin lỗi, tệp tin đã tồn tại <br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 5000000) {
    echo "Xin lỗi, tệp bạn vừa tải lên kích thước quá lớn.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Lỗi, chỉ đuôi JPG, JPEG, PNG & GIF được chập nhận hiện tại.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Lỗi tải lên ";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        include_once("dbConnection.php");
        $namede=$_POST['namede'];
        $notede=$_POST['notede'];
        $linkde=$_FILES["fileToUpload"]["name"];
        $sql = "INSERT INTO dethimau (namede, linkde, notede)
        VALUES ('$namede', '$linkde','$notede')";

if ($con->query($sql) === TRUE) {
    echo "Thêm vào cơ sở dữ liệu thành công";
} else {
    echo "Lỗi khi thêm vào cơ sở dữ liệu: " . $sql . "<br>" . $con->error;
}

$con->close();
        echo "Tệp tin ". basename( $_FILES["fileToUpload"]["name"]). " đã được tải lên thành công.";
        
    } else {
        echo "Xin lỗi, đã có lỗi xảy ra khi bạn tải lên tệp, đề nghị thử lại sau.";
    }
}
?>