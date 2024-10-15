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
<form action="../api/edit.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <p class="t botli">新增<?= $nav ?>圖片</p>
    <p class="cent"><?= $nav ?>圖片 ： <input name="img" autofocus="" type="file"></p>
    <?= ($_GET['do'] == "title") ? "<p class='cent'>" . $nav . "替代文字 ： <input name='text' type='text' style='width:38%;'></p>" : "" ?>
    <p class="cent"><input value="新增" type="submit"><input type="reset" value="清除"></p>
</form>