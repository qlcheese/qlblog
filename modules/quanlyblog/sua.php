<?php 
$sql_sua_bv = "SELECT * FROM tbl_baiviet WHERE baiviet_id='{$_GET['baiviet_id']}' LIMIT 1";
$query_sua_bv = mysqli_query($conn, $sql_sua_bv);
?>
<p>Sửa bài viết</p>
<table border="1" width="50%" style="border-collapse: collapse;">
    <?php 
    while ($row = mysqli_fetch_array($query_sua_bv)) {
    ?>
    <form action="modules/quanlyblog/xuly.php?baiviet_id=<?php echo $row['baiviet_id'] ?>" method="post">
        <tr>
            <td>Ten bai viet</td>
            <td><input type="text" value="<?php echo $row['tenbaiviet'] ?>" name="tenbaiviet"></td>
        </tr>
        <tr>
            <td>Tom tat</td>
            <td><textarea rows="10" name="tomtat" style="resize: none"><?php echo $row['tomtat'] ?></textarea></td>
        </tr>
        <tr>
            <td>Noi Dung</td>
            <td><textarea rows="10" name="noidung" style="resize: none"><?php echo $row['noidung'] ?></textarea></td>
        </tr>
        <tr>
            <td>danhmuc bai viet</td>
            <td>
                <select name="danhmuc" id="">
                    <?php 
                    $sql_danhmuc ="SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
                    $query_danhmuc = mysqli_query($conn, $sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_baiviet'] == $row['id_danhmuc']){
                    ?>
                    <option selected value ="<?php echo $row_danhmuc['id_baiviet'] ?>"><?php echo $row_danhmuc['tendanhmuc_baiviet']?></option>
                    <?php
                        } else {
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
            <td>Tinh trang</td>
            <td>
                <select name="tinhtrang" id="">
                    <option value="1"> kich hoat</option>
                    <option value="0"> an </option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suabaiviet" value="sua bai viet"></td>
        </tr>
    </form>
    <?php
    }
    ?>
</table>
