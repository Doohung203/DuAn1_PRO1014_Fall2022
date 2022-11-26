<?php
session_start();
require('config/database.php');
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    // validate
    if($username == '' || $password == ''){
        if($username == ''){
            $error_username = 'Vui lòng nhập tên đăng nhập !';
        }
        if($password == '') {
            $error_password = 'Vui lòng nhập lại mật khẩu !';
        }
    }else{
        // kiem tra
        $checkUser = $conn->prepare("SELECT * FROM `users` WHERE `username`='$username'");
        $checkUser->execute();
        $user = $checkUser->fetch(PDO::FETCH_ASSOC);
        if($user){
            if($password === $user['password']){
                $_SESSION['username'] = $username;
                if($user['admin'] > 0){
                    $_SESSION['admin'] = $user;
                }
                header("location: /");
            }
        }else{
            $msg_err = 'Tài khoản và mật khẩu không chính xác !';
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
                <?php if(isset($_GET['msg'])):?>
                            <p style="font-size: 20px; font-weight: 600; color: #00483d;"><?=$_GET['msg'];?></p>
                <?php endif ?>
                <?php if(isset($msg_err)):?>
                            <p style="font-size: 20px; font-weight: 600; color: red;"><?=$msg_err;?></p>
                <?php endif ?>
                    <form action="" method="POST">
                        <h2>Đăng Nhập</h2>
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
                        <div class="form-button">
                            <button class="btn-primary" name="login">Đăng Nhập</button>
                            <a href="/register.php" class="btn-danger">Đăng Ký</a>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </article>
<?php
require('layout/footer.php');