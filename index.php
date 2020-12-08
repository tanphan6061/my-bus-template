<?php
include "include/header.php" ?>
<main role="main">
    <?php include "include/carousel.php" ?>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <form class="form-inline" action="client/muave.php">
                            <div class="form-check">
                                <label for="DiInput">Điểm đi</label>
                                <select name="DiemDi" class="form-control mx-sm-3" id="DiInput">
                                    <option value="1">Hà Nội</option>
                                    <option value="2">Sài Gòn</option>
                                </select>
                            </div>

                            <div class="form-check">
                                <label for="DenInput">Điểm đến</label>
                                <select name="DiemDen" class="form-control mx-sm-3" id="DenInput">
                                    <option value="2">Sài Gòn</option>
                                    <option value="1">Hà Nội</option>
                                </select>
                            </div>
                            <div class="form-check">
                                <label for="ngaydiInput">Ngày đi</label>
                                <input name="NgayDi" class="form-control ml-sm-3" id="ngaydiInput" required/>
                                <script>
                                    let today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
                                    $('#ngaydiInput').datepicker({
                                        uiLibrary: 'bootstrap4',
                                        minDate: today
                                    });
                                </script>
                            </div>

                            <button type="submit" class="btn flex-grow-1 btn-primary mx-2 text-uppercase">tìm chuyến
                                xe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include "include/footer.php"; ?>
</body>
</html>
