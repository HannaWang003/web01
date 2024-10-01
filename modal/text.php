<?php
switch ($_GET['do']) {
    case "ad":
        $nav = "動態文字廣告";
        break;
}
?>
<h1 class="cent">新增<?= $nav ?></h1>
<hr>
<form action="./api/text.php?do=<?= $_GET['do'] ?>" method="post">
    <table width="60%" style="margin:auto">
        <tr>
            <td style="text-align:end"><?= $nav ?> : </td>
            <td><input type="text" name="text" id="" style="width:90%"></td>
        </tr>
        <tr>
            <td colspan="2" class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></td>
        </tr>
    </table>
</form>