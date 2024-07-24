<?php
$rows = $Ad->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動態文字廣告管理</p>
    <form method="post" action="./api/edit_ad.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="80%">動態文字廣告</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <th><input type="text" name="text[]" value="<?= $row['text'] ?>" style="width:95%;"></th>
                            <th><input type="checkbox" name="sh[]" <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></th>
                            <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/ad.php')" value="新增動態文字廣告"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="ad">
    </form>
</div>