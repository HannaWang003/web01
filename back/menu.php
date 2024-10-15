<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">選單管理</p>
    <form method="post" action="./api/menu.php?do=<?= $do ?>">
        <table>
            <tr class="yel">
                <td width="35%">主選單名稱</td>
                <td width="35%">選單連結網址</td>
                <td width="8%">次選單數</td>
                <td width="2%">顯示</td>
                <td width="2%">刪除</td>
                <td width=""></td>
            </tr>
            <?php
            $bigs = $DB->all(['big_id' => 0]);
            foreach ($bigs as $b) {
            ?>
                <tr>
                    <td><input type="text" name="text[]" value="<?= $b['text'] ?>" style="width:90%;"></td>
                    <td><input type="text" name="url[]" value="<?= $b['url'] ?>" style="width:90%;"></td>
                    <td><?= $DB->count(['big_id' => $b['id']]) ?></td>
                    <td><input type="checkbox" name="sh[]" value="<?= $b['id'] ?>" <?= ($b['sh'] == 1) ? "checked" : "" ?>>
                    </td>
                    <td><input type="checkbox" name="del[]" value="<?= $b['id'] ?>"></td>
                    <td><input type="button" value="編輯次選單"
                            onclick="op('#cover','#cvr','./modal/submenu.php?do=<?= $do ?>&big_id=<?= $b['id'] ?>')"></td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $b['id'] ?>">
            <?php
            }
            ?>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <td width="200px"><input type="button"
                            onclick="op('#cover','#cvr','./modal/menu.php?do=<?= $do ?>')" value="新增主選單"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</div>