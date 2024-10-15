<?php
switch ($_GET['do']) {
    case "ad":
        $nav = "動態文字廣告";
        break;
    case "news":
        $nav = "最新消息資料";
        break;
}
?>
<form action="../api/edit.php?do=<?= $_GET['do'] ?>" method="post">
    <p class="t botli">新增<?= $nav ?></p>
    <p class='cent'><?= $nav ?> ：
        <?= ($_GET['do'] == "ad") ? "<input name='text' type='text' style='width:50%;'>" : "<textarea name='text' style='width:30%;height:50px;'></textarea>" ?>
    </p>
    <p class="cent"><input value="新增" type="submit"><input type="reset" value="清除"></p>
</form>