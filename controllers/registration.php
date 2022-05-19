<?php
    session_start();
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../phpmailer/Exception.php';
    require '../phpmailer/PHPMailer.php';
    require '../phpmailer/SMTP.php';
    // Cách xem cấu trúc đầy đủ 1 MẢNG
    // echo "<pre>";
    //     echo print_r($_POST);
    // echo "</pre>";

    // Lấy giá trị từ FORM gửi sang và lưu vào BIẾN:
    $username = $_POST['name'];
    $email      = $_POST['email'];
    $password      = $_POST['password'];
    $confirm_password     = $_POST['RePassword'];
    //Giả sử pass1 nhập trùng pass2 (sau này dùng Javascript để kiểm tra)

    // QUY TRÌNH 4 bước:
    // Bước 01:



	include("../config/config.php");




        // Bước 02: Xử lý truy vấn
    $sql_1 = "SELECT * FROM khach WHERE Emailkh='$email'";
    $result_1 = mysqli_query($conn,$sql_1);
    if(mysqli_num_rows($result_1) > 0){
        $_SESSION['error2'] = 'Email đã tồn tại';
                header("location: ../registration.php");
        
    }else{
        $username = $conn -> real_escape_string($username);
        $email = $conn -> real_escape_string($email);
        $password = $conn -> real_escape_string($password);
        $confirm_password = $conn -> real_escape_string($confirm_password);

        $varkey = md5(time().$username);
        // Bước 02.2 - Chèn dữ liệu đăng kí vào BẢNG
        // Mật khẩu phải được BĂM
        $password_hash = md5($password);
        // echo $pass_hash;
        $sql_2="INSERT INTO khach(TenKh, Emailkh,Passwordkh,varkey) VALUES ('$username','$email','$password_hash','$varkey')";
        $result_2 = mysqli_query($conn,$sql_2);  //Đối với lệnh INSERT, nếu CHÈN THÀNH CÔNG, nó trả về số NGUYÊN

        if($result_2>0){
            $_SESSION['error2'] = 'Đăng ký thành công!';
                header("location: ../registration.php");

            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
                $mail->isSMTP();// gửi mail SMTP
                $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
                $mail->SMTPAuth = true;// Enable SMTP authentication
                $mail->Username = 'tronghoang19112001@gmail.com';// SMTP username
                $mail->Password = 'TranThiYen1901'; // SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
                $mail->Port = 587; // TCP port to connect to
                $mail->CharSet = 'UTF-8';
                //Recipients
                $mail->setFrom('tronghoang19112001@gmail.com', 'Karma Shop');
    
                $mail->addReplyTo('tronghoang19112001@gmail.com', 'Karma Shop');
    
                $mail->addAddress($email); // Add a recipient
    
                // Attachments
                // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    
    
                // Content
                $mail->isHTML(true);   // Set email format to HTML
                $tieude = '[Thông báo] Xác minh tài khoản';
                $mail->Subject = $tieude;
    
                // Mail body content 
                $bodyContent = '<p>Bạn đã đăng ký thành công</b></h1>'; 
                $bodyContent .= '<p> Để kích hoạt tài khoản bạn vui lòng click vào đường link bên dưới </p>';
                $bodyContent .= "<p><a href = 'http://localhost:8080/ShopGiayN6/controllers/active.php?varkey=$varkey'>Click here</a></p>"; 
                $mail->Body = $bodyContent;
                // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
                if($mail->send()){
                    echo 'Thư đã được gửi đi';
                }else{
                    echo 'Lỗi. Thư chưa gửi được';
                }  
    
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
                
         
            }
    }

    ?> 