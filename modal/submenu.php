<?php
include_once "../api/db.php";
?>
<form action="../api/submenu.php?do=<?= $_GET['do'] ?>" method="post">
    <p class="t botli">編輯選單</p>
    <table width="80%" style="margin:auto;">
        <tr>
            <th width="46%">次選單名稱</th>
            <th width="46%">次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        $mids = $DB->all(['big_id' => $_GET['big_id']]);
        foreach ($mids as $m) {
        ?>
            <tr>
                <td class="cent"><input type="text" name="text[]" value="<?= $m['text'] ?>" style="width:80%"></td>
                <td class="cent"><input type="text" name="url[]" value="<?= $m['url'] ?>" style="width:80%"></td>
                <td class="cent"><input type="checkbox" name="del[]" value="<?= $m['id'] ?>"></td>
            </tr>
            <input type="hidden" name="id[]" value="<?= $m['id'] ?>">
        <?php
        }
        ?>
        <tr>
            <input type="hidden" name="big_id" value="<?= $_GET['big_id'] ?>">
            <th colspan="3"><input value="修改確定" type="submit"><input type="reset" value="重置"><input type="button"
                    value="更多次選單" onclick="more(this)"></th>
        </tr>
    </table>
</form>
<script>
    function more(dom) {
        let html = `
                <tr>
                <td class="cent"><input type="text" name="text2[]" style="width:80%"></td>
                <td class="cent"><input type="text" name="url2[]" style="width:80%"></td>
            </tr>
    `
        $(dom).parents('tr').before(html);
    }
</script>