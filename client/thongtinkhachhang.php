<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body bg-light">
                            <p class="text-center text-danger h5 font-weight-bold">THÔNG TIN KHÁCH HÀNG</p>
                            <form>
                                <div class="form-group">
                                    <label for="inputName">Họ và tên khách hàng <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputName" aria-describedby="nameHelp"
                                           placeholder="Điền họ tên">
                                </div>
                                <div class="form-group">
                                    <label for="inputPhone">Số điện thoại <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputPhone" aria-describedby="PhoneHelp"
                                           placeholder="Điền số điện thoại">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                           aria-describedby="emailHelp" placeholder="Điền Email">
                                </div>
                                <div class="form-group">
                                    <label for="inputAddress">Địa chỉ <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="inputAddress" placeholder="Điền địa chỉ">
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required checked>
                                    <label class="form-check-label" for="exampleCheck1">Bạn đã chấp nhận điều khoản của chúng tôi</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column justify-content-center">
                                <p class="text-uppercase h5 text-danger text-center font-weight-bold">Điều khoản và lưu ý</p>
<!--                                <p>(*) Quý khách vui lòng mang email có chứa mã vé đến văn phòng để đổi vé lên xe trước giờ xuất-->
<!--                                    bến ít nhất 60 phút để chúng tôi trung chuyển.</p>-->
                                <p>(*) Thông tin hành khách phải chính xác, nếu không sẽ không thể lên xe hoặc hủy/đổi vé.</p>
                                <p>(*) Quý khách không được đổi/trả vé vào các ngày Lễ Tết (ngày thường quý khách được quyền
                                    chuyển đổi hoặc hủy vé một lần duy nhất trước giờ xe chạy 24 giờ), phí hủy vé 10%.</p>
<!--                                <p>(*) Nếu quý khách có nhu cầu trung chuyển, vui lòng liên hệ số điện thoại 1900 1000 thấy trước khi-->
<!--                                    đặt vé. Chúng tôi không đón/trung chuyển tại những điểm xe trung chuyển không thể tới-->
<!--                                    được.</p>-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mx-0 px-0">
                <a href="muave.php" class="btn btn-dark">< Quay lại</a>
                <a href="payment.php" class="btn btn-success">Tiếp tục ></a>
            </div>
        </div>
    </main>
<?php
include "../include/footer.php";
?>