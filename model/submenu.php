<?php
include_once "../api/db.php";
?>
<h2 class="t cent botli">編輯次選單</h2>
<form method="post" action="./api/edit_submenu.php" method="post" style="width:60%;margin:auto;">
    <table id="submenu">
        <tr>
            <td>次選單名稱</td>
            <td>選單連結網址</td>
            <td>刪除</td>
        </tr>
        <?php
        $rows = $Menu->all(['big_id' => $_GET['id']]);
        if (!empty($rows)) {
            foreach ($rows as $row) {
        ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
                    <td><input type="text" name="href[]" value="<?= $row['href'] ?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
        <?php

            }
        }
        ?>
        <tr>
            <td><input type="text" name="add_text[]"></td>
            <td><input type="text" name="add_href[]"></td>
        </tr>
    </table>
    <input type="hidden" name="big_id" value="<?= $_GET['id'] ?>">
    <input type="hidden" name="table" value="menu">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單" onclick="more()"></div>
</form>
<script>
    function more() {
        let html = `
                <tr>
            <td><input type="text" name="add_text[]"></td>
            <td><input type="text" name="add_href[]"></td>
        </tr>
        `
        $('#submenu').append(html);
    }
</script>