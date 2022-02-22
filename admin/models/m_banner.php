<?php
require_once ("database.php");
class m_banner extends database{
    public function insertBanner($ten_tieu_de,$hinh_anh,$trang_thai){
        $sql = "INSERT INTO  tieu_de(ten_tieu_de,hinh,trang_thai) value (?,?,?)";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de,$hinh_anh,$trang_thai));


    }
    public function selectAll(){
        $sql = "Select * from tieu_de";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }
    public function selectOne($id){

        $sql = "Select * from tieu_de where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function updateBanner($ten_tieu_de,$hinh_anh,$trang_thai,$id)
    {
        $sql = "UPDATE tieu_de set ten_tieu_de=? , hinh =?, trang_thai = ? where ma_tieu_de = ?";
        $this->setQuery($sql);
        return $this->execute(array($ten_tieu_de, $hinh_anh, $trang_thai,$id));
    }
        public function deleteBanner(){

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $sql = 'delete from tieu_de where ma_tieu_de = ' . $id;
            $this->setQuery($sql);
            return $this->execute();

        }
    }
}