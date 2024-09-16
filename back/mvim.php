<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/edit.php?do=mvim">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">動畫圖片</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $DB->all();
                foreach ($rows as $row) {
                ?>
                <tr>
                    <td style="text-align:center"><img src="./img/<?= $row['img'] ?>"
                            style="width:150px;height:80px;" /></td>
                    <td style="text-align:center"><input type="checkbox" name="sh[]" value="<?= $row['id'] ?>"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?> />
                    </td>
                    <td style="text-align:center"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center"><input type="button"
                            onclick="op('#cover','#cvr','./modal/update.php?do=mvim&id=<?= $row['id'] ?>')"
                            value="更換圖片">
                    </td>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/upload.php?do=mvim')"
                            value="新增動畫圖片">
                    </td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>