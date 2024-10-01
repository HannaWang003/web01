<?php
switch ($_GET['do']) {
    case "title":
        $nav = "標題區";
        break;
    case "mvim": 
        $nav="動畫";
        break;
    case "image": 
        $nav="校園映像";
        break;
}
?>
<h1 class="cent">更換<?= $nav ?>圖片</h1>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post" enctype="multipart/form-data">
    <div class="cent"><?= $nav ?>圖片 : <input type="file" name="img" id=""></div>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="cent"><input type="submit" value="更換"><input type="reset" value="重置"></div>
</form>