<?php
switch ($_GET['do']) {
    case "title":
        $tit = "標題區";
        break;
    case "image":
        $tit = "校園區";
        break;
    case "mvim":
        $tit = "動畫";
}
?>
<h2 class="cent">更換<?= $tit ?>圖片</h2>
<hr>
<form action="./api/update.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <table style="width:80%;margin:auto">
        <tr>
            <td><?= $tit ?>圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <tr>
            <td colspan="2" sytle="text-align:start"><input type="submit" value="更換"><input type="reset" value="重置">
            </td>
            <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
        </tr>
    </table>
</form>