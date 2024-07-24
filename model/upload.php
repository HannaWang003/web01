<?php
$table = $_GET['table'];
$id = $_GET['id'];
switch ($table) {
    case "title":
        $str = "標題區圖片";
        break;
    case "mvim":
        $str = "動畫圖片";
        break;
    case "image":
        $str = "校園映像區圖片";
        break;
}
?>
<form method="post" action="../api/upload.php" method="post" enctype="multipart/form-data">
    <h2 class="t botli">更新<?= $str ?></h2>
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end"><?= $str ?> ：</td>
            <td><input name="img" autofocus="" type="file"></td>
        </tr>
        <tr>
            <td colspan="2"><input value="更新" type="submit"><input type="reset" value="重置"></td>
        </tr>
    </table>
    <input type="hidden" name="table" value="<?= $table ?>">
    <input type="hidden" name="id" value="<?= $id ?>">
</form>