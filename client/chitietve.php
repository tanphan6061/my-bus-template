<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header d-flex justify-content-center text-uppercase font-weight-bold text-danger">
                            Thông tin vé đã đặt
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tbody>
                                    <tr>
                                        <td>Mã vé</td>
                                        <td colspan="5"><strong class="text-primary">35DGZX</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Họ tên</td>
                                        <td colspan="5"><strong><?php echo $_SESSION['me']['ho_ten'] ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td><strong><?php echo $_SESSION['me']['email'] ?></strong></td>
                                        <td>SĐT</td>
                                        <td><strong><?php echo $_SESSION['me']['SDT'] ?></strong></td>
                                        <td>CMND/CC</td>
                                        <td><strong><?php echo $_SESSION['me']['CMND'] ?></strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tuyến đường</td>
                                        <td><strong>VP Sài Gòn → VP Hà Nội</strong></td>
                                        <td>Ngày Đi</td>
                                        <td><strong>09/12/2020</strong></td>
                                        <td>Giờ</td>
                                        <td><strong>02:00</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Biển xố xe</td>
                                        <td><strong>14B-010129</strong></td>
                                        <td>Số ghế</td>
                                        <td><strong>A01, A02</strong></td>
                                        <td>Điểm lên xe</td>
                                        <td colspan="3"><strong>VP Sài Gòn, Phường 26, Bình Thạnh, Thành phố Hồ Chí
                                                Minh</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Giá vé</td>
                                        <td colspan="2"><strong>125.000đ</strong></td>
                                        <td>Hình thức thanh toán</td>
                                        <td colspan="2"><strong>thẻ VISA</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Tổng tiền</td>
                                        <td colspan="5"><strong>250.000đ</strong></td>
                                    </tr>
                                    <tr>
                                        <td>Trạng thái</td>
                                        <td colspan="5">
                                            <span style="color: blue; font-weight: 600;">Đã thanh toán</span>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between mx-0 px-0">
                <a href="lichsudatve.php" class="btn btn-warning">Xem lịch sử đặt vé</a>
            </div>
        </div>
    </main>
<?php
include "../include/footer.php";
?>