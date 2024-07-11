<?php
include_once "../api/db.php";
?>
<p class="t cent botli">新增主選單</p>
<form action="./api/submenu.php?table=<?= $_GET['table'] ?>" method="post">
    <style>
        #mainNav {
            margin: auto;
        }
    </style>
    <table id="mainNav">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        $rows = $Menu->all(['big_id' => $_GET['id']]);
        if (!empty($rows)) {
            foreach ($rows as $row) {
        ?>
                <tr>
                    <td><input type="text" name="text[]" value-="<?= $row['text'] ?>"></td>
                    <td><input type="text" name="href[]" value-="<?= $row['href'] ?>"></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            <?php
            }
        } else {
            ?>
            <tr>
                <td><input type="text" name="addtext[]" id=""></td>
                <td><input type="text" name="addhref[]" id=""></td>
                <td><input type="button" value="刪除" onclick="delItem(this)"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
    <div class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單" onclick="more()"></div>
</form>
<script>
    function delItem(dom) {
        $(dom).parents('tr').remove();
    }

    function more() {
        let html = `
            <tr>
            <td><input type="text" name="addtext[]" id=""></td>
            <td><input type="text" name="addhref[]" id=""></td>
            <td><input type="button" value="刪除" onclick="delItem(this)"></td>
        </tr>
    `
        $('#mainNav').append(html);
    }
</script>