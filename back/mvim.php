<p class="t cent botli">動畫圖片管理</p>
<form method="post" action="./api/edit.php?do=<?= $do ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="76%">動畫圖片</td>
                <td width="8%">顯示</td>
                <td width="8%">刪除</td>
                <td></td>
            </tr>
            <?php

            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td class='cent'><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;box-shadow:2px 2px 5px #666;"></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>" <?= ($row['sh'] == 1) ? "checked" : "" ?>></td>
                    <td><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td><input type="button" value="更換圖片" onclick="op('#cover','#cvr','./modal/update.php?do=<?= $do ?>&id=<?= $row['id'] ?>')"></td>
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
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?do=<?= $do ?>')" value="新增動畫圖片"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
            </tr>
        </tbody>
    </table>

</form>