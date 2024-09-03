<?php
include_once "../api/db.php";
?>
<p class="t cent botli">編輯次選單</p>
<form action="../api/submenu.php" method="post">
    <table style="margin:auto;" id="submenu">
        <tr>
            <td width="45%">次選單名稱</td>
            <td width="45%">次選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['big_id' => $_GET['id']]);
        if (!empty($rows)) {
            foreach ($rows as $row) {
        ?>
        <tr>
            <td><input type="text" name="text[]" style="width:90%" value="<?= $row['text'] ?>"></td>
            <td><input type="text" name="url[]" style="width:90%" value="<?= $row['url'] ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
        </tr>
        <?php
            }
        }
        ?>
    </table>
    <table style="margin:auto;">
        <tbody>
            <tr>
                <td colspan="2"><input type="submit" value="編輯確定"><input type="reset" value="重置"><input type="button"
                        value="更多次選單" onclick="more()"></td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="big_id" value="<?= $_GET['id'] ?>">
</form>
<script>
function more() {
    let html = `
                <tr>
            <td><input type="text" name="text2[]" style="width:90%"></td>
            <td><input type="text" name="url2[]" style="width:90%"></td>
            <td></td>
        </tr>
        `
    $('#submenu').append(html);
}
</script>