<?php
if (isset($_POST[$table])) {
    $DB->save(['id' => 1, $table => $_POST[$table]]);
    to("?do=$table");
}
?>
<h2 class="cent">進站總人數管理</h2>
<hr>
<form action="?do=<?= $table ?>" method="post">
    <div class="cent"><span style="background:#F3DA49;padding:5px 20px 5px 10px;">進站總人數:</span><input type="text"
            name="<?= $table ?>" value="<?= $DB->find(1)[$table] ?>"></div>
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></div>
</form>