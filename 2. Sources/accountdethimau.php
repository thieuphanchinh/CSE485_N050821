<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/dethimau.css">
    <link rel="stylesheet" href="./assets/css/accountchinh.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/accountdethimauchinh.css">
</head>
<body>

<nav class="navbar navbar-light navbar-expand-md navigation-clean-search">
        <div class="container"><a class="navbar-brand" href="#">Thi</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="account.php?q=1">Trang chủ</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="account.php?q=2">Lịch sử</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="account.php?q=3">Xếp hạng</a></li>

                    <li class="dropdown"><a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="#">Tiện ích </a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="updatepersonalinformation.php">Thông tin cá nhân</a><a class="dropdown-item" role="presentation" href="#">Sửa ...</a>
                        <a class="dropdown-item" role="presentation" href="accountdethimau.php">Đề thi mẫu cuối kì</a>
                        <a class="dropdown-item" role="presentation" href="#">Phản hồi</a></div>
                    </li>
                </ul>
                <div class="search-container">
                    <form action="/action_page.php">
                        <input type="text" placeholder="Tìm kiếm đề thi mẫu" name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>

        </div>
    </nav>

    <?php
    include_once("./user/userlogout.php");
    ?>
    <h1>Đề thi mẫu cuối kì</h1>

    <?php
include_once("dbConnection.php");
$sql = "SELECT * FROM dethimau";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "STT: " . $row["idde"]. " - Tên đề thi: " . $row["namede"].  "  - Ghi chú" . $row["notede"] . " <br> ";
        $linkde=$row["linkde"];
        echo '<img class="imgde" src="./uploads/'.$linkde.'" />   <br> ';


    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
</body>
</html>