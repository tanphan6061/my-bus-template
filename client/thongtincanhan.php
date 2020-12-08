<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-info text-light d-flex justify-content-between">
                            <div>Thông tin cá nhân</div>
                            <a class="text-light" href="capnhatthongtincanhan.php"><i class="fa fa-edit"></i> Cập nhật</a>
                        </div>
                        <div class="card-body">
                            <div class="row my-1">
                                <div class="col-3">Họ tên:</div>
                                <div class="col-9"><?php echo $_SESSION['me']['ho_ten'] ?></div>
                            </div>
                            <div class="row my-1">
                                <div class="col-3">Email:</div>
                                <div class="col-9"><?php echo $_SESSION['me']['email'] ?></div>
                            </div>
                            <div class="row my-1">
                                <div class="col-3">Số điện thoại:</div>
                                <div class="col-9"><?php echo $_SESSION['me']['SDT'] ?></div>
                            </div>
                            <div class="row my-1">
                                <div class="col-3">Số CMND/CC:</div>
                                <div class="col-9"><?php echo $_SESSION['me']['CMND'] ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-info text-light">
                            Thông tin địa chỉ
                        </div>
                        <div class="card-body">
                            <div class="row my-1">
                                <div class="col-3">Địa chỉ:</div>
                                <div class="col-9"><?php echo $_SESSION['me']['dia_chi'] ?></div>
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