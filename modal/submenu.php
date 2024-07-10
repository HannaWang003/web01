<?php
include_once "../api/db.php";
$rows = $Menu->all(['big_id' => $_GET['id']]);
?>
<h1 class="cent">編輯次選單</h1>
<hr>
<form action="./api/submenu.php?id=<?= $_GET['id'] ?>" method="post">
    <table style="margin:auto" id="sub">
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
            <td><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
            <td><input type="text" name="url[]" value="<?= $row['url'] ?>"></td>
            <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
        </tr>
        <?php
            }
        } else {
            ?>
        <tr>
            <td><input type="text" name="add_text[]" id=""></td>
            <td><input type="text" name="add_url[]" id=""></td>
            <td><input type="button" value="刪除" onclick="remove(this)"></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="big_id" value="0">
    <div class="cent">
        <input type="submit" value="編輯">
        <input type="reset" value="重置">
        <input type="button" value="更多次選單" onclick="more()">

    </div>
</form>
<script>
function remove(dom) {
    $(dom).parents('tr').remove();
}

function more() {
    let html = ` <tr>
                <td><input type="text" name="text[]" id=""></td>
                <td><input type="text" name="url[]" id=""></td>
                <td><input type="button" value="刪除" onclick="remove(this)"></td>
            </tr>`
    $('#sub').append(html)

}
</script>