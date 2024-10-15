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
<form action="../api/update.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <p class="t botli">更換<?= $nav ?>圖片</p>
    <p class="cent"><?= $nav ?>圖片 ： <input name="img" autofocus="" type="file"></p>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <p class="cent"><input value="更換" type="submit"><input type="reset" value="清除"></p>
</form>