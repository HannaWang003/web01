<p class="t cent botli">選單管理</p>
<?php
$table = $_GET['do'] ?? "title";
$DB = ${ucfirst($table)};
$rows = $DB->all(['big_id' => 0]);
?>
<form method="post" action="./api/edit.php?table=<?= $table ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="30%">主選單名稱</td>
                <td width="30%">選單連結網址</td>
                <td width="10%">次選單數</td>
                <td width="5%">顯示</td>
                <td width="5%">刪除</td>
                <td width="20%"></td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="35%"><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:80%"></td>
                    <td width="35%"><input type="text" name="url[]" value="<?= $row['url'] ?>" style="width:80%"></td>
                    <td width="10%"><?= $Menu->count(['big_id' => $row['id']]) ?></td>
                    <td width="5%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td width="5%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td width="10%"><input type="button" value="編緝次選單" onclick="op('#cover','#cvr','./modal/submenu.php?table=<?= $do ?>&id=<?= $row['id'] ?>')">
                    </td>
                    <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                </tr>
            <?php
            }
            ?>

        </tbody>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <input type="hidden" name="table" name="title">
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增主選單"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>