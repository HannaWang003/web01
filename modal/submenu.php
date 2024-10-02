<?php
include_once "../api/db.php";
?>
<h1 class="cent">編輯次選單</h1>
<hr>
<form action="../api/edit_submenu.php?do=menu" method="post">
    <table width="80%" style="margin:auto;" id="submenu">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        $subs = $DB->all(['big_id' => $_GET['id']]);
        foreach ($subs as $sub) {
        ?>
        <tr>
            <th><input type="text" name="text[]" style="width:90%" value="<?= $sub['text'] ?>"></th>
            <th><input type="text" name="url[]" style="width:90%" value="<?= $sub['url'] ?>"></th>
            <th><input type="checkbox" name="del[]" value="<?= $sub['id'] ?>"></th>
            <input type="hidden" name="id[]" value="<?= $sub['id'] ?>">
        </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="big_id" value="<?= $_GET['id'] ?>">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button"
            value="更多次選單" onclick="more()"></div>
</form>
<script>
function more() {
    let html = `
                    <tr>
                <th><input type="text" name="text2[]" style="width:90%"></th>
                <th><input type="text" name="url2[]" style="width:90%"></th>
                <th></th>
            </tr>
        `
    $('#submenu').append(html);
}
</script>