<?php
session_start();
require('config/database.php');
if(isset($_POST['register'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    //validate
    if($email == '' || $username == '' || $password == '' || $repassword == '' || $password !== $repassword){
        if($email == '') {
            $error_email = 'Vui lòng nhập email !';
        }elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error_email = 'Vui lòng nhập email hợp lệ !';
        }
        if($username == ''){
            $error_username = 'Vui lòng nhập tên đăng nhập !';
        }
        if($password !== $repassword) {
            $error_password = 'Mật khẩu và mật khẩu nhập lại không khớp !';
        }elseif($password == '') {
            $error_password = 'Vui lòng nhập mật khẩu !';
        }
        if($repassword == '') {
            $error_password = 'Vui lòng nhập lại mật khẩu !';
        }
    }else{
        //check tồn tại
        $checkUser = $conn->prepare("SELECT * FROM `users` WHERE `username`='$username'");
        $checkUser->execute();
        $user = $checkUser->fetch(PDO::FETCH_ASSOC);
        if(!$user){
            //insert vào database
            $insertUser = $conn->prepare("INSERT INTO `users`(`username`, `password`, `admin`, `email`, `avatar`, `address`) VALUES ('$username','$password','0','$email','','')");
            $insertUser->execute();
            $message = 'Đăng ký thành công !';
            header("location: login.php?msg=$message");
        }else{
            $error_username = 'Tên đăng nhập đã tồn tại ! Vui lòng chọn tên khác';
        }
    }

}
require('layout/header.php');
?>
    <article>
        <section class="container">
            <div class="login-bg">
                <img src="/images/login-bg.png" alt="">
                <div class="login-form">
                    <form action="" method="POST">
                        <h2>Đăng Ký</h2>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" value="<?php if(isset($email)) echo $email ?>">
                            <?php if(isset($error_email)): ?>
                                <p style="color:red"><?=$error_email;?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Tên đăng nhập</label>
                            <input type="text" name="username" value="<?php if(isset($username)) echo $username ?>">
                            <?php if(isset($error_username)): ?>
                                <p style="color:red"><?=$error_username;?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Mật khẩu</label>
                            <input type="password" name="password" value="<?php if(isset($password)) echo $password ?>">
                            <?php if(isset($error_password)): ?>
                                <p style="color:red"><?=$error_password;?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-group">
                            <label for="">Nhập lại mật khẩu</label>
                            <input type="password" name="repassword" value="<?php if(isset($repassword)) echo $repassword ?>">
                            <?php if(isset($error_repassword)): ?>
                                <p style="color:red"><?=$error_repassword;?></p>
                            <?php endif ?>
                        </div>
                        <div class="form-button">
                            <button class="btn-primary" name="register">Đăng Ký</button>
                            <a href="/login.php " class="btn-danger">Đăng Nhập</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </article>
<?php
require('layout/footer.php');