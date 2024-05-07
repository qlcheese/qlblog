<?php
$sql_lietke_bv = "SELECT * FROM tbl_baiviet 
                   INNER JOIN tbl_danhmucbaiviet ON tbl_baiviet.id_danhmuc = tbl_danhmucbaiviet.id_baiviet
                   ORDER BY tbl_baiviet.baiviet_id DESC";
$query_lietke_bv = mysqli_query($conn, $sql_lietke_bv);

if (!$query_lietke_bv) {
  echo "Lỗi lấy dữ liệu: " . mysqli_error($conn);
  exit(); // Hoặc chuyển hướng đến trang lỗi
}

?>
<p>Liệt kê  bài viết</p>
<table border="1" width="50%" style="border-collapse: collapse;">

  <tr>
    <th>id</th>
    <th>Tên bài viết</th>
    <th>Danh Mục</th>
    <th>Tóm tắt</th>
    <th>Nội Dung</th>
  </tr>

<?php
$i = 0;
while ($row = mysqli_fetch_array($query_lietke_bv)) {
  $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php echo $row['noidung'] ?></td>
  
    <td><a style ="color: red;" href="modules/quanlyblog/xuly.php?baiviet_id=<?php echo $row['baiviet_id'] ?>">Xóa</a> 
        <a href="?action=quanlyblog&query=sua&baiviet_id=<?php echo $row['baiviet_id'] ?>">Sửa</a></td>
  </tr>
  <?php
}
?>
</table>
