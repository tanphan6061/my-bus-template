<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center text-uppercase font-weight-bold text-danger">
                            Thanh toán thành công
                        </div>
                        <div class="card-body bg-light">
                            <div class="card-body  bg-white my-2 d-flex flex-column">
                                <div class="d-flex flex-column">
                                    <i class="fa fa-check-circle-o fa-5 text-center text-success" aria-hidden="true"></i>
                                    <p class="text-success text-center font-weight-bold">Thanh toán thành công, cám ơn bạn đã sử dụng dịch vụ của chúng tôi!</p>
                                </div>
                            </div>
                            <div class="card-body bg-white my-2 d-flex flex-column">
                                <div class="row">
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-4">Thời gian đặt vé:</div>
                                            <div class="col-8">01:12 09/12/2020</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Mã vé:</div>
                                            <div class="col-9 font-weight-bold text-warning">35DGZX</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Thông tin hành khách</p>
                            <div class="card-body bg-white my-2">
                                <div class="row">
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Họ tên:</div>
                                            <div class="col-9"><?php echo $_SESSION['me']['ho_ten'] ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Email:</div>
                                            <div class="col-9"><?php echo $_SESSION['me']['email'] ?></div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Số điện thoại:</div>
                                            <div class="col-9"><?php echo $_SESSION['me']['SDT'] ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p>Thông tin vé</p>
                            <div class="card-body bg-white">
                                <div class="row">
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Tuyến đường:</div>
                                            <div class="col-9">VP Sài Gòn → VP Hà Nội</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Biển số xe:</div>
                                            <div class="col-9">14B-010129</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Số lượng ghế:</div>
                                            <div class="col-9">2</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-4">Thời gian khởi hành:</div>
                                            <div class="col-8 text-success font-weight-bold">06:00 09/12/2020</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Số ghế:</div>
                                            <div class="col-9 text-success font-weight-bold">A01, A02</div>
                                        </div>
                                    </div>
                                    <div class="col-6 py-1">
                                        <div class="row">
                                            <div class="col-3">Điểm lên xe:</div>
                                            <div class="col-9">VP Sài Gòn, Phường 26, Bình Thạnh,<br> Thành phố Hồ Chí Minh
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end align-items-end flex-column mt-3">
                                <div class="h4 font-weight-bold">Tổng tiền</div>
                                <div class="h5 text-danger">250,000 <sup>đ</sup></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
    <script>
        Swal.fire(
            'Thành công!',
            'Bạn đã thanh toán dịch vụ thành công',
            'success'
        )
    </script>
<?php
include "../include/footer.php";
?>