<?php
session_start();
if (!isset($_SESSION["MaKh"]))

    header("location:login.php");
$link = new mysqli('localhost', 'root', '', 'shopbangiay', '3308') or die('failed');
mysqli_query($link, 'SET NAMES UTF8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Karma Shop</title>
</head>

<body>
    <div id="main-contain">
        <h2>Thêm Đánh Giá</h2>

        <div class="form">
            <span style="font-size: 20px; color: red; font-style: italic"><b>Mời nhập thông tin đánh giá : </b> </span> </br>
            (Chú ý điền đủ thông tin)
            </br></br>
            <form method="post">
                <table>
                    <tr>
                        <td>Tiêu Đề :</td>
                        <td> <input type="text" name="tieude"></td>
                    </tr>
                    <tr>
                        <td>Nội dung :</td>
                        <td> <input id="nd" type="text" name="noidung"></td>
                    </tr>
                    <tr>
                        <td colspan=2>
                            <input id="btnChapNhan" type="submit" value="Hoàn tất" name="themdanhgia" />
                        </td>
                    </tr>
                </table>

            </form>



            <?php
            $link = new mysqli('localhost', 'root', '', 'shopbangiay', '3308') or die('kết nối thất bại ');
            mysqli_query($link, 'SET NAMES UTF8');

            if (isset($_POST['themdanhgia'])) {
                if (empty($_POST['tieude']) or empty($_POST['noidung'])) {
                    echo '</br> <p style="color:red; "> Bạn chưa nhập thông tin đầy đủ ! </p> </br>';
                } else {
                    $tieude = $_POST['tieude'];
                    $noidung = $_POST['noidung'];
                    $query = "INSERT INTO `tintuc`( `tieude`, `noidung`) VALUES('$tieude','$noidung')";
                    mysqli_query($link, $query) or die("thêm dữ liệu thất bại");
                    header('location:./single-product.php');
                }
            }

            ?>
            <br>Chọn menu bên trái hoặc click vào <a href="./single-product.php" style="color: blue; text-decoration:underline;font-weight:bold;">đây</a> để quay lại thông báo.

        </div>
</body>

</html>