<?php
$rows = $Mvim->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">動畫圖片管理</p>
    <form method="post" action="./api/edit_mvim.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="50%">動畫圖片</td>
                    <td width="10%">顯示</td>
                    <td width="10%">刪除</td>
                    <td width="30%"></td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <th><img src="./img/<?= $row['img'] ?>" style="width:100px;height:68px;"></th>
                            <th><input type="checkbox" name="sh[]" <?= ($row['sh'] == 1) ? "checked" : "" ?> value="<?= $row['id'] ?>"></th>
                            <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
                            <th><input type="button" onclick="op('#cover','#cvr','./model/upload.php?table=mvim&id=<?= $row['id'] ?>')" value="更新圖片"></th>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/mvim.php')" value="新增動畫圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="mvim">
    </form>
</div>