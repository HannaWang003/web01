<?php
$table = $_GET['do'];
$DB = ${ucfirst($table)};
$rows = $DB->all(['big_id' => 0]);
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/edit.php">
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
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <td style="text-align:center;"><input type="text" name="text[]" value="<?= $row['text'] ?>">
                            </td>
                            <td style="text-align:center;"><input type="text" name="href[]" value="<?= $row['href'] ?>"></td>
                            <td><?= $DB->count(['big_id' => $row['id']]) ?></td>
                            <td style="text-align:center;"><input type="checkbox" name="sh[]" <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></td>
                            <td style="text-align:center;"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                            <td style="text-align:center;"><input type="button" value="編輯次選單" onclick="op('#cover','#cvr','./modal/submenu.php?table=<?= $table ?>&id=<?= $row['id'] ?>')">
                            </td>
                            <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?table=<?= $table ?>')" value="新增主選單">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        <input type="hidden" name="table" value="<?= $table ?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>