<?php
$table = $_GET['do'] ?? 'title';
$DB = ${ucfirst($table)};
?>
<p class="t cent botli">選單管理</p>
<form method="post" action="./api/edit_menu.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="35%">主選單名稱</td>
                <td width="35%">選單連結網址</td>
                <td width="10%">次選單數</td>
                <td width="5%">顯示</td>
                <td width="5%">刪除</td>
                <td width="10%"></td>
            </tr>
            <?php
            $rows = $DB->all(['big_id' => 0]);
            foreach ($rows as $row) {
            ?>
            <tr>
                <td><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:95%"></td>
                <td><input type="text" name="href[]" value="<?= $row['href'] ?>" style="width:95%"></td>
                <td><?= $DB->count(['big_id'=>$row['id']]) ?></td>
                <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                <td><input type="button" value="編輯次選單"
                        onclick="op('#cover','#cvr','./model/submenu.php?id=<?=$row['id']?>')"></td>
            </tr>
            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            <?php
            }
            ?>
        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/menu.php')" value="新增主選單">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="table" value="<?= $table ?>">
</form>