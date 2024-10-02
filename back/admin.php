<p class="t cent botli">頁尾版權資料管理</p>
<form method="post" action="./api/edit_admin.php?do=<?= $table ?>">
    <table class="yel" width="100%" style="margin:auto;">
        <tr>
            <td class="cent"><b>帳號</b></td>
            <td class="cent"><b>密碼</b></td>
            <td class="cent" width="10%"><b>刪除</b></td>
        </tr>
        <?php
        $rows = $DB->all();
        foreach ($rows as $row) {
        ?>
            <tr>
                <th><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:90%"></th>
                <th><input type="password" name="pw[]" value="<?= $row['pw'] ?>" style="width:90%"></th>
                <th><input type="checkbox" name="del[]" value="<?= $row['id'] ?>"></th>
                <input type="hidden" name="id[]" value="<?= $row['id'] ?>">
            </tr>
        <?php
        }
        ?>
    </table>
    <table style="margin-top:40px; width:70%;">
        <tbody>
            <tr>
                <td width="200px"><input type="button"
                        onclick="op('#cover','#cvr','./modal/admin.php?do=<?= $table ?>')" value="新增管理者帳號"></td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
</form>