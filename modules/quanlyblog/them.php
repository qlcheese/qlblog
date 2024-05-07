<h1>Thêm bài viết</h1>
<table border="1" width="50%" style="border-collapse: collapse;">
<form action="modules/quanlyblog/xuly.php" method="post" enctype="multipart/form-data">
  <tr>
    <th><label for="tenbaiviet">Tên bài viết</label></th>
    <td><input type="text" name="tenbaiviet" id="tenbaiviet"></td>
  </tr>
  <tr>
    <th><label for="tomtat">Tóm tắt</label></th>
    <td><textarea row="10" name="tomtat" id="tomtat" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <th><label for="noidung">Nội Dung</label></th>
    <td><textarea row="10" name="noidung" id="noidung" style="resize: none;"></textarea></td>
  </tr>
  <tr>
    <th><label for="danhmuc">Danh mục bài viết</label></th>
    <td>
      <select name="danhmuc" id="danhmuc">
                    <?php 
                    $sql_danhmuc ="SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                    $query_danhmuc = mysqli_query($conn,$sql_danhmuc);
                    if($query_danhmuc){
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){

                    ?>
                    <option value ="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                    <?php
                    }
                } 
                    ?>
                </select>
                </td>
            </tr>
            <tr>
       
            <tr>
            <td colspan="2"><input type="submit" name="thembaiviet" value="Them bai viet"></td>
            </tr>
</form>

</table>