<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="./api/edit.php?do=<?= $do ?>">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="45%">帳號</td>
                <td width="45%">密碼</td>
                <td width="10%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td class="cent"><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:90%"></td>
                    <td class="cent"><input type="password" name="pw[]" value="<?= $row['pw'] ?>" style="width:90%"></td>
                    <td class="cent"><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></td>
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
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/admin.php?do=<?= $do ?>')"
                        value="新增管理者帳號"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>