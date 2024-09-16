<?php
switch ($_GET['do']) {
    case "ad":
        $tit = "動態文字廣告";
        $input = "<input type='text' name='text' style='width:80%;'>";
        break;
    case "news":
        $tit = "最新消息資料";
        $input = "<textarea name='text'  style='width:80%;height:100px;'></textarea>";
        break;
}
?>
<h2 class="cent">新增<?= $tit ?></h2>
<hr>
<form action="./api/add.php?do=<?= $_GET['do'] ?>" method="post">
    <table style="width:80%;margin:auto">
        <tr>
            <td style="text-align:end"><?= $tit ?>:</td>
            <td>
                <?= $input ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置">
            </td>
        </tr>
    </table>
</form>