<p class="t cent botli">動態文字廣告管理</p>
<form method="post" action="./api/edit.php?do=<?= $do ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="76%">動態文字廣告</td>
                <td width="12%">顯示</td>
                <td width="12%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:90%"></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
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
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/text.php?do=<?= $do ?>')" value="新增動態文字廣告"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>

</form>