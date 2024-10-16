<?php
switch ($_GET['do']) {
    case "title":
        $nav = "標題區";
        break;
    case "mvim":
        $nav = "動畫";
        break;
    case "image":
        $nav = "校園映像";
        break;
}
?>
<h3 class="t botli">新增<?= $nav ?>圖片</h3>
<form action="./api/edit.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <table class="all60">
        <tr>
            <td class="l"><?= $nav ?>圖片:</td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <?php
        if ($_GET['do'] == "title") {
        ?>
            <tr>
                <td class="l"><?= $nav ?>替代文字:</td>
                <td colspan="2"><input type="text" name="text" id=""></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>