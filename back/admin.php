<?php
$table = $_GET['do'] ?? 'title';
$DB = ${ucfirst($table)};
?>
<p class="t cent botli">管理者帳號管理</p>
<form method="post" action="./api/edit_admin.php">
    <table width="100%">
        <tbody>
            <tr class="yel">
                <td width="43%">帳號</td>
                <td width="43%">密碼</td>
                <td width="14%">刪除</td>
            </tr>
            <?php
            $rows = $DB->all();
            foreach ($rows as $row) {
            ?>
                <tr>
                    <td><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:95%"></td>
                    <td><input type="password" name="pw[]" value="<?= $row['pw'] ?>" style="width:95%"></td>
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
                <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/admin.php')" value="新增管理者帳號">
                </td>
                <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                </td>
            </tr>
        </tbody>
    </table>
    <input type="hidden" name="table" value="<?= $table ?>">
</form>