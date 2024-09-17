<h2 class="cent">新增主選單</h2>
<hr>
<form action="./api/upload.php?do=<?= $_GET['do'] ?>" method="post">
    <div class="cent">主選單名稱: <input type="text" name="text" style="width:50%"></div>
    <div class="cent">選單連結網址: <input type="text" name="url" style="width:50%"></div>
    <input type="hidden" name="big_id" value="0">
    <div class="cent"><input type="submit" value="新增"><input type="reset" value="重置"></div>
</form>