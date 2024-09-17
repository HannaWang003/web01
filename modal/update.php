<?php

switch ($_GET['do']) {
    case "title":
        $tit = "標題區";
        break;
    case "image":
        $tit = "校園映像";
        break;
    case "mvim":
        $tit = "動畫";
        break;
}
?>
<h2 class="cent">更換<?= $tit ?>圖片</h2>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="cent"><?= $tit ?>圖片: <input type="file" name="img" id=""></div>
    <div class="cent"><input type="submit" value="更換"><input type="reset" value="重置"></div>
</form>