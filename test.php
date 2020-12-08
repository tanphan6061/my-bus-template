<?php
include "../include/header.php";
?>
<main role="main">
    <div class="container pt-4">
        <div class="row py-3">
            <div class="col">
                <div class="card">
                    <div class="card-header d-flex justify-content-center text-uppercase font-weight-bold text-danger">Thông
                        tin mua vé
                    </div>
                    <div class="card-body bg-light">
                        <p>Thông tin hành khách</p>
                        <div class="card-body bg-white my-2">
                            <div class="row">
                                <div class="col-6 py-1">
                                    <div class="row">
                                        <div class="col-3">Họ tên:</div>
                                        <div class="col-9">Hihi</div>
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <div class="row">
                                        <div class="col-3">Email:</div>
                                        <div class="col-9">Hihi@gmailc.omc</div>
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <div class="row">
                                        <div class="col-3">Số điện thoại:</div>
                                        <div class="col-9">06060606060</div>
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
                                        <div class="col-9">Sài Gòn → Hà Nội</div>
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
                                        <div class="col-3">Thời gian:</div>
                                        <div class="col-9 text-success font-weight-bold">10:00 09/12/2020</div>
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <div class="row">
                                        <div class="col-3">Số ghế:</div>
                                        <div class="col-9 text-success font-weight-bold">B02, B12</div>
                                    </div>
                                </div>
                                <div class="col-6 py-1">
                                    <div class="row">
                                        <div class="col-3">Điểm lên xe:</div>
                                        <div class="col-9">Sài Gòn<br>Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit. Aspernatur atque cum deleniti distinctio, eius ex obcaecati omnis
                                            perspiciatis, qui quos saepe sequi sint soluta veniam voluptas. Est facilis
                                            molestiae officiis.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end align-items-end flex-column mt-3">
                            <div class="h4 font-weight-bold">Tổng tiền</div>
                            <div class="h5 text-danger">340,000 <sup>đ</sup></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-between mx-0 px-0">
            <a href="thongtinkhachhang.php" class="btn btn-dark">< Quay lại</a>
            <a href="" class="btn btn-success">Thanh toán ></a>
        </div>
    </div>
</main>
<?php
include "../include/footer.php";
?>