<?php
$rows = $DB->all(['big_id' => 0]);
?>
<p class="t cent botli">選單管理</p>
<form method="post" action="./api/edit_menu.php?do=<?= $table ?>">
    <table width="100%" class="yel">
        <tr>
            <td>主選單名稱</td>
            <td>選單連結網址</td>
            <td width="5%;">次選單數</td>
            <td width="2%;">顯示</td>
            <td width="2%;">刪除</td>
            <td></td>
        </tr>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <th><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:90%"></th>
                <th><input type="text" name="url[]" value="<?= $row['url'] ?>" style="width:90%"></th>
                <th><?= $DB->count(['big_id' => $row['id']]) ?></th>
                <th><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>>
                </th>
                <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                <th><input type="button" value="編輯次選單"
                        onclick="op('#cover','#cvr','./modal/submenu.php?do=<?= $table ?>&id=<?= $row['id'] ?>')">
                </th>
            </tr>
        <?php
        }
        ?>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/bigmenu.php?do=<?= $table ?>')" value="新增主選單"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
</form>