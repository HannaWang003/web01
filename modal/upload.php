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
<h2 class="cent">新增<?= $tit ?>圖片</h2>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <table style="width:80%;margin:auto">
        <tr>
            <td style="text-align:end"><?= $tit ?>圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <?php
        if ($_GET['do'] == "title") {
        ?>
            <tr>
                <td style="text-align:end"><?= $tit ?>替代文字:</td>
                <td><input type="text" name="text" id=""></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td colspan="2" sytle="text-align:start"><input type="submit" value="新增"><input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>