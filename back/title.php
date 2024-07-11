<?php
$table = $_GET['do'] ?? "title";
$DB = ${ucfirst($table)};
$rows = $DB->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">網站標題管理</p>
    <form method="post" action="./api/edit.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">網站標題</td>
                    <td width="23%">替代文字</td>
                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                <tr>
                    <td style="text-align:center;"><img src="./img/<?= $row['img'] ?>" style="width:300px;height:30px;">
                    </td>
                    <td style="text-align:center;"><input type="text" name="text[]" value="<?= $row['text'] ?>"></td>
                    <td style="text-align:center;"><input type="radio" name="sh"
                            <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center;"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
                    <td style="text-align:center;"><input type="button" value="更換圖片"
                            onclick="op('#cover','#cvr','./modal/upload.php?table=<?= $table ?>&id=<?= $row['id'] ?>')">
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
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?table=<?= $table ?>')"
                            value="新增網站標題圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                        <input type="hidden" name="table" value="<?= $table ?>">
                    </td>
                </tr>
            </tbody>
        </table>

    </form>
</div>