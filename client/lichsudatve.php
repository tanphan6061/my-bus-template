<?php
include "../include/header.php";
?>
    <main role="main">
        <div class="container pt-4">
            <div class="row py-3">
                <div class="col">
                    <div class="card">
                        <div class="card-header bg-info text-light">Lịch sử mua vé</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-check d-flex flex-column">
                                        <label for="ngaydiInput">Ngày đi</label>
                                        <input name="NgayDi" class="form-control" id="ngaydiInput" required/>
                                        <script>
                                            let today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                                            $('#ngaydiInput').datepicker({
                                                uiLibrary: 'bootstrap4',
                                                minDate: today
                                            });
                                        </script>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check d-flex flex-column">
                                        <label for="tuyenDuongInput">Tuyến Đường</label>
                                        <select class="form-control" name="" id="tuyenDuongInput">
                                            <option value="0">Chọn tuyến đường</option>
                                            <option value="1">VP Sài Gòn → VP Hà Nội</option>
                                            <option value="1">VP Hà Nội → VP Sài Gòn</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check d-flex flex-column">
                                        <label for="tuyenDuongInput">&nbsp;</label>
                                        <select class="form-control" name="" id="tuyenDuongInput">
                                            <option value="0">Chọn trạng thái</option>
                                            <option value="1">Đã thanh toán</option>
                                            <option value="2">Chưa thanh toán</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-check d-flex flex-column">
                                        <label for="tuyenDuongInput">Từ khóa</label>
                                        <input type="text" class="form-control" placeholder="Nhập vào mã vé">
                                    </div>
                                </div>
                                <div class="col-1"><label>&nbsp;</label>
                                    <div class="form-group">
                                        <button class="btn btn-success">Tìm</button>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Mã</th>
                                            <th scope="col">SL</th>
                                            <th scope="col">Tuyến</th>
                                            <th scope="col">Ngày đi</th>
                                            <th scope="col">Giờ</th>
                                            <th scope="col">Tổng tiền</th>
                                            <th scope="col">Ngày đặt</th>
                                            <th scope="col">Thanh toán</th>
                                            <th scope="col">Trạng thái</th>
                                            <th scope="col">Tác vụ</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td scope="row">1</td>
                                            <td>35DGZX</td>
                                            <td>2</td>
                                            <td>VP Sài Gòn → VP Hà Nội</td>
                                            <td>09/12/2020</td>
                                            <td>06:00</td>
                                            <td>250.000</td>
                                            <td>01:12 09/12/2020</td>
                                            <td>thẻ VISA</td>
                                            <td>Chờ thanh toán</td>
                                            <td>
                                                <a href="chitietve.php" class="btn btn-outline-primary"><i class="fa fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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