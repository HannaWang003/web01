<?php
switch ($_GET['do']) {
    case "title":
        $page = "標題區";
        break;
    case "mvim":
        $page = "動畫";
        break;
}
?>
<p class="t cent botli">更新<?= $page ?>圖片</p>
<form action="../api/upload.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <table style="margin:auto;">
        <tr>
            <td style="text-align:end"><?= $page ?>圖片：</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="更新"><input type="reset" value="重置"></td>
        </tr>
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    </table>
</form>