<?php
include_once "../api/db.php";
$rows = $DB->all(['big_id' => $_GET['id']]);
?>
<h2 class="cent">編輯次選單</h2>
<hr>
<form action="../api/submenu.php?do=menu" method="post">
    <table style="margin:auto" id="submenu">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        foreach ($rows as $row) {
        ?>
        <tr>
            <td><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:90%;"></td>
            <td><input type="text" name="url[]" value="<?= $row['url'] ?>" style="width:90%;"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
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
                <td><input type="text" name="text2[]" style="width:90%;"></td>
                <td><input type="text" name="url2[]" style="width:90%;"></td>
            </tr>
        `
    $('#submenu').append(html);
}
</script>