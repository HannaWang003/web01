<?php
include_once "../api/db.php";
?>
<p class="t botli">編輯次選單</p>
<form action="./api/submenu.php?do=menu" method="post">
    <?php
    $mids = $Menu->all(['big_id' => $_GET['id']]);
    ?>
    <table class="all80">
        <tr>
            <th>次選單名稱</th>
            <th>次選單連結網址</th>
            <th>刪除</th>
        </tr>
        <?php
        foreach ($mids as $m) {
        ?>
            <tr>
                <td class="cent"><input type="text" value="<?= $m['text'] ?>" name="text[]" style="width:90%;"></td>
                <td class="cent"><input type="text" value="<?= $m['url'] ?>" name="url[]" style="width:90%;"></td>
                <td><input type="checkbox" name="del[]" value="<?= $m['id'] ?>"></td>
            </tr>
            <input type="hidden" name="id[]" value="<?= $m['id'] ?>">
        <?php
        }
        ?>
        <tr>
            <input type="hidden" name="big_id" value="<?= $_GET['id'] ?>">
            <td class="cent" colspan="3"><input type="submit" value="修改確定"><input type="reset" value="重置"><input type="button" value="更多次選單" onclick="more(this)">
            </td>
        </tr>
    </table>
</form>
<script>
    function more(dom) {
        let html = `
                    <tr>
                <td class="cent"><input type="text" value="" name="text2[]" style="width:90%;"></td>
                <td class="cent"><input type="text" value="" name="url2[]" style="width:90%;"></td>
                <td></td>
            </tr>
        `
        $(dom).parents('tr').before(html);
    }
</script>