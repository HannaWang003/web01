<?php
include_once "../api/db.php";
?>
<h2 class="cent">編輯次選單</h2>
<hr>
<form action="./api/submenu.php?do=menu" method="post">
    <table id="submenu" style="margin:auto;">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
    $mids = $DB->all(['big_id' => $_GET['id']]);
    foreach ($mids as $mid) {
    ?>
        <tr>
            <td><input type="text" name="text[]" value="<?= $mid['text'] ?>"></td>
            <td><input type="text" name="url[]" value="<?= $mid['url'] ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $mid['id'] ?>"></td>
            <input type="hidden" name="id[]" value="<?= $mid['id'] ?>">
        </tr>
        <?php
    }
    ?>
    </table>
    <input type="hidden" name="big_id" value="<?= $_GET['id'] ?>">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button"
            onclick="more()" value="更多次選單"></div>
</form>
<script>
function more() {
    let html = `
    <tr>
    <td><input type="text" name="text2[]"></td>
    <td><input type="text" name="url2[]"></td>
</tr>
    `
    $('#submenu').append(html);
}
</script>