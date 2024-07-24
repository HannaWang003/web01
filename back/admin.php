<?php
$rows = $Admin->all();
?>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli">管理者帳號管理</p>
    <form method="post" action="./api/edit_admin.php" method="post">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="45%">帳號</td>
                    <td width="45%">密碼</td>
                    <td width="10%">刪除</td>
                </tr>
                <?php
                if (!empty($rows)) {
                    foreach ($rows as $row) {
                ?>
                        <tr>
                            <th><input type="text" name="acc[]" value="<?= $row['acc'] ?>" style="width:95%;"></th>
                            <th><input type="password" name="pw[]" value="<?= $row['pw'] ?>" style="width:95%;"></th>
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
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./model/admin.php')" value="新增管理者帳號"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="table" value="admin">
    </form>
</div>