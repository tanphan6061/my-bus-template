<?php
include "../include/header.php";
if (!isset($_SESSION['logged'])):
    header('Location: ../client/login.php');
endif;
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center text-uppercase font-weight-bold text-danger">
                            Thông tin mua vé
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
                                            <div class="col-9">Sài Gòn<br>Lorem ipsum dolor sit amet, consectetur
                                                adipisicing
                                                elit. Aspernatur atque cum deleniti distinctio, eius ex obcaecati omnis
                                                perspiciatis, qui quos saepe sequi sint soluta veniam voluptas. Est
                                                facilis
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
            <div class="row mx-0 px-0">
                <div class="h4 text-center">CHỌN CÁCH THANH TOÁN</div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="card payment">
                        <div class="card-body d-flex flex-column">
                            <!--<div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                       value="customEx">
                                <label class="custom-control-label h5 text-center" for="customRadio2">Thẻ Quốc tế
                                    Visa/Master/JCB</label>
                            </div>-->
                            <p class=" h5 text-center">Thẻ Quốc tế Visa/Master/JCB</p>
                            <div class="d-flex justify-content-center mt-3">
                                <img src="../assets/images/payment/jcb.png" alt="">
                                <img src="../assets/images/payment/mastercard.png" alt="">
                                <img src="../assets/images/payment/visa.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card payment">
                        <div class="card-body d-flex flex-column">
                            <!--<div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                       value="customEx">
                                <label class="custom-control-label h5 text-center" for="customRadio2">Thẻ Quốc tế
                                    Visa/Master/JCB</label>
                            </div>-->
                            <p class=" h5 text-center">Ví Zalo</p>
                            <div class="d-flex justify-content-center mt-3">
                                <img src="../assets/images/payment/zalo.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row my-3">
                <div class="col-6">
                    <div class="card payment">
                        <div class="card-body d-flex flex-column">
                            <!--<div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                       value="customEx">
                                <label class="custom-control-label h5 text-center" for="customRadio2">Thẻ Quốc tế
                                    Visa/Master/JCB</label>
                            </div>-->
                            <p class=" h5 text-center">Ví Momo</p>
                            <div class="d-flex justify-content-center mt-3">
                                <img src="../assets/images/payment/momo.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="card payment">
                        <div class="card-body d-flex flex-column">
                            <!--<div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" id="customRadio2" name="example"
                                       value="customEx">
                                <label class="custom-control-label h5 text-center" for="customRadio2">Thẻ Quốc tế
                                    Visa/Master/JCB</label>
                            </div>-->
                            <p class=" h5 text-center">VNPAY</p>
                            <div class="d-flex justify-content-center mt-3">
                                <img src="../assets/images/payment/vnpay.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-between mx-0 px-0">
                <a href="thongtinkhachhang.php" class="btn btn-dark">< Quay lại</a>
                <button id="thanhtoan" class="btn btn-success" disabled>Thanh toán ></button>
            </div>
        </div>
    </main>
    <script>
        let payments = $('.card.payment');
        let paymentBtn = $('#thanhtoan');
        paymentBtn.click(function () {
            window.location.href = "../client/success.php";
        })
        payments.each((index, item) => {
            item.addEventListener('click', () => {
                unselect();
                paymentBtn.prop('disabled', false)
                $(item).addClass('selected');
                console.log("ok")
            })
        })

        unselect = () => {
            payments.each((index, item) => {
                $(item).removeClass('selected');
            })
        }

    </script>
<?php
include "../include/footer.php";
?>