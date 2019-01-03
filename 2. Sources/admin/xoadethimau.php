<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xóa đề thi mẫu</title>
</head>
<body>
    <h1>Xóa đề thi mẫu</h1>
    <!-- <form action="delete.php" method="post" enctype="multipart/form-data">
    
    Tên đề thi
    <input type="text" name="namede" id="namede">
    <br>
    <input type="submit" value="Xoá đề thi mẫu" name="submit">
</form> -->
<?php   
    include_once("../dbConnection.php");
    $result = mysqli_query($con,"SELECT * FROM dethimau") or die('Error');
    
        // doan echo sau chi la ve ra tieu de
        echo  '<div class="panel"><table class="table table-striped title1">
        <tr><td>

        <b>STT</b>
        </td><td>
        <b>Tên đề thi mẫu</b>
        </td><td>
        <b>Ghi Chú</b>
        </td><td>
        
        </td></tr>';


        
        while($row = mysqli_fetch_array($result)) {
            $idde = $row['idde'];
            $namede = $row['namede'];
            $linkde = $row['linkde'];
            $notede = $row['notede'];
            
            echo '<tr><td>'.$idde.'</td><td>'.$namede.'</td><td>'.$notede.'</td><td>'.'
            <form action="actiondeletedethimau.php" method="post" enctype="multipart/form-data">
            <input type=textbox hiddnen
            <input type="submit" value="Xoá đề thi mẫu" name="submit">
            </form>
            </td></tr>';
            // $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
            // $rowcount=mysqli_num_rows($q12);
  
            // if($rowcount == 0){
            //     echo '<tr><td>'.$c++.'</td><td>'.$title.'</td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
            //     <td><b><a href="account.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:#99cc32"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Thi</b></span></a></b></td></tr>';
            // }
            // else
            // {
            //     echo '<tr style="color:#99cc32"><td>'.$c++.'</td><td>'.$title.'&nbsp;<span title="Đã làm" class="glyphicon glyphicon-ok" aria-hidden="true"></span></td><td>'.$total.'</td><td>'.$sahi*$total.'</td><td>'.$time.'&nbsp;min</td>
            //     <td><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Thi Lại</b></span></a></b></td></tr>';
            // }
        }

         echo'</table>';

    
    ?>
</body>
</html>