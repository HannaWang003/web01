<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="./api/admin.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="40%">帳號</td>
                <td width="40%">密碼</td>
                <td width="10%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td width="40%"><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:90%"></td>
                    <td width="40%"><input type="password" name="pw[]" value="<?= $row['pw'] ?>" style="width:90%"></td>
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
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/<?= $table ?>.php?do=<?= $table ?>')" value="新增管理者帳號">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>

</form>