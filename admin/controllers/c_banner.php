<?php
session_start();
include_once ("models/m_banner.php");
class c_banner
{

    public function updateBanner()
    {

        $s_hinh_anh = $s_ten_tieu_de = $s_trang_thai = $s_id = "";
        $m_banner = new m_banner();

        if (isset($_GET['id'])) {
            $s_id = $_GET['id'];
            $resultSelect = $m_banner->selectOne($s_id);

            if($resultSelect){
                $s_id = $resultSelect->ma_tieu_de;
                $s_ten_tieu_de = $resultSelect->ten_tieu_de;
                $s_hinh_anh = $resultSelect->hinh;
                $s_trang_thai = $resultSelect->trang_thai;

            }else{
                $s_id = "";
            }


        }
        if (isset($_POST['submitForm'])) {

            $ten_tieu_de = $_POST['ten_tieu_de'] != "" ? $_POST['ten_tieu_de'] : "";
            $hinh_anh = ($_FILES['hinh_anh']['error'] == 0) ? $_FILES["hinh_anh"]['name'] : "";
            $status = ($_POST['trang_thai'] != "") ? $_POST['trang_thai'] : "";
            if (!empty($s_id)) {
                $id =  $_POST['id'] != "" ? $_POST['id'] : "";
                if(!empty($hinh_anh)){
                    $resultUpdate = $m_banner->updateBanner($ten_tieu_de,$hinh_anh, $status, $id);
                }else{
                    $resultUpdate = $m_banner->updateBanner($ten_tieu_de,$s_hinh_anh, $status, $id);
                }

                if ($resultUpdate) {
                    if ($hinh_anh != "") {
                        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/layouts/imagebanner/$hinh_anh");
                    }
                    $_SESSION['message'] = "Cập nhật thành công";
                } else {
                    $_SESSION['message'] = "Cập nhật thất bại";
                }
                  header("Location:table.php");
//                var_dump($_SESSION['message']);

            } else {
                $resultInsert = $m_banner->insertBanner($ten_tieu_de, $hinh_anh, $status);
                if ($resultInsert) {
                    if ($hinh_anh != "")
                        move_uploaded_file($_FILES['hinh_anh']['tmp_name'], "../public/layouts/imagebanner/$hinh_anh");
                    echo "<script>alert('Thêm thành công');</script>";
                } else {
                    echo "<script>alert('Thêm thất bại');</script>";
                    return;
                }
//                header("Location:table.php");
            }

        }

            $view = "view/v_banner/v_addbanner.php";
            include_once "templates/layouts.php";
        }


        public function showBanner()
        {

            if(isset($_SESSION['message'])){
                echo "<script type='text/javascript'> alert('" . $_SESSION['message'] . "'); </script>";
                //to not make the error message appear again after refresh:
                unset($_SESSION['message']);
            }
            $m_banner = new m_banner();
            $listBanner = $m_banner->selectAll();
            $view = "view/v_banner/v_showbanner.php";
            include_once "templates/layouts.php";


        }

        public function deleteBanner()
        {
            $m_banner = new m_banner();
            $deletebanner = $m_banner->deleteBanner();

            if ($deletebanner) {
                echo "Xóa thành công";
            } else {
                echo "Không xóa được";
                return;
            }
        }



}
