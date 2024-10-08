<?php
switch ($_GET['do']) {
    case "title":
        $nav = "標題區";
        break;
    case "mvim":
        $nav = "動畫";
        break;
}
?>
<h2 class="t cent botli">新增<?= $nav ?>圖片</h2>
<form method="post" action="./api/upload.php?do=<?= $_GET['do'] ?>" enctype="multipart/form-data">
    <table width="60%" style="margin:auto">
        <tr>
            <td><?= $nav ?>圖片 : </td>
            <td><input type="file" name="img" id=""></td>
        </tr>
        <?php
        if ($_GET['do'] == "title") {
        ?>
            <tr>
                <td><?= $nav ?>替代文字 : </td>
                <td><input type="text" name="text" id=""></td>
            </tr>
        <?php
        }
        ?>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>