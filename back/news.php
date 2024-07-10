<p class="t cent botli">最新消息資料管理</p>
<?php
$table = $_GET['do'] ?? "title";
$DB = ${ucfirst($table)};
$rows = $DB->all();
?>
<form method="post" action="./api/edit.php?table=<?= $table ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="70%">最新消息資料內容</td>
                <td width="10%">顯示</td>
                <td width="10%">刪除</td>
            </tr>
            <?php
            foreach ($rows as $row) {
            ?>
            <tr>
                <td width="70%">
                    <textarea name="text[]" style="width:80%;height:100px;"><?= $row['text'] ?></textarea>
                </td>
                <td width="10%"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                        <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                <td width="10%"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
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
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $do ?>.php?table=<?= $do ?>')" value="新增最新消息資料"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>