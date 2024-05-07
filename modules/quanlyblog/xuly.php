 <?php
include ('D:\xampp\htdocs\lasttime\connect.php');
$tenbaiviet = $_POST['tenbaiviet'];
$tomtat = $_POST['tomtat'];
$noidung = $_POST['noidung'];

$danhmuc = $_POST['danhmuc'];

if(isset($_POST['thembaiviet'])){
    
    $sql_them = "INSERT INTO tbl_baiviet(tenbaiviet, tomtat, noidung, id_danhmuc) VALUES ('$tenbaiviet', '$tomtat', '$noidung', '$danhmuc')";

    mysqli_query($conn,$sql_them);
    header('Location:../../index.php?action=quanlyblog&query=them');
}elseif(isset($_POST['suabaiviet'])){
    $baiviet_id = $_GET['baiviet_id'];
    $sql_sua = "UPDATE tbl_baiviet SET tenbaiviet='$tenbaiviet', tomtat='$tomtat', noidung='$noidung',  id_danhmuc='$danhmuc' WHERE baiviet_id='$baiviet_id'";

    $sql = "SELECT * FROM tbl_baiviet WHERE id = '$_GET[baiviet_id]'LIMIT 1";
    //$query = mysqli_query($conn,$sql);
    mysqli_query($conn,$sql_sua);
    header('Location:../../index.php?action=quanlyblog&query=them');
    
}
else{

    $baiviet_id = $_GET['baiviet_id'];
        $sql_xoa = "DELETE FROM tbl_baiviet WHERE baiviet_id ='$baiviet_id' LIMIT 1";
        mysqli_query($conn,$sql_xoa);
        header('Location:../../index.php?action=quanlyblog&query=them');

} 
