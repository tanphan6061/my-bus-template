<?php
include "../include/header.php";
if (isset($_POST['email'], $_POST['password'])):
    $_SESSION['logged'] = true;
    $_SESSION['me']['email'] = 'lebong.pikachu69@gmail.com';
    $_SESSION['me']['ho_ten'] = 'Lê Bống';
    $_SESSION['me']['dia_chi'] = '70/10 Tô Ký, P.TCH, Q.12, TP.HCM';
    $_SESSION['me']['CMND'] = '123456789';
    $_SESSION['me']['SDT'] = '0989696869';
endif;

if (isset($_SESSION['logged'])):
    header('Location: /client/thongtinkhachhang.php');
endif;
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center h5 font-weight-bold">Tôi đã có tài khoản</p>
                            <form action="" method="POST">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên đăng nhập</label>
                                    <input type="email" value="lebong.pikachu69@gmail.com" name="email"
                                           class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Điền email">
                                    <small id="emailHelp" class="form-text text-muted">Chúng tôi sẽ không bao giờ chia
                                        sẻ email của bạn với bất kỳ ai khác.</small>

                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mật khẩu</label>
                                    <input type="password" value="123456" name="password" class="form-control"
                                           id="exampleInputPassword1" placeholder="Điền mật khẩu">
                                </div>

                                <button type="submit" class="btn btn-primary">Đăng nhập</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-uppercase text-center" style="font-weight: 500">Bạn là một dân chơi hệ
                                    pay acc @@</p>
                                <p class="text-uppercase text-center">Đùa thôi! Bạn chưa có tài khoản?</p>
                                <a href="register.php" class="btn btn-success my-2">Đăng ký</a>
                                <p class="text-center">Đăng ký ngay đi, sợ gì mà không triển?</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
<?php
include "../include/footer.php";
?>