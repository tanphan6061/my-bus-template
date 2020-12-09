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
                            <a class="text-light" href="capnhatthongtincanhan.php"><i class="fa fa-edit"></i> Cập
                                nhật</a>
                        </div>
                        <div class="card-body">
                            <div class="form-row my-1">
                                <label class="col-3">Họ tên:</label>
                                <input class="form-control col-9" value="<?php echo $_SESSION['me']['ho_ten'] ?>"/>
                            </div>
                            <div class="form-row my-1">
                                <label class="col-3">Email:</label>
                                <input class="form-control col-9" value="<?php echo $_SESSION['me']['email'] ?>"
                                       disabled/>
                            </div>
                            <div class="form-row my-1">
                                <label class="col-3">Số điện thoại:</label>
                                <input class="form-control col-9" value="<?php echo $_SESSION['me']['SDT'] ?>"/>
                            </div>
                            <div class="form-row my-1">
                                <label class="col-3">Số CMND/CC:</label>
                                <input class="form-control col-9" value="<?php echo $_SESSION['me']['CMND'] ?>"/>
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
                            <div class="form-row my-1">
                                <label class="col-3">Địa chỉ:</label>
                                <input class="form-control col-9" value="<?php echo $_SESSION['me']['dia_chi'] ?>"/>
                            </div>
                            <div class="form-row my-1">
                                <button class="btn btn-primary" id="capNhatBtn">Cập nhật</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script>
        let capNhatBtn = $('#capNhatBtn');
        capNhatBtn.click(function () {
            Swal.fire(
                'Cập nhật thành công!',
                'Bạn đã cập nhật thông tin thành công!',
                'success'
            )
            setTimeout(() => {
                window.location.href = "thongtincanhan.php";
            }, 3000);
        })

    </script>
<?php
include "../include/footer.php";
?>