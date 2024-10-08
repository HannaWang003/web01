<?php
switch ($_GET['do']) {
    case "ad":
        $nav = "動態文字廣告";
        $text = "<input type='text' name='text' style='width:90%'>";
        break;
    case "news":
        $nav = "最新消息資料";
        $text = "<textarea name='text' style='width:90%;height:50px;'></textarea>";
        break;
}
?>
<h2 class="t cent botli">新增<?= $nav ?></h2>
<form method="post" action="./api/edit.php?do=<?= $_GET['do'] ?>">
    <table width="60%" style="margin:auto">
        <tr>
            <td><?= $nav ?> : </td>
            <td><?= $text ?></td>
        </tr>
        <tr>
            <td><input type="submit" value="新增"><input type="reset" value="重置"></td>
            <td></td>
        </tr>
    </table>
</form>