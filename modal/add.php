<?php

switch ($_GET['do']) {
    case "ad":
        $tit = "動態文字廣告";
        break;
    case "news":
        $tit = "最新消息資料";
        break;
}
?>
<h2 class="cent">新增<?= $tit ?>圖片</h2>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post">
    <?php
    if ($_GET['do'] == "ad") {
    ?>
    <div class="cent"><?= $tit ?>: <input type="text" name="text" id="" style="width:50%;"></div>
    <?php
    } else {
    ?>
    <div class="cent"><?= $tit ?>: <textarea name="text"
            style="width:50%;height:100px;vertical-align: middle"></textarea>
    </div>
    <?php
    }
    ?>
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>