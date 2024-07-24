<?php
include_once "../api/db.php";
$big_id = $_GET['id'];
$rows = $Menu->all(['big_id' => $big_id]);
?>
<form method="post" action="../api/edit_submenu.php" method="post">
    <h2 class="t botli">編輯次選單</h2>
    <table style="margin:auto;">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        if (!empty($rows)) {
            foreach ($rows as $row) {
        ?>
        <tr>
            <th><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:95%;"></th>
            <th><input type="text" name="href[]" value="<?= $row['href'] ?>" style="width:95%;"></th>
            <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
            <input type="hidden" name="id[]" value="<?=$row['id']?>">
        </tr>
        <?php
            }
        }
        ?>
        <tr>
            <td colspan="3"><input value="修改確定" type="submit"><input type="reset" value="重置"><input type="button"
                    value="更多次選單" onclick="more(this)"></td>
        </tr>
    </table>
    <input type="hidden" name="big_id" value="<?= $big_id ?>">
</form>
<script>
function more(dom) {
    let html = `
                        <tr>
                    <th><input type="text" name="add_text[]" style="width:95%;"></th>
                    <th><input type="text" name="add_href[]" style="width:95%;"></th>
                    <th></th>
                </tr>
        `
    $(dom).parents('tr').before(html);

}
</script>