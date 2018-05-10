<?php
//Yêu cầu bài toán : Lớp PHÂN SỐ ( Tử số - mẫu số)
// Lớp phân số có các phương thức :
// 1.TÌM USCLN ,
//  2TỐI GIẢN PHÂN SỐ
// 3TÍNH TỔNG/ HIỆU /TÍCH /THUONG  2 PHÂN SỐ
//BÀI LÀM :
class PHANSO{
    //Khai báo thuộc tính
    var $tuSo;
    var $mauSo ;
    // Gán và lấy giá trị của các thuộc tính
    function  get_Tu_So(){
        return  $this->tuSo;
    }
    function get_Mau_So(){
        return $this->mauSo;
    }
    function set_Tu_So($value){
        $this->tuSo = $value;
    }
    function set_Mau_So($value){
        $this->mauSo = $value;
    }
    //Xây dựng phương thức cho lớp PHÂN SO ;
    function khoi_Tao_Phan_So($pTu_So , $pMau_So){
        $this->tuSo = $pTu_So;
        $this->mauSo = $pMau_So;
    }
    // Tìm USCLN
    function tim_USCLN($a,$b){
        $so_nho = ($a < $b ) ? $a:$b;
        for($i = $so_nho ; $i>0 ; $i--){
            if($a % $i == 0 && ($b%$i == 0)){
                return $i;
                break;
            }
        }
    }

    //tối giản 2 phân số ;'
    function toi_Gian_Phan_So(){
        $uscln = $this->tim_USCLN($this -> tuSo , $this->mauSo);
        return ($this->tuSo = $this->tuSo/$uscln)."/".( $this->mauSo = $this->mauSo/$uscln);
    }

}
?>

<?php
// Test Phân số  USCLN và tối giản phân số
$phan_so = new PHANSO();
$phan_so->tuSo =3;
$phan_so->mauSo = 6;
$phan_so->khoi_Tao_Phan_So($phan_so->tuSo , $phan_so->mauSo);
$USCLN = $phan_so->tim_USCLN($phan_so->tuSo , $phan_so->mauSo);
echo "<p>USCLN của ".$phan_so->tuSo."và".$phan_so->mauSo."Là : ".$USCLN."</p> \n";

echo "<p>Phân số sau khi tối giản là : ".$phan_so->toi_Gian_Phan_So();" </p> \n"



?>
