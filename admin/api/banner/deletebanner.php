<?php
include_once "../../models/m_banner.php";
if (isset($_POST['id'])) {
    $m = new m_banner();
    $id = $_POST['id'];
    $sql = 'DELETE from tieu_de where ma_tieu_de = ' . $id;
    $m->setQuery($sql);
    $deletebanner =  $m->execute();
    if ($deletebanner) {
        echo "Xóa thành công";
    } else {
        echo "Không xóa được";
    }







}