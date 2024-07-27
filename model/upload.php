<?php
include_once "../api/db.php";
$table = $_GET['table'];
$DB = ${ucfirst($table)};
switch ($table) {
    case "title":
        $str = "標題區";
        break;
    case "mvim":
        $str = "動畫";
        break;
    case "image":
        $str = "校園映像資料";
        break;
}
?>
<h2 class="t cent botli">更換<?= $str ?>圖片</h2>
<form method="post" action="./api/upload.php" method="post" enctype="multipart/form-data" style="width:60%;margin:auto;">
    <table>
        <tr>
            <td style="text-align:end"><?= $str ?>圖片：</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?= $table ?>">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div><input type="submit" value="更換"><input type="reset" value="重置"></div>
</form>