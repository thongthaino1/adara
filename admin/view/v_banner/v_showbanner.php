<div class="page-wrapper">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Small Buttons</h5>
<!--                    <button type="button" class="btn btn-primary btn-sm">Primary</button>-->
<!--                    <button type="button" class="btn btn-secondary btn-sm">Secondary</button>-->
<!--                    <button type="button" class="btn btn-success btn-sm">Success</button>-->
<!--                    <button type="button" class="btn btn-danger btn-sm">Danger</button>-->
<!--                    <button type="button" class="btn btn-warning btn-sm">Warning</button>-->
<!--                    <button type="button" class="btn btn-info btn-sm">Info</button>-->
<!--                    <button type="button" class="btn btn-light btn-sm">Light</button>-->
<!--                    <button type="button" class="btn btn-dark btn-sm">Dark</button>-->
<!--                    <button type="button" class="btn btn-link btn-sm">Link</button>-->
                    <button type="button" class="btn btn-primary btn-sm" onclick="window.open('form_basic.php')" value="">Thêm 1 banner mới</button>

                </div>
            </div>
        </div>
    </div>
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-12">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Bảng tiêu đề</h5>
                </div>
                <form method="POST">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Tên</th>
                        <th scope="col">Ảnh</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col" colspan="2">Thao tác</th>
                    </tr>
                    </thead>



                    <tbody>
                    <?php $count = 1;
                    foreach ($listBanner as $key=>$value) {

                    ?>

<!---->
                    <tr>
                        <td scope="row"><?= $count++?></td>

                        <td><img width="100" height="100" src="../public/layouts/imagebanner/<?= $value->hinh?>"></td>
                        <td><?php echo $value->ten_tieu_de;?></td>
                        <td><?php echo ($value->trang_thai == 1)?"Mở":"Khóa";?></td>
                        <td><button type="button" class="btn btn-success btn-sm" onclick="window.open('form_basic.php?id=<?= $value->ma_tieu_de?>','__self')">Sửa</button></td>
                        <td><button type="submit" class="btn btn-danger btn-sm" onclick="deleteTitle('<?= $value->ma_tieu_de?>')">Xóa</button></td>

                    </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
                </form>
                <script type="text/javascript">
                    function deleteTitle(id) {
                        var option = confirm('Bạn có muốn xoá tiêu đề này không');
                        if(!option) {
                            return;
                        }
                        $.post('api/banner/deletebanner.php', {
                            'id': id
                        }, function(data) {
                            alert(data);
                            // location.reload()
                        })
                    }
                </script>
            </div>

        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div></div>