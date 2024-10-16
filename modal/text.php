<?php
switch ($_GET['do']) {
    case "ad":
        $nav = "動態文字廣告";
        break;
    case "news":
        $nav = "最新消息資料內容";
        break;
}
?>
<h3 class="t botli">新增<?= $nav ?></h3>
<form action="./api/edit.php?do=<?= $_GET['do'] ?>" method="post">
    <table class="all80">
        <tr>
            <td class="l"><?= $nav ?>:</td>
            <td>
                <?php
                if ($_GET['do'] == "ad") {
                ?>
                    <input type="text" name="text" id="" style="width:80%">
                <?php
                } else {
                ?>
                    <textarea name="text" style="width:80%;height:50px;"></textarea>
                <?php
                }
                ?>
            </td>
        </tr>
        <tr>
            <td class="cent" colspan="2"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>