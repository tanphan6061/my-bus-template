<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <img src="../assets/images/lorem.png" alt="">
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-center h5 font-weight-bold">Đăng ký</p>
                            <form action="login.php">
                                <div class="form-group">
                                    <label for="inputName">Họ tên <span class="text-danger">*</span></label>
                                    <input type="text" value="Lê Bống" class="form-control" id="inputName" placeholder="Điền họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="inputEmail4">Email <span class="text-danger">*</span></label>
                                    <input type="email" value="lebong.pikachu69@gmail.com" class="form-control" id="inputEmail4" placeholder="Email">
                                </div>
                                <div class="form-row">

                                    <div class="form-group col-md-6">
                                        <label for="inputPassword4">Mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" value="123456" class="form-control" id="inputPassword4"
                                               placeholder="**********">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputPassword5">Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                        <input type="password" value="123456" class="form-control" id="inputPassword5"
                                               placeholder="**********">
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="inputPhone">Số điện thoại <span class="text-danger">*</span></label>
                                        <input type="text" value="0989696869" class="form-control" id="inputPhone"
                                               placeholder="Điền số điện thoại">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputID">Số CMND <span class="text-danger">*</span></label>
                                        <input type="text" value="123456789" class="form-control" id="inputID" placeholder="Điền số CMND">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Địa chỉ <span class="text-danger">*</span></label>
                                    <input type="text" value="70/10 Tô Ký, P.TCH, Q.12, TP.HCM" class="form-control" id="inputAddress"
                                           placeholder="1234 Main St">
                                </div>
                                <button type="submit" class="btn btn-primary">Đăng ký</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--        <div class="row justify-content-between mx-0 px-0">-->
            <!--            <a href="../index.html" class="btn btn-dark">< Quay lại</a>-->
            <!--            <a href="login.html" class="btn btn-success">Tiếp tục ></a>-->
            <!--        </div>-->
        </div>
    </main>
<?php
include "../include/footer.php";
?>