<?php
include_once "../api/db.php";
$subs = $DB->all(['big_id' => $_GET['id']]);
?>
<h2 class="t cent botli">編輯次選單</h2>
<form method="post" action="../api/submenu.php?do=<?= $_GET['do'] ?>">
    <table width="80%" style="margin:auto" id="sub">
        <tr>
            <th width="45%">次選單名稱</th>
            <th width="45%">次選單連結網址</th>
            <th width="10%">刪除</th>
        </tr>
        <?php
        foreach ($subs as $sub) {
        ?>
            <tr>
                <td><input type="text" name="text[]" value="<?= $sub['text'] ?>" style="width:90%"></td>
                <td><input type="text" name="url[]" value="<?= $sub['url'] ?>" style="width:90%"></td>
                <td><input type="checkbox" name="del[]" value="<?= $sub['id'] ?>"></td>
            </tr>
            <input type="hidden" name="id[]" value="<?= $sub['id'] ?>">
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
    <td><input type="text" name="text2[]" value="" style="width:90%"></td>
    <td><input type="text" name="url2[]" value="" style="width:90%"></td>
</tr>
        `
        $('#sub').append(html);
    }
</script>