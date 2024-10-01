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
<h1 class="cent">新增<?= $nav ?>圖片</h1>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <table width="60%" style="margin:auto">
        <tr>
            <td style="text-align:end"><?= $nav ?>圖片 : </td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <?php
        if ($_GET['do'] == "title") {
        ?>
            <tr>
                <td style="text-align:end"><?= $nav ?>替代文字 : </td>
                <td><input type="text" name="text" id=""></td>
            </tr>
        <?php
        }

        ?>
        <tr>
            <td colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>